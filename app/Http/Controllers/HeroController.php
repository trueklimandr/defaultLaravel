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
        return view('Hero.index', ['heroes' => Hero::isActive()
            ->orderBy('name')
            ->get()
            ->toArray()]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Hero.create');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        Hero::create($request->toArray());

        return redirect('heroes');
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delete(int $id)
    {
        return view('Hero.delete', ['hero' => Hero::findOrFail($id)]);
    }

    public function remove(int $id)
    {
        Hero::where('id', $id)->delete();

        return redirect('heroes');
    }
}
