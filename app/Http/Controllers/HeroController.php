<?php

namespace App\Http\Controllers;

use App\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $heroes = Hero::all()->toArray();

        return view('Hero.index', ['heroes' => $heroes]);
    }

    public function create()
    {
        return view('Hero.create');
    }
}
