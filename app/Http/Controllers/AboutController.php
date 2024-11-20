<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $member = 'Member';
        $members = [
            ['name' => 'Marollano Chedrile', 'role' => $member],
            ['name' => 'Calibat khris ', 'role' => $member],
            ['name' => 'Ceniza Mark Anthony', 'role' => 'Leader'],
            ['name' => 'Grifon Venmar John ', 'role' => $member],
            ['name' => 'Argote Kimberly', 'role' => $member],
            ['name' => 'Pacunla Marmar', 'role' => $member],
            ['name' => 'Royo Jerry Lyn', 'role' => $member],
            ['name' => 'Alburo Nova Rose', 'role' => $member],
        ];

        return view('layout.pages.about', compact('members'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
