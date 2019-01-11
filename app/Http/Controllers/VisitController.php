<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use App\Doctor;
use App\Patient;

class VisitController extends Controller
{
    public function index()
    {
        $visits = Visit::all();
        return view('visits.index')->with(['visits' => $visits]);
    }

    public function create()
    {
        $doctors = Doctor::all();
        $patients = Patient::all();
        return view('visits.create')->with(['doctors' => $doctors, 'patients' => $patients]);
    }

    public function store(Request $request)
    {
        $request->validate([]);

        $v = new Visit();
        $v->doctorId = $request->input('doctorId');
        $v->patientId = $request->input('patientId');
        $v->visitDate = $request->input('visitDate');
        $v->visitTime = $request->input('visitTime');
        $v->visitCost = $request->input('visitCost');
        $v->save();

        return redirect()->route('visits.index');
    }

    public function show($id)
    {
        $visit = Visit::findOrFail($id);

        return view('visits.show')->with([
            'visit' => $visit
        ]);
    }

    public function edit($id)
    {
      $visit = Visit::findOrFail($id);
      $doctors = Doctor::all();
      $patients = Patient::all();

      return view('visits.edit')->with([
        'visit' => $visit, 'doctors' => $doctors, 'patients' => $patients
      ]);
    }

    public function update(Request $request, $id)
    {
      $request->validate([]);

       $v = Visit::FindOrFail($id);
       
       $v->doctorId = $request->input('doctorId');
       $v->patientId = $request->input('patientId');
       $v->visitDate = $request->input('visitDate');
       $v->visitTime = $request->input('visitTime');
       $v->visitCost = $request->input('visitCost');
       $v->save();

       return redirect()->route('visits.index');
    }


    public function destroy($id)
    {
        $visit = Visit::findOrFail($id);
        $visit->delete();
        return redirect()->route('visits.index');
    }
}


