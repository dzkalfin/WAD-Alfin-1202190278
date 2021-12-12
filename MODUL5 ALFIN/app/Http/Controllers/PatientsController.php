<?php

namespace App\Http\Controllers;

use App\Models\patients;
use App\Http\Requests\StorepatientsRequest;
use App\Http\Requests\UpdatepatientsRequest;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = patients::all();
        $title = "patitent";

        return view("patient.Alfin_patient", compact('patients', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.Alfin_registrasi', [
            "title" => "registrasi",
            "action" => "create"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepatientsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        patients::create([
            'name' => $request->nama,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'no_hp' => $request->nohp,
            'image_ktp' => $request->file('ktp')->getClientOriginalName()
        ]);

        return redirect('Alfin_patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(patients $patients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit(patients $patients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepatientsRequest  $request
     * @param  \App\Models\patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepatientsRequest $request, patients $patients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        patients::find($id)->delete();
        return view('vaccine.Alfin_vaccine');
    }
}
