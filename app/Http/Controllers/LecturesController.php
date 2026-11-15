<?php

namespace App\Http\Controllers;

use App\Models\lectures;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        

        $lectures = lectures::all();

        return view('pages.coustmer',compact("lectures"));


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
    public function show(lectures $lectures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lectures $lectures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lectures $lectures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lectures $lectures)
    {
        //
    }
}
