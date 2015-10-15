<?php namespace RegistryAttendant\Http\Controllers;

use RegistryAttendant\Http\Requests;
use RegistryAttendant\Http\Requests\RegistryRequest;
use RegistryAttendant\Http\Controllers\Controller;
use RegistryAttendant\Registry;
use RegistryAttendant\Events;

use Carbon\Carbon;
use Illuminate\Http\Request;

class RegistryController extends Controller {

    public function index()
    {
        $registry = Registry::latest('created_at')->TodayEvents()->get();

        return view('registry.index', compact('registry'));
    }

    public function show($id)
    {
        $registry = Registry::latest('created_at')->join('events', 'events.id', '=', 'registries.event_id')->where('event_id', '=', $id)->get();
//dd($registry);
        return view('registry.show', compact('event', 'registry'));
    }

    public function create()
    {
        //$events = Events::where('event_date','>=', Carbon::today() )->lists('event_name', 'id');
        $events = Events::latest('created_at')->lists('event_name', 'id');

        return view('registry.create', compact('events'));
    }

    public function store(RegistryRequest $request)
    {
        Registry::create($request->all());

        return redirect('registry');
    }
}
