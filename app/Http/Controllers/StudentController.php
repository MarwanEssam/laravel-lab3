<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function listStudents()
    {
        return 'Students list';
    }
    public function showStudent($id)
    {
        return 'Student number ' . $id;
    }
    public function studentDetails($id, $name = ' ')
    {
        return 'Student number ' . $id . " named " . $name;
    }
    public function createStudent()
    {
        return 'Student user created';
    }
    public function editStudent($id)
    {
        return 'This is edit form of student ' . $id;
    }
    public function addStudent()
    {
        return 'Student added';
    }
    public function removeStudent($id)
    {
        return 'Student number ' . $id . ' is deleted';
    }
    public function updateStudent($id)
    {
        return 'Student number ' . $id . ' is updated';
    }
}
