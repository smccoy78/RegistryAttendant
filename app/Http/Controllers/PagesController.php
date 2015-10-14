<?php namespace RegistryAttendant\Http\Controllers;

use RegistryAttendant\Http\Requests;
use RegistryAttendant\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//about method
    public function about()
    {
        $first = 'Shaun';
        $last = 'McCoy';

        $people = [
            'Taylor Otwell', 'Dayle Rees'
        ];

        return view('pages.about', compact('people'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
