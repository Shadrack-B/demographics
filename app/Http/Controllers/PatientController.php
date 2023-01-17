<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index() {
        $data = Patient::get();
        return view("patient-list", compact('data') );
        // return $data;
    }

    public function add_patient() {
        return view("add-patient");
    }

    public function save_patient(Request $request) {
        $patient = new Patient();
        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->age = $request->age;
        $patient->sex = $request->sex;
        $patient->race = $request->race;
        $patient->ethnicity = $request->ethnicity;
        $patient->save();

        return redirect()->back();
    }

    public function edit_patient($id){
         $data = Patient::where("id", "=", $id )->first();
        return view("edit-patient", compact('data') );
    }

    public function update_patient(Request $request){
        Patient::where("id", "=", $request->id )->update([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "age" => $request->age,
            "sex" => $request->sex,
            "race" => $request->race,
            "ethnicity" => $request->ethnicity
        ]);
        return redirect()->back();

    }

    public function delete_patient($id){
        Patient::where("id", "=", $id )->delete();
        return redirect()->back();

    }
}