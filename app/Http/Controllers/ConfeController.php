<?php

namespace App\Http\Controllers;

use App\Models\Confe;
use Illuminate\Http\Request;

class ConfeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('confe.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    
    
    public function create()
    {
        return view('confe.create');
        

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
     * @param  \App\Models\Confe  $confe
     * @return \Illuminate\Http\Response
     */
    public function show(Confe $confe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Confe  $confe
     * @return \Illuminate\Http\Response
     */
    public function edit(Confe $confe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Confe  $confe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Confe $confe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Confe  $confe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Confe $confe)
    {
        //
    }
}
