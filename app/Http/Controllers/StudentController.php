<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function addData()
    {
        DB::table('students')->insert([
            [
                'name' => 'Tonmoy',
                'email' => 'tonmoy.a009@gmail.com',
                'age' => 25,
                'gender' => 'm',
                'date_of_birth' => '2001-03-31'
            ],
            [
                'name' => 'Atif',
                'email' => 'atif.a009@gmail.com',
                'age' => 28,
                'gender' => 'm',
                'date_of_birth' => '2001-01-01'
            ],
            [
                'name' => 'Rakib',
                'email' => 'rakib.a009@gmail.com',
                'age' => 22,
                'gender' => 'm',
                'date_of_birth' => '2004-01-01'
            ],
        ]);
        return 'student data added';
    }
    public function showData()
    {
        $data = DB::table('students')
            ->where('age', '>', 22)
            ->where('age', '<', 28)
            ->first();

        return $data;
    }

    public function updateData()
    {
        DB::table('students')
            ->where('id', 1)
            ->update([
                'name' => 'Changed Tonmoy',
                'email' => 'iyadfajar@gmail.com',
            ]);
        return 'Data Updated';
    }

    public function deleteData(int $id)
    {
        DB::table('students')
            ->where('id', $id)
            ->delete();
        return 'Data Deleted';
    }
}
