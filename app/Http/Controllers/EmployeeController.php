<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index() {
        return inertia("Employees", [
            "employees" => Employee::all(),
        ]);
    }
}
