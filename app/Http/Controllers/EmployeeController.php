<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EmployeeImport;

class EmployeeController extends Controller
{
    public function addEmployee()
    {
        $employees = [
            ["name"=>"nozomiaa","email"=>"nozomiaa@gmail.com","phone"=>"1234","salary"=>"241","department"=>"Accounting"],
            ["name"=>"Alice","email"=>"alice@gmail.com","phone"=>"232","salary"=>"42141","department"=>"aaaaaa"],
            ["name"=>"andre","email"=>"andre@gmail.com","phone"=>"4214","salary"=>"412312","department"=>"bbbbb"],
            ["name"=>"nozo","email"=>"nozo@gmail.com","phone"=>"4124","salary"=>"41241","department"=>"ccccc"],
            ["name"=>"nozomi","email"=>"nozomi@gmail.com","phone"=>"4214","salary"=>"4124","department"=>"dddddd"],
        ];
        Employee::insert($employees);
        return "Records are inserted";
    }

    public function exportIntoExcel()
    {
        return Excel::download(new EmployeeExport,'employeelist.xlsx');
    }

    public function exportIntoCSV()
    {
        return Excel::download(new EmployeeExport,'employeelist.csv');

    }

    public function importForm()
    {
        return view('import-form');

    }

    public function import(Request $request)
    {
        Excel::import(new EmployeeImport,$request->file);
        return "Record are imported successfully";
    }






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
