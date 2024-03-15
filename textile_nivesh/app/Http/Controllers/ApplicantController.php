<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Director;
use App\Models\Remark;
use App\Models\RemarkApplicant;
use App\Models\RemarkExpert;
use App\Models\RemarkCa;
use App\Models\User;
use App\Models\LogUpdate;
use Maatwebsite\Excel\Facades\Excel;
use Validator,Redirect,Response;
use RemarkApplicants;
use RemarkExperts;
use LogUpdates;
use Applicants;
use Directors;
use DateTime;
use Textile;
use Remarks;
use Auth;
use Users;
use DB;
use File;

class ApplicantController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
   
    public function index(Request $request) {
        $user_id = $request->user()->id;
        $id = $request->user()->id;
        //print_r($user_id);
        $users = User::where('id', '=', $id)->get();
        $applicants = Applicant::where('user_id','=', $user_id)->get();
         foreach($applicants as $a){
            $rem = RemarkApplicant::where('user_id', $a->user_id)->first();
            $a-> remark_n_applicant=isset($rem->remark_n_applicant)?$rem->remark_n_applicant:'';

            $remCA = RemarkCa::where('user_id', $a->user_id)->first();
            $a-> ca_remark_n_applicant=isset($remCA->ca_remark_n_applicant)?$remCA->ca_remark_n_applicant:'';

            $remark = RemarkCa::where('user_id', $a->user_id)->first();
            $a-> updated_at=isset($remark->updated_at)?$remark->updated_at:'';
        }
        //$remarkapp = RemarkApplicant::where('user_id','=' , $user_id)->get();
        //$remarks = Remark::where('user_id','=' , $user_id)->get();
        return view('applicant.index', compact('applicants'));
        //print_r($applicants);
    }

    public function create (Request $request) {
       
        $user_id = $request->user()->id;
        //$users = User::get();
        return view('applicant.create');
    }

    public function store (Request $request) {
        $uid = $request->user()->id;
        $filename='';
        if ($files = $request->file('file')) {
            $file1 = $request->file;
            //$text =$request->nature_of_textile;
            $filename = time().'.'.$file1->getClientOriginalExtension();
            $request->file->move('assets', $filename);
        }
        if($request->field=='nature_of_textile'){
            $filename = $request->file;
        }
        $applicantData = [
         "user_id"=>\Auth::user()->id,
         $request->field =>$filename,
         //$request->field =>$request->nature_of_textile
        ];
        $remarkData = [
         "user_id"=>\Auth::user()->id,
         $request->remark_field =>  $request->remark
        ];
 
        $Applicant = Applicant::where('user_id',\Auth::user()->id)->first();
        $RemarkApplicant = RemarkApplicant::where('user_id',\Auth::user()->id)->first();
        if(isset($Applicant->id)){
               Applicant::where('user_id',\Auth::user()->id)->update($applicantData);
        }else{
               Applicant::create($applicantData);
        }
        if(isset($RemarkApplicant->id)){
               RemarkApplicant::where('user_id',\Auth::user()->id)->update($remarkData);
        }else{
               RemarkApplicant::create($remarkData);
        }
        //return response()->json(['message'=>'successfully updated']);

        return redirect()->back()->json(['message'=>'successfully updated'])
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }

    public function download (Request $request, Applicant $applicant) {
        
        return response()->download( public_path('assets' .$applicant->n_applicant));

        // $applicant = Applicant::where('user_id', $id)->firstOrFail();
        // $pathToFile = public_path('assets' . $applicant->cover);
        // return response()->download($pathToFile);
        //$filepath = public_path('assets\filename1.pdf');
        //return Response::download($filepath); 
    }

    public function createDir () {
        return view('applicant.addDirector');
    }

    public function storeDir (Request $request, User $user, Applicant $applicant, Director $director) {
        //$applicant = Applicant::where($applicant->user_id, "=", $user->id)->get();
        $app_id = $request->user()->id;

        $save = new Director;
        $save->applicant_id = $app_id;
        $save->director_name = $request->director_name;
        $save->director_email = $request->director_email;
        $save->director_mobile = $request->director_mobile;
        $save->director_din = $request->director_din;
        $save->director_pan = $request->director_pan;

        $file1 = $request->director_din_doc;
        $filename1 = time().'.'.$file1->getClientOriginalExtension();
        $request->director_din_doc->move('assets', $filename1);

        $file2 = $request->director_pan_doc;
        $filename2 = time().'.'.$file2->getClientOriginalExtension();
        $request->director_pan_doc->move('assets', $filename2);

        $save->director_din_doc = $filename1;
        //$save->director_din_doc = $path;
        $save->director_pan_doc = $filename2;
        //$save->director_pan_doc = $path;
        $save->save();

        return redirect()->back()->with('success', 'Director added successfully.');
    }
    
    public function show (Applicant $applicant, RemarkApplicant $remarkapplicant, RemarkCa $remarkca, RemarkExpert $remarkexpert, Director $director, $id) {
        $applicant  = Applicant::find($id);
        $remarks = RemarkApplicant::find($id);
        $remarkexpert = RemarkExpert::find($id);
        $remarkca = RemarkCa::find($id);
        $directors = Director::where('applicant_id',  $applicant->user_id)->get();

        return view('applicant.view', compact('applicant', 'remarks', 'directors', 'remarkexpert', 'remarkca'));  
         
    }

    public function edit (Applicant $applicant, $id) {  
        $applicant = Applicant::find($id);
        //$director = Director::find($id);
        return view('applicant.edit', compact('applicant')); 
    }

    public function update (Request $request, RemarkApplicant $remarkapplicant, Applicant $applicant) {
        $uid = $request->user()->id;
        $filename = '';
        if ($files = $request->file('file')) {
            $file1 = $request->file;
            //$text =$request->nature_of_textile;
            $filename = time().'.'.$file1->getClientOriginalExtension();
            $request->file->move('assets', $filename);
        }
        if($request->field == 'nature_of_textile'){
            $filename=$request->file;
        }
        $applicantData = [
         "user_id"=>\Auth::user()->id,
         $request->field =>$filename,
         //$request->field =>$request->nature_of_textile
        ];
        $remarkData = [
         "user_id"=>\Auth::user()->id,
         $request->remark_field =>  $request->remark
        ];
        $applicant = Applicant::where('user_id',\Auth::user()->id)->first();
        $remarkapplicant = RemarkApplicant::where('user_id',\Auth::user()->id)->first();

        if(isset($applicant->id)){
              
            if(isset($filename) && $filename !=''){
            Applicant::where('user_id',\Auth::user()->id)->update($applicantData);
            $logupdates = LogUpdate::create(['user_id'=>\Auth::user()->id, 'updated_by'=>\Auth::user()->name, 'table_name'=>'Applicant', 'column_name'=>$request->field, 'column_value'=>$filename
           ]); }
        }else{
           Applicant::create($applicantData);
           if(isset($filename) && $filename !=''){
           $logupdates = LogUpdate::create(['user_id'=>\Auth::user()->id, 'updated_by'=>\Auth::user()->name, 'table_name'=>'Applicant', 'column_name'=>$request->field, 'column_value'=>$filename
           ]); }
           
        }if(isset($remarkapplicant->id)){

        if(isset($request->remark) && $request->remark !=''){
            RemarkApplicant::where('user_id',\Auth::user()->id)->update($remarkData);
            $logupdates=LogUpdate::create(['user_id'=>\Auth::user()->id, 'updated_by'=>\Auth::user()->name, 'table_name'=>'RemarkApplicant', 'column_name'=>$request->remark_field, 'column_value'=>$request->remark
            ]); }
         }else{
            RemarkApplicant::create($remarkData);
            if(isset($request->remark) && $request->remark !=''){
            $logupdates = LogUpdate::create(['user_id'=>\Auth::user()->id, 'updated_by'=>\Auth::user()->name, 'table_name'=>'RemarkApplicant', 'column_name'=>$request->remark_field, 'column_value'=>$request->remark
            ]); }
        }
        return view('applicant.edit', compact('applicant', 'remarkapplicant', 'logupdates'));
        //return response()->json(['message'=>'successfully updated']);
    }

    public function destroy($id) {
        $applicant = Applicant::find($id);
        $applicant->delete();
        return redirect('/applicants/list')->with('success', 'Contact deleted!');
    }   
}