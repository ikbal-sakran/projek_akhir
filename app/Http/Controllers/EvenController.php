<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EvenController extends Controller
{
    // Create a new event
    public function createEvent(Request $request)
    {
        $validateData = $request->validate([
            "nama_event" => "required",
            "tempat_event" => "required",
            "start_event" => "required",
            "end_event" => "required",
        ]);

        Event::create([
            "nama_event" => $validateData['nama_event'],
            "tempat_event" => $validateData['tempat_event'],
            "start_event" => $validateData['start_event'],
            "end_event" => $validateData['end_event'],
        ]);

        return response()->json(['message' => 'Event created successfully'], 201);
    }

    // Retrieve all events
    public function getEvents()
    {
        $events = Event::all();
        return response()->json($events, 200);
    }

    // Retrieve a specific event by ID
    public function getEvent($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        return response()->json($event, 200);
    }

    // Update an event
    public function updateEvent(Request $request, $id)
    {
        $validateData = $request->validate([
            "nama_event" => 'required',
            "tempat_event" => 'required',
            "start_event" => 'required',
            "end_event" => 'required',
        ]);

        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->update($validateData);

        return response()->json(['message' => 'Event updated successfully'], 200);
    }

    // Delete an event
    public function deleteEvent($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->delete();

        return response()->json(['message' => 'Event deleted successfully'], 200);
    }
}
