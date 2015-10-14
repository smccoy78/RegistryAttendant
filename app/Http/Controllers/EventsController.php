<?php namespace RegistryAttendant\Http\Controllers;

use RegistryAttendant\Events;
use RegistryAttendant\Http\Requests;
use RegistryAttendant\Http\Requests\EventRequest;
use RegistryAttendant\Http\Controllers\Controller;

use Carbon\Carbon;
use Auth;

class EventsController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create, edit, update']);
    }

	public function index()
    {
        $events = Events::latest('created_at')->get();

        return view('events.index', compact('events'));
    }

    public function show($id)
    {
        $event = Events::findorfail($id);

        return view('events.show', compact('event'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(EventRequest $request)
    {
        $event = new Events($request->all());

        Auth::user()->events()->save($event);

        return redirect('events');
    }

    public function edit($id)
    {
        $event = Events::findOrFail($id);

        return view('events.edit', compact('event'));
    }

    public function update($id, EventRequest $request)
    {
        $event = Events::findOrFail($id);

        $event->update($request->all());

        return redirect('events');
    }
}
