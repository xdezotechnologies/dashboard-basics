<?php

namespace App\Http\Controllers;

use App\Models\admin_user;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
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
     * @param  \App\Models\admin_user  $admin_user
     * @return \Illuminate\Http\Response
     */
    public function show(admin_user $admin_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin_user  $admin_user
     * @return \Illuminate\Http\Response
     */
    public function edit(admin_user $admin_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin_user  $admin_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin_user $admin_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin_user  $admin_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin_user $admin_user)
    {
        //
    }
}
