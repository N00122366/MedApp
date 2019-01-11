<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient1 = new Patient();
        $patient1->name = "Patient Zero";
        $patient1->address = "A0000";
        $patient1->phone = "0878000000";
        $patient1->email = "PZ@gmail.com";
        $patient1->insurance = "1";
        $patient1->companyName = "Umbrella Corp. Insurance";
        $patient1->policyNumber = "00001";
        $patient1->save();


        $patient2 = new Patient();
        $patient2->name = "Prince Ganesh";
        $patient2->address = "G4209";
        $patient2->phone = "0892224203";
        $patient2->email = "PG@gmail.com";
        $patient2->insurance = "1";
        $patient2->companyName = "Brothers Insurance";
        $patient2->policyNumber = "99999";
        $patient2->save();

        $patient3 = new Patient();
        $patient3->name = "Donald Trump";
        $patient3->address = "D4455";
        $patient3->phone = "0897474745";
        $patient3->email = "DT@gmail.com";
        $patient3->insurance = "1";
        $patient3->companyName = "American Life Insurance";
        $patient3->policyNumber = "06660";
        $patient3->save();
    }
}
