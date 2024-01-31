<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        //imagine we loaded data from the db
        $ourName = 'McLean';
        $animals = ['Cat', 'Dog', 'Cougar', 'Horse'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName]);
    }

    public function aboutPage(){
        return view('single-post');
    }
}
