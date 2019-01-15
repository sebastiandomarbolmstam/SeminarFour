<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Home';
        return view('pages.index', compact('title'));
    }

    public function meatballs(){
        $title = 'Swedish Meatballs';
        return view('pages.meatballs', compact('title'));
    }

    public function pancakes(){
        $title = 'American Pancakes';
        return view('pages.pancakes', compact('title'));
    }

    public function calendar(){
        $title = 'Calendar';
        return view('pages.calendar', compact('title'));
    }
}
