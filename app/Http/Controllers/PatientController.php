<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Patient;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index')->with(['patients' => $patients]);
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30',
        ]);

        $p = new Patient();
        $p->name = $request->input('name');
        $p->address = $request->input('address');
        $p->phone = $request->input('phone');
        $p->email = $request->input('email');
        $p->insurance = $request->input('insurance');
        $p->companyName = $request->input('companyName');
        $p->policyNumber = $request->input('policyNumber');
        $p->save();

        return redirect()->route('patients.index');
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);

        return view('patients.show')->with([
            'patient' => $patient
        ]);
    }

    public function edit($id)
    {
      $patient = Patient::findOrFail($id);

      return view('patients.edit')->with([
        'patient' => $patient
      ]);
    }

    public function update(Request $request, $id)
    {
      $request->validate([
           'name' => 'required|max:100',
       ]);

       $p = Patient::findOrFail($id);
       $p->name = $request->input('name');
       $p->address = $request->input('address');
       $p->phone = $request->input('phone');
       $p->email = $request->input('email');
       $p->insurance = $request->input('insurance');
       $p->companyName = $request->input('companyName');
       $p->policyNumber = $request->input('policyNumber');
       $p->save();

       return redirect()->route('patients.index');
    }


    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return redirect()->route('patients.index');
    }
}