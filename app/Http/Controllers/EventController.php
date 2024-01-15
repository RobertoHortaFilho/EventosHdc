<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index ()
    {   
        $search = request('search');

        if($search) {
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
            
        } else {
            $events = Event::all();
        }

        
        return view('home', ['events' => $events, 'search' => $search]);
    }

    public function create ()
    {
        return view('events/createEvent');
    }

    public function show ($id = 1)
    {
        $event = Event::findOrFail($id);
        return view('events/showEvent', ['event' => $event]);
    }

    public function store(Request $request)
    {
        $event = new Event;
        
        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        //image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        
        $event->save();
        return redirect('/')->with('msg', 'Sucesso ao criar o evento!!');
    }
}
