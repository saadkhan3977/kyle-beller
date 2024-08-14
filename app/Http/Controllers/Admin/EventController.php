<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $data['events'] = Event::paginate(10);
        return view('backend.event.index', $data);
    }

    public function create()
    {
        return view('backend.event.create');
    }

 
    public function store(Request $request)
    {
        // toastr()->error('An error has occurred please try again later.');
        // return back();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'price' => 'required|numeric',
            'time' => 'required',
            // 'status' => 'required|string|max:255',
        ]);

        

        $event = Event::create([
            'name' => $request->input('name'),
            'event_date' => $request->input('event_date'),
            'price' => $request->input('price'),
            'time' => $request->input('time'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('event.index')->with('success', 'Event created successfully');      

    }

    public function edit($id)
    {
        $data['event'] = Event::find($id);
        return view('backend/event/edit', $data);
    }
    
    public function update($id, Request $request)
    {
         request()->validate([
            'name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'price' => 'required|numeric',
            'time' => 'required',
            // 'status' => 'required|string|max:255',
    
        ]);

        $event = Event::find($id);
    
        $event->update([
            'name' => request()->input('name'),
            'event_date' => request()->input('event_date'),
            'price' => request()->input('price'),
            'time' => request()->input('time'),
            'status' => request()->input('status'),
        ]);

        return redirect()->route('event.index')
                        ->with('success','Event updated successfully');
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();    
        return redirect()->route('event.index')
                        ->with('success','Event Delete successfully');
    }
}
