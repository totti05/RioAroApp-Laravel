<?php

namespace App\Http\Controllers;

use App\person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('person.index', ['people' => person::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new person();
        $person->name = $request->get('name');
        $person->lastname = $request->get('lastname');
        $person->dni = $request->get('dni');
        $person->urbanization = $request->get('urbanization');
        $person->street = $request->get('street');
        $person->house_number = $request->get('house_number');
        $person->birthdate = $request->get('birthdate');
        $person->save();
        return view('auth.register', ['person' => $person]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(person $person)
    {
        return view('person.details', ['person' => $person]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(person $person)
    {
        return view('person.edit', ['person' => $person]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, person $person)
    {
        $person->name = $request->get('name');
        $person->lastname = $request->get('lastname');
        $person->urbanization = $request->get('urbanization');
        $person->street = $request->get('street');
        $person->house_number = $request->get('house_number');
        $person->birthdate = $request->get('birthdate');
        $person->save();
        return redirect('/person');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(person $person)
    {   
        $person->delete();
        return redirect('/person');
    }
}
