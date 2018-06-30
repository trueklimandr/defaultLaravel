<?php

namespace App\Http\Controllers;

use App\Hero;
use App\Http\Requests\HeroRequest;

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
        return view('Hero.create', ['action' => 'Create', 'heroActive' => true]);
    }

    /**
     * @param HeroRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(HeroRequest $request)
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

    /**
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(int $id)
    {
        Hero::findOrFail($id)->delete();

        return redirect('heroes');
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(int $id)
    {
        return view('Hero.show', ['hero' => Hero::findOrFail($id)]);
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $hero = Hero::findOrFail($id);

        return view('Hero.edit', [
            'hero' => $hero,
            'action' => 'Update',
            'heroActive' => $hero->active,
        ]);
    }

    /**
     * @param int $id
     * @param HeroRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(int $id, HeroRequest $request)
    {
        Hero::findOrFail($id)->update($request->all());

        return redirect('heroes');
    }
}
