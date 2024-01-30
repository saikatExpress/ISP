<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HumanresourcesController extends Controller
{

   


    public function readingdesignation()
    {
        $readdata=Designation::all();
        return view('humanresource.adddesignation',compact('readdata'));
    }


    public function storing_Designation(Request $request){
        //dd($request);
        $data = $request->validate([
            'name' => 'required',
            'depertment' => 'required',
            'status'=>'required'

        ]);

        $newProduct = Designation::create($data);

        return redirect(route('designation.list'));

    }

    public function editingdesignation($data_id){
        $pass=Designation::find($data_id);
        return view('humanresource.editDesignation',compact('pass'));
        
    }


    public function editstoredesignation(Request $request){
        $newdata=Designation::find($request->pass_id);
        $newdata->name= $request ->name;
        $newdata->depertment= $request ->depertment;
        $newdata->status= $request ->status;
        $newdata->save();
        return redirect(route('designation.list'));



    }

    public function deletedesignation(Request $request){
        $new=Designation::find($request->passing_id);
        $new->delete();
        return redirect(route('designation.list'));

    }



    public function employeelist_index()
    {
        $readdata=Employees::all();
        return view('humanresource.employeelist',compact('readdata'));
    }

    public function storing_employeelist(Request $request){
        //return $request->all();
        $data1 = $request->validate([
            'name' => 'required',
            'depertment' => 'required',
            'position'=>'required',
            'salary'=>'required',
            'hire_data'=>'required',
            'status'=>'required'

        ]);


         $newt = Employees::create($data1);

        //DB::table('employeesdata')->insert($data1);

        if($newt){
            return redirect()->back();
        }
        
        

        

    }


    public function readingemployeelist()
    {
        $readdata=Employees::all();
        // $pass=Employees::all();
        return view('humanresource.employeelist',compact('readdata'));
    }

    public function viewingemployeelist($data_id){
        
        $pass=Employees::find($data_id);
        return view('humanresource.viewemployeelist',compact('pass'));
        
    }

    public function editemployeelist($data_id){
        $pass=Employees::find($data_id);
        return view('humanresource.editemployeelist',compact('pass'));
        
    }

    public function editstoreemployeelist(Request $request){
        $newdata=Employees::find($request->pass_id);
        $newdata->name= $request ->name;
        $newdata->depertment= $request ->depertment;
        $newdata->position= $request ->position;
        $newdata->salary= $request ->salary;
        $newdata->hire_data= $request ->hire_data;
        $newdata->status= $request ->status;
        $newdata->save();
        return redirect(route('go.employeelist'));



    }


    public function deleteemployeelist(Request $request){
        $new=Employees::find($request->passing_id);
        $new->delete();
        return redirect(route('go.employeelist'));

    }


    public function dailyattendance()
    {
        return view('humanresource.dailyattendance');
    }

  


}
