<?php

namespace App\Http\Controllers;

use App\measurement;
use App\patient;
use Illuminate\Http\Request;

class PatientController extends Controller
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
    public function create(Request $request)
    {
        $patient = new  patient;
        $patient->firstName = $request->get('firstName');
        $patient->secondName = $request->get('secondName');
        $patient->gender = $request->get('gender');
        $patient->mobile = $request->get('mobile');
        $patient->guardianTelephone = $request->get('gNumber');
        $patient->address = $request->get('address');
        $patient->age = $request->get('age');
        $patient->disease = $request->get('disease');
        $patient->save();
        \Session::flash('flash_message', 'Added new Patient.'); //<--FLASH MESSAGE

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('registerPatient');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function addMeasurement(Request $request)
    {
        $measurement=new measurement;
        $measurement->patient_id=$request->patient_id;
        $measurement->bpm=$request->bpm;
        $measurement->temp=$request->temp;
        $measurement->save();
        return "DONE";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
