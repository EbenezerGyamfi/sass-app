<?php

namespace App\Http\Controllers;

use App\Models\Talk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TalkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('talks.index', ['talks' => Auth::user()->talks()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('talks.template');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'abstract' => '',
            'length' => 'required',
            'organizer_notes' => 'required',
        ]);

        Auth::user()->talks()->create($validated);

        return redirect()->route('talks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Talk $talk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Talk $talk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Talk $talk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Talk $talk)
    {
        //
    }
}
