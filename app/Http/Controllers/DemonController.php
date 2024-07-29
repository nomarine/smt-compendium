<?php

namespace App\Http\Controllers;

use App\Models\Demon;
use Illuminate\Http\Request;

class DemonController extends Controller
{
    public function __construct(Demon $demon) {
        $this->demon = $demon;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->demon->rules(), $this->demon->feedback());
        $demon = $this->demon->create([
            'name' => $request->name,
            'lore' => $request->lore,
        ]);

        return response()->json($demon, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Demon $demon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Demon $demon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Demon $demon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Demon $demon)
    {
        //
    }
}
