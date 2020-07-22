<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

use DataTables;

class IndexController extends Controller
{

    // laravel defulat Built in Laravel model (Employees) paginate
    public function index ()
    {
        $data = [];

        $data['employeesCount'] = Employee::count();
        $data['employees'] = Employee::paginate(7);

        return view('employees-paginate', $data);
    }



    // yajra datatabes
    public function employeesDataTable ()
    {
     
        if ( request()->ajax() ) 
        {
            $employees = Employee::get();

            return DataTables::of( $employees )
                ->addColumn('action', function ( $emp ) {
                    $buttons = "<button class='btn btn-sm btn-success edit-employe-btn mr-2' data='$emp->id' id='$emp->id'> Edit </button>";
                    $buttons .= "<button class='btn btn-sm btn-danger delete-employe-btn' data='$emp->id' id='$emp->id'> Delete </button>";
                    return $buttons;
                })
                ->rawColumns(['action'])
                ->make(true);
            
        }

        return view('employees-data-tables');
    }



}
