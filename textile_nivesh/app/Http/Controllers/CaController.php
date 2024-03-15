<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\Bcuser;
use App\Models\Superadmin;
use App\Models\User;
use App\Models\Applicant;
use App\Models\Director;
use App\Models\Remark;
use App\Models\RemarkApplicant;
use App\Models\RemarkExpert;
use App\Models\RemarkCa;
use RemarkCas;
use RemarkExperts;
use Applicants;
use Remarks;
use DB;
use Auth;

class CaController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }
     
    public function index(Request $request, User $user, Applicant $applicant) {
        //$users = User::where('role', '=', '5')->get();

        $applicants = Applicant::orderBy('created_at','DESC')->get();

        if (Auth::user()->name == 'CA_1') {
           $applicants = Applicant::where('ca_log', '=', 'CA_1')->get();
           foreach($applicants as $a) {
            $rem=RemarkApplicant::where('user_id', $a->user_id)->first();
            $a-> remark_n_applicant = isset($rem->remark_n_applicant)?$rem->remark_n_applicant:'';
            $users=User::where('id', $a->user_id)->first();
            $a-> name=isset($users->name)?$users->name:'';
         } 
            return view('ca.index', compact('applicants'));
        }
        if(Auth::user()->name == 'CA_2') {
           $applicants = Applicant::where('ca_log', '=', 'CA_2')->get();
           foreach($applicants as $a){
            $rem=RemarkApplicant::where('user_id', $a->user_id)->first();
            $a-> remark_n_applicant=isset($rem->remark_n_applicant)?$rem->remark_n_applicant:'';
            $users=User::where('id', $a->user_id)->first();
            $a-> name=isset($users->name)?$users->name:'';
         } 
            return view('ca.index', compact('applicants'));
        }
        if (Auth::user()->name == 'CA_3') {
           $applicants = Applicant::where('ca_log', '=', 'CA_3')->get();
           foreach($applicants as $a){
            $rem=RemarkApplicant::where('user_id', $a->user_id)->first();
            $a-> remark_n_applicant = isset($rem->remark_n_applicant)?$rem->remark_n_applicant:'';
            $users=User::where('id', $a->user_id)->first();
            $a-> name=isset($users->name)?$users->name:'';
         } 
            return view('ca.index', compact('applicants'));
        }
    } 

    public function show (Applicant $applicant, User $user, RemarkApplicant $remarkapplicant, RemarkCa $remarkca, RemarkExpert $remarkexpert, Director $director, $id) {

        $applicant  = Applicant::find($id);
        $users = User::where('id', $applicant->user_id)->get();
        $remarks = RemarkApplicant::find($id);
        $remarkexpert = RemarkExpert::find($id);
        $remarkca = RemarkCa::find($id);
        $directors = Director::where('applicant_id',  $applicant->user_id)->get();

        return view('ca.view', compact('applicant', 'remarks', 'users', 'directors', 'remarkexpert', 'remarkca'));  
    }

    public function edit(Applicant $applicant, RemarkApplicant $remarkapplicant, Remark $remark, $id) {
        
        $applicant = Applicant::find($id);
        $remarkapp = RemarkApplicant::find($id);
        $remark = Remark::find($id);
        //print_r($app);
        return view('ca.edit', compact('applicant', 'remark', 'remarkapp')); 
    }

    public function update(Request $request, Applicant $applicant, RemarkCa $remarkca, $id){
        //$uid = $request->user()->id;
        //$app_id = Applicant::where('id', '=', $applicant->id);
        // $remarks = RemarkCa::create($request->all());
        // $remarks->user_id = $uid;
        // $remarks->ca_remark_n_applicant =$request->ca_remark_n_applicant;
        // $remarks->ca_remark_constitution =$request->ca_remark_constitution;
        // $remarks->save();
    //print_r($app_id);

         $remarkDataCA=[
         "user_id"=>\Auth::user()->id,
         "applicant_id" => $request->applicant_id,
         $request->remark_ca_field => $request->remark_ca
        ];

        //$remarkca = RemarkCa::where('user_id',\Auth::user()->id)->first();
        $remarkca = RemarkCa::where('applicant_id', '=', $request->applicant_id)->first();
    //print_r($remarkca);

        if(isset($remarkca->id)){
            RemarkCa::where('applicant_id', '=', $request->applicant_id)->update($remarkDataCA);
        }else{
            RemarkCa::create($remarkDataCA);
        }
        return response()->json([
          'message'=>'successfully updated'
        ]);

        // return redirect()->back();

        //return redirect('/ca/list')->with('success', 'Contact updated!');
    }
}
