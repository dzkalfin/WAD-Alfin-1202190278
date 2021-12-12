<?php

namespace App\Http\Controllers;

use App\Models\vaccine;
use App\Http\Requests\StorevaccineRequest;
use App\Http\Requests\UpdatevaccineRequest;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $vaccine = vaccine::orderBy('id')->get();

        $vaccines = vaccine::all();
        $title = "vaccine";

        return view("vaccine.Alfin_vaccine", compact('vaccines', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaccine.Alfin_insert vaccine', [
            "title" => "insert_vaccine",
            "action" => "create"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorevaccineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        vaccine::create([
            'name' => $request->nama,
            'price' => $request->harga,
            'description' => $request->deskripsi,
            'image' => $request->file('img')->getClientOriginalName()
        ]);

        return redirect(route('vaccine.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function show(vaccine $vaccine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vaccine = vaccine::find($id);
        $title = "vaccine";
        $action = "edit";

        return view('vaccine.Alfin_insert vaccine', compact('vaccine', 'title', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevaccineRequest  $request
     * @param  \App\Models\vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $vaccine = vaccine::find($id);
        $vaccine->name = $request->nama;
        $vaccine->price = $request->harga;
        $vaccine->description = $request->deskripsi;
        $vaccine->image = $request->file('img')->getClientOriginalName();
        $vaccine->save();

        return redirect(route('vaccine.index'));  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vaccine = vaccine::find($id)->delete();

        return redirect(route('vaccine.index'));
    }
}
