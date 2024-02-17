<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Models\Employees;
use App\Models\Attend;
use App\Models\Package;
use App\Models\Zone;
use App\Models\Customerlist ;
use App\Models\Salaryattendance;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HumanresourcesController extends Controller
{



    public function dashboard_index()
    {
        return view('admin.dashboard');
    }

   


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
        //$readdata = Employees::whereNotNull('loan')->where('loan', '>', 0)->get();
        return view('humanresource.employeelist',compact('readdata'));
    }

    public function storing_employeelist(Request $request){
        //return $request->all();
        $data1 = $request->validate([
            'name' => 'required',
            'depertment' => 'required',
            'position'=>'required',
            'loan'=>'required',
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
        //$readdata = Employees::whereNotNull('loan')->where('loan', '>', 0)->get();
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
        $newdata->loan= $request ->loan;
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
        //compact purpose

        //$results = Attend::where('emp_name', 'LIKE')->get();

        $employees = Employees::all();
        $today = Carbon::today();
        $dates = [];
        
        for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
            $dates[] = Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
        }
        
        //return view('testdash', compact('employees', 'dates','results'));


        //


        //return view('testdash', compact('employees', 'dates','results'));

        //return view('humanresource.dailyattendance');

        return view('humanresource.dailyattendance', compact('employees', 'dates'));

    }



    public function index()
    {
        ///this come form  searching for compact
    
        //$results = Attend::where('emp_name', 'LIKE')->get();
    
    
        ///
        $employees = Employees::all();
        $today = Carbon::today();
        $dates = [];
        
        for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
            $dates[] = Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
        }
        
        //return view('testdash', compact('employees', 'dates','results'));

        return view('humanresource.dailyattendance', compact('employees', 'dates'));
    }


    public function store(Request $request)
    {
        
        foreach ($request->attd as $date => $attendance) {
            foreach ($attendance as $employeeId => $value) {
                $existingAttendance = Attend::where('emp_name', $employeeId)
                    ->where('attendance_date', $date)
                    ->first();

                if ($existingAttendance) {
                    $existingAttendance->update(['status' => $value]);
                } else {
                    Attend::create([
                        'emp_name' => $employeeId,
                        'attendance_date' => $date,
                        'status' => $value
                    ]);
                }
            }
        }

        return redirect()->route('attendance.index')->with('success', 'Attendance and leave data saved successfully.');
    }




    public function monthlyattendance()
    {
        //compact purpose

        //$results = Attend::where('emp_name', 'LIKE')->get();

        $employees = Employees::all();
        $today = Carbon::today();
        $dates = [];
        
        for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
            $dates[] = Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
        }

      
        //return view('testdash', compact('employees', 'dates','results'));


        //


        //return view('testdash', compact('employees', 'dates','results'));

        //return view('humanresource.dailyattendance');

       
        return view('humanresource.monthlyattendance', compact('employees', 'dates'));

    }


    public function attendancehistory()
    {
        //compact purpose

        $results = Attend::where('emp_name', 'LIKE')->get();

        $employees = Employees::all();
        $today = Carbon::today();
        $dates = [];
        
        for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
            $dates[] = Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');


        }
        
        $query = [];
        //return view('testdash', compact('employees', 'dates','results'));


        //


        return view('humanresource.attendancehistory', compact('employees', 'dates','results','query'));

        //return view('humanresource.dailyattendance');

        
    }



    public function searching(Request $request)
    {
        ///this
        $employees = Employees::all();
        $today = Carbon::today();

        $dates=[];
        for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
            $dates[] = Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
        }

        //this line only use for compact



        $query = $request->input('query');
        $results = Attend::where('emp_name', 'LIKE', '%' . $query . '%')->get(); // Replace column_name with the column you want to search
        
        return view('humanresource.attendancehistory', compact('employees','dates','results','query'));

    }




    public function loanmanagement(){
    
        $reademployeeloan= Employees::whereNotNull('loan')->where('loan', '>', 0)->get();
        return view('humanresource.loanmanagement', compact('reademployeeloan'));
    }


    public function salarymanagement(){
    
        $employees = Employees::all();
        $today = Carbon::today();
        $dates = [];

        for ($i = 1; $i <= 12; ++$i) {
            $dates[] = Carbon::createFromDate($today->year, $i, 1)->format('Y-m');
        }
        
        return view('humanresource.salarymng', compact('employees', 'dates'));
    }


    public function salary_index()
    {
        ///this come form  searching for compact
    
        //$results = Attend::where('emp_name', 'LIKE')->get();
    
    
        ///
        $employees = Employees::all();
        $today = Carbon::today();
        $dates = [];

        for ($i = 1; $i <= 12; ++$i) {
            $dates[] = Carbon::createFromDate($today->year, $i, 1)->format('Y-m');
        }

        
        //return view('testdash', compact('employees', 'dates','results'));

        return view('humanresource.salarymng', compact('employees', 'dates'));
    }


    public function salaryattendance_store(Request $request)
    {
        
        foreach ($request->attd as $date => $attendance) {
            foreach ($attendance as $employeeId => $value) {
                $existingAttendance = Salaryattendance::where('emp_name', $employeeId)
                    ->where('attendance_month', $date)
                    ->first();

                if ($existingAttendance) {
                    $existingAttendance->update(['status' => $value]);
                } else {
                    Salaryattendance::create([
                        'emp_name' => $employeeId,
                        'attendance_month' => $date,
                        'status' => $value
                    ]);
                }
            }
        }

        return redirect()->route('salaryattendance.index')->with('success', 'Attendance and leave data saved successfully.');
    }




    ///Reseller part

    public function resellerprofile_index()


    {

        $id= Auth::id();
        $name= auth()->user()->name;
        return view('reseller.resellerprofile',compact('id','name'));
    }
   



    ///
    public function zone_index()


    {

        
        $read=Zone::all();
       
        //$readdata = Employees::whereNotNull('loan')->where('loan', '>', 0)->get();
        return view('reseller.zone',compact('read'));
    }

    public function storing_zone(Request $request){
        //return $request->all();
        $data1 = $request->validate([
            'zone_id' => 'required',
            'zone_name' => 'required',
            'zone_address'=>'required'
        ]);


         $newt = Zone::create($data1);

        //DB::table('employeesdata')->insert($data1);

        if($newt){
            return redirect()->back();
        }
        
        

        

    }


    public function readingzone()
    {
        $read=Zone::all();
        // $pass=Employees::all();
        //$readdata = Employees::whereNotNull('loan')->where('loan', '>', 0)->get();
        return view('reseller.zone',compact('read'));
    }



    public function editzone($data_id){
        $pass=Zone::find($data_id);
        return view('reseller.editzone',compact('pass'));
        
    }

    public function editstorezone(Request $request){
        $newdata=Zone::find($request->pass_id);
        $newdata->zone_id= $request ->zone_id;
        $newdata->zone_name= $request ->zone_name;
        $newdata->zone_address= $request ->zone_address;
        
        
        $newdata->save();
        return redirect(route('go.zonelist'));



    }


    public function deletezone(Request $request){
        $new=Zone::find($request->passing_id);
        $new->delete();
        return redirect(route('go.zonelist'));

    }


    public function zone_search(Request $request)
    {
        // Fetch all zones
        $read = Zone::all();
        
        // Check if there's a search query
        if ($request->has('search')) {
            $search = $request->get('search');
            // Perform search
            $read = Zone::where('zone_id', 'like', '%' . $search . '%')
                         ->orWhere('zone_name', 'like', '%' . $search . '%')
                         ->orWhere('zone_address', 'like', '%' . $search . '%')
                         ->get();
        }
        
        // Pass zones data to the view
        return view('reseller.zone', compact('read'));
    }











    //

    public function packages_index()


    {

        //return Auth::id();
        //return auth()->user()->name;
        $read=Package::all();
       
        //$readdata = Employees::whereNotNull('loan')->where('loan', '>', 0)->get();
        return view('reseller.package',compact('read'));
    }

    public function storing_packages(Request $request){
        //return $request->all();
        $data1 = $request->validate([
            'name' => 'required',
            'speed' => 'required',
            'buy_price'=>'required',
            'sale_price'=>'required'
        ]);


         $newt = Package::create($data1);

        //DB::table('employeesdata')->insert($data1);

        if($newt){
            return redirect()->back();
        }
        
        

        

    }


    public function readingpackages()
    {
        $read=Package::all();
        // $pass=Employees::all();
        //$readdata = Employees::whereNotNull('loan')->where('loan', '>', 0)->get();
        return view('reseller.package',compact('read'));
    }



    public function editpackages($data_id){
        $pass=Package::find($data_id);
        return view('reseller.editpackage',compact('pass'));
        
    }

    public function editstorepackages(Request $request){
        $newdata=Package::find($request->pass_id);
        $newdata->name= $request ->name;
        $newdata->speed= $request ->speed;
        $newdata->buy_price= $request ->buy_price;
        $newdata->sale_price= $request ->sale_price;
        
        $newdata->save();
        return redirect(route('go.packageslist'));



    }


    public function deletepackages(Request $request){
        $new=Package::find($request->passing_id);
        $new->delete();
        return redirect(route('go.packageslist'));

    }


    public function getSalePrice($package)
    {
        $package = Package::where('name', $package)->first();
        if ($package) {
            return response()->json(['sale_price' => $package->sale_price]);
        } else {
            return response()->json(['error' => 'Package not found'], 404);
        }
    }

    //
    //
    ///
    ///
    ///
    ///
    //
    //
    ///
    ///
    ///
    ///
    public function customer_index()
    {
        $readzone=Zone::all();
        $readpackage=Package::all();
        $read=Customerlist::all();
        return view('reseller.customerlist',compact('read','readpackage','readzone'));
    }


    public function storing_customer(Request $request){
        //return $request->all();
        $data1 = $request->validate([
            'username' => 'required',
            'zone' => 'required',
            'package'=>'required',
            'sale_price' => 'required',
            'mobile' => 'required',
            'zone'=>'required',
            'expire_Date' => 'required',
            'pay_status'=>'required'

        ]);


         $newt = Customerlist::create($data1);

        //DB::table('employeesdata')->insert($data1);

        if($newt){
            return redirect()->back();
        }
        
        

        

    }


    public function readingcustomer()
    {
        $read=Customerlist::all();
        // $pass=Employees::all();
        //$readdata = Employees::whereNotNull('loan')->where('loan', '>', 0)->get();
        return view('reseller.customerlist',compact('read'));
    }



    public function editcustomer($data_id){
        $pass=Customerlist::find($data_id);
        return view('reseller.editcustomerlist',compact('pass'));
        
    }

    public function editstorecustomer(Request $request){
        $newdata=Customerlist::find($request->pass_id);
        $newdata->username= $request ->username;
        $newdata->zone= $request ->zone;
        $newdata->package= $request ->package;
        $newdata->sale_price= $request ->sale_price;
        $newdata->mobile= $request ->mobile;
        $newdata->expire_Date= $request ->expire_Date;
        $newdata->pay_status= $request ->pay_status;
        
        
        $newdata->save();
        return redirect(route('go.customerlist'));



    }


    public function deletecustomer(Request $request){
        $new=Customerlist::find($request->passing_id);
        $new->delete();
        return redirect(route('go.customerlist'));

    }


    public function customer_search(Request $request)
    {
        // compact purpose
        $read = Customerlist::all();
        $readzone=Zone::all();
        $readpackage=Package::all();
        //
        
        // Check if there's a search query
        if ($request->has('search')) {
            $search = $request->get('search');
            // Perform search
            $read = Customerlist::where('username', 'like', '%' . $search . '%')
                         ->orWhere('id', 'like', '%' . $search . '%')
                         ->get();
        }
        
        // Pass zones data to the view
        return view('reseller.customerlist', compact('read','readzone','readpackage'));
    }


    public function customerprofile_index()


    {

        $id= Auth::id();
        $name= auth()->user()->name;
        return view('customerprofile',compact('id','name'));
    }

    public function customerpay_index()


    {

        $id= Auth::id();
        $name= auth()->user()->name;
        $read = Customerlist::where('id', 'like', '%' . $id . '%')
                         ->get();
        // dd($read) ;                
        return view('customerpay',compact('id','read','name'));
    }








    



  


}
