<?php
namespace App\Http\Controllers;

class AdminController extends Controller {

    public function welcome() {
        return view('voyager.profile');
    }

}