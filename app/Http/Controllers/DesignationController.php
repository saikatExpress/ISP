<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Http\Requests\StoreDesignationRequest;
use App\Http\Requests\UpdateDesignationRequest;
use App\Models\Employees;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readdata=Designation::all();
        return view('admin.designation.index',compact('readdata'));
    }

 

    

    /**
     * Show the form for creating a new resource.
     */
    // public function storing_employeelist(StoreDesignationRequest $request){
    //     //dd($request);
    //     $data1 = $request->validate([
    //         'name' => 'required',
    //         'depertment' => 'required',
    //         'position'=>'required',
    //         'salary'=>'required',
    //         'hire_data'=>'required',
    //         'status'=>'required'

    //     ]);

    //     $newt = Employees::create($data1);

    //     return redirect(route('go.employeelist'));

    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDesignationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Designation $designation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDesignationRequest $request, Designation $designation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation)
    {
        //
    }
}
