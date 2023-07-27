<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desserts;

class DessertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desserts = Desserts::paginate(15);
        return view('index',compact('desserts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'potr' => 'max:255',

            'name' => 'required|max:255',
			'score' => 'required|integer|between:0,100',
        ]);

        $desserts = Desserts::create($validatedData);

        return redirect('/desserts')->with('success', 'Записите са успешно добавени!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(auth()->user()->isAdmin != 1)

           return redirect('/desserts')->with('error', 'Нямате администраторски права!');
		   
        $desserts = Desserts::findOrFail($id);

        return view('edit', compact('desserts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(auth()->user()->isAdmin != 1)

           return redirect('/desserts')->with('error', 'Нямате администраторски права!');
		   
        $validatedData = $request->validate([

            'potr' => 'max:255',

            'name' => 'required|max:255',
			'score' => 'required|integer|between:0,100',
        ]);

        Desserts::whereId($id)->update($validatedData);

        return redirect('/desserts')->with('success', 'Записите са успешно актуализирани!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(auth()->user()->isAdmin != 1)

           return redirect('/desserts')->with('error', 'You are not admin!');
		   
        $desserts = Desserts::findOrFail($id);

        $desserts->delete();

        return redirect('/desserts')->with('success', 'Записите са успешно изтрити!');
    }
}
