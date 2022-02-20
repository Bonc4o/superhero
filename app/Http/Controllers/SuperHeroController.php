<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuperHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $superheroes=Superhero::get();
        return view('index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $validated=$request->validate([
            'nickname'=>'required',
            'real_name'=>'required|max:30',
            'origin_description'=>'required|max:500',
            'catch_phrase'=>'required|max:100',
            'superpowers'=>'required|max:200',
        ]);

        Superhero::create($request->all());
        return redirect()->route('superheroes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Superhero $superhero
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($nickname)
    {
        $superhero=Superhero::where('nickname', $nickname)->first();

        return view('show', compact('superhero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Superhero $superhero
     * @return \Illuminate\Http\Response
     */
    public function edit(Superhero $superhero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Superhero $superhero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Superhero $superhero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Superhero $superhero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Superhero $superhero)
    {
        //
    }
}
