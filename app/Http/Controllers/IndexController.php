<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    // defulat laravel model paginate
    public function index ()
    {
        $data = [];

        $data['employeesCount'] = Employee::count();
        $data['employees'] = Employee::paginate(7);


        return view('index', $data);
    }



    // yajra datatabes
    public function employeesDataTable ()
    {
        return 'emp datatable';
    }



}
