<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index(){
        $events = Event::all();
        return view('index',compact('events'));
    }
    
    public function store(Request $request){
        $create = $request->all();
        $data = $request->validate([
            'title'=>['required','max:50'],
            'description'=>['required','max:50'],
            'date'=>['required','max:50'],
            'location'=>['required','max:50'],
        ]);
        $event = Event::create($create);

        return redirect()->back()->with('succes','Sa adaugat cu succes');
    }

    public function destroy(Event $event): RedirectResponse{
        $event = Event::find('id')
        
    }
}
