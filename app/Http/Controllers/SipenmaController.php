<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSipenmaRequest;
use App\Http\Requests\UpdateSipenmaRequest;
use App\Models\Sipenma;

class SipenmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sipenma');
    }

    public function pemeringkatan()
    {
        return view('pemeringkatan');
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
     * @param  \App\Http\Requests\StoreSipenmaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSipenmaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sipenma  $sipenma
     * @return \Illuminate\Http\Response
     */
    public function show(Sipenma $sipenma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sipenma  $sipenma
     * @return \Illuminate\Http\Response
     */
    public function edit(Sipenma $sipenma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSipenmaRequest  $request
     * @param  \App\Models\Sipenma  $sipenma
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSipenmaRequest $request, Sipenma $sipenma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sipenma  $sipenma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sipenma $sipenma)
    {
        //
    }
}
