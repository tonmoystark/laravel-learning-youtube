<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class StudentController extends Controller
{
    //
    public function addData()
    {

        $data = new Student();
        $data->name = 'Eloquent';
        $data->email = 'eloquentData@try.com';
        $data->age = 25;
        $data->gender = 'M';
        $data->date_of_birth = '2001-03-31';
        $data->save();


        // DB::table('students')->insert([
        //         'name' => 'Tonmoy',
        //         'email' => 'tonmoy.a009@gmail.com',
        //         'age' => 25,
        //         'gender' => 'm',
        //         'date_of_birth' => '2001-03-31'  
        // ]);
        return 'student data added';
    }

    public function showData()
    {
        // $data = DB::table('students')
        //     ->where('age', '>', 22)
        //     ->where('age', '<', 28)
        //     ->first();

        $data = Student::select('id',  'name')
            ->where('id', 8)
            ->first();

        return $data;
    }

    public function updateData()
    {
        // DB::table('students')
        //     ->where('id', 1)
        //     ->update([
        //         'name' => 'Changed Tonmoy',
        //         'email' => 'iyadfajar@gmail.com',
        //     ]);

        // lets do in eloquent way

        $data = Student::where('id', 8);
        $data->update([
            'name' => 'one more change'
        ]);

        return 'data updated';
    }

    public function deleteData(int $id)
    {
        $data = Student::findOrFail($id);

        $data->delete();
        return 'data deleted';
    }
}
