<?php

use Illuminate\Database\Seeder;
use App\Doctor;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctor1 = new Doctor();
        $doctor1->name = "Mikhail Kalashnikov";
        $doctor1->address = "A2323";
        $doctor1->phone = "0879655342";
        $doctor1->email = "MK@gmail.com";
        $doctor1->start_date = "01-01-19";
        $doctor1->save();


        $doctor2 = new Doctor();
        $doctor2->name = "Albert Einstein";
        $doctor2->address = "B4545";
        $doctor2->phone = "0896552342";
        $doctor2->email = "AB@gmail.com";
        $doctor2->start_date = "01-01-18";
        $doctor2->save();

        $doctor3 = new Doctor();
        $doctor3->name = "Marie Curie";
        $doctor3->address = "C6767";
        $doctor3->phone = "0863225342";
        $doctor3->email = "MC@gmail.com";
        $doctor3->start_date = "01-01-17";
        $doctor3->save();
    }
}
