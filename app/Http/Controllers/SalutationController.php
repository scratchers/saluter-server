<?php

namespace App\Http\Controllers;

use App\Salutation;
use Illuminate\Http\Request;

class SalutationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salutation  $salutation
     * @return \Illuminate\Http\Response
     */
    public function show(Salutation $salutation)
    {
        $salutation->ratings;
        return $salutation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salutation  $salutation
     * @return \Illuminate\Http\Response
     */
    public function edit(Salutation $salutation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salutation  $salutation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salutation $salutation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salutation  $salutation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salutation $salutation)
    {
        //
    }
}
