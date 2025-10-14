<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'Alvin',
                'major' => 'Teknik Informatika',
                'age' => 21,
                'courses' => ['Web Programming', 'Basis Data', 'Algoritma']
            ],
            [
                'name' => 'Tha',
                'major' => 'Sistem Informasi',
                'age' => 22,
                'courses' => ['Pemrograman Web', 'Jaringan Komputer']
            ],
            [
                'name' => 'Azhar',
                'major' => 'Teknik Komputer',
                'age' => 20,
                'courses' => []
            ]
        ];

        return view('students.index', compact('students'));
    }
}
