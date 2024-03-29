<?php

namespace App\Http\Controllers;

use App\Employee;
use App\DataTables\EmployeeDataTable;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(EmployeeDataTable $dataTable){
        return $dataTable->render('employee');
    }
}
