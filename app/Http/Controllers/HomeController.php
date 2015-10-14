<?php namespace RegistryAttendant\Http\Controllers;

use RegistryAttendant\Http\Requests;
use RegistryAttendant\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index()
    {
        return view('home');
    }
}
