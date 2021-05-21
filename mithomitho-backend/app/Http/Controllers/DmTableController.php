<?php

namespace App\Http\Controllers;

use App\Models\dm_table;
use Illuminate\Http\Request;

class DmTableController extends Controller
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
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dm_table = new dm_table();
        $dm_table->restro_id = 2;
        $dm_table->name= "Tablesaa";
        $dm_table->no= "5";
        $dm_table->status= 1;
        $dm_table->save();
        return ["data"=>$dm_table,"success"=>true];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dm_table  $dm_table
     * @return \Illuminate\Http\Response
     */
    public function show(dm_table $dm_table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dm_table  $dm_table
     * @return \Illuminate\Http\Response
     */
    public function edit(dm_table $dm_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dm_table  $dm_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dm_table $dm_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dm_table  $dm_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(dm_table $dm_table)
    {
        //
    }
}
