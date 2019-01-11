<?php

use Illuminate\Database\Seeder;
use App\Doctor;
use App\Patient;
use App\Visit;

class VisitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $x = Doctor::all()->where('doctorId', 1)->first();
        $y = Patient::all()->where('patientId', 2)->first();

        $visit1 = new Visit();
        $visit1->doctorId = $x->id;
        $visit1->patientId = $y->id;
        $visit1->visitDate = "02-01-19";
        $visit1->visitTime = "16:20:00";
        $visit1->visitCost = "65.00";
        $visit1->save();

        $x = Doctor::all()->where('doctorId', 3)->first();
        $y = Patient::all()->where('patientId', 1)->first();

        $visit2 = new Visit();
        $visit2->doctorId = $x->id;
        $visit2->patientId = $y->id;
        $visit2->visitDate = "03-01-19";
        $visit2->visitTime = "17:25:25";
        $visit2->visitCost = "40.00";
        $visit2->save();

        $x = Doctor::all()->where('doctorId', 2)->first();
        $y = Patient::all()->where('patientId', 3)->first();

        $visit3 = new Visit();
        $visit3->doctorId = $x->id;
        $visit3->patientId = $y->id;
        $visit3->visitDate = "04-01-19";
        $visit3->visitTime = "15:25:00";
        $visit3->visitCost = "55.00";
        $visit3->save();


    }
}
