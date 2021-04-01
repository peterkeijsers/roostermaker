<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userAvailabilities = Availability::all()->where('user_id', Auth::user()->id);

        return view('availability', ['userAvailabilities' => $userAvailabilities]);
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
        $validatedAttributes = $request->validate([
            'date_from' => 'required',
            'date_to' => 'required'
        ]);

        $availability = Availability::factory()->make($validatedAttributes);
        $availability->user_id = Auth::user()->id;
        $availability->save();

        return redirect()->route('availability.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Availability  $availability
     * @return \Illuminate\Http\Response
     */
    public function show(Availability $availability)
    {
        return view('availability-edit', ['availability' => $availability]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Availability  $availability
     * @return \Illuminate\Http\Response
     */
    public function edit(Availability $availability)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Availability  $availability
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Availability $availability)
    {
        $validatedAttributes = $request->validate([
            'date_from' => 'required',
            'date_to' => 'required'
        ]);

        $availability->fill($validatedAttributes);
        $availability->save();

        return redirect()->route('availability.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Availability  $availability
     * @return \Illuminate\Http\Response
     */
    public function destroy(Availability $availability)
    {
        $availability->delete();

        return redirect()->route('availability.index');
    }
}
