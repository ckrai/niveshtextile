<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response;
use App\Models\RemarkApplicant;
use App\Models\RemarkExpert;
use App\Models\Superadmin;
use App\Models\Applicant;
use App\Models\LogUpdate;
use App\Models\RemarkCa;
use App\Models\Director;
use App\Models\Remark;
use App\Models\User;
use Carbon\Carbon;
use RemarkExperts;
use Applicants;
use RemarkCas;
use Directors;
use Remarks;
use Users;
use Auth;
use DB;

class UpiconController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index1234() {
        $applicants = Applicant::all(); 
        //$applicants = Applicant::where('approval', '=', 'Not Approved')
                         //->where('payment_status', '!=', 'Cancelled')
        // ->where('job_status', '=', 'Active')->get();
        // print_r($applicants);
         return view('upicon.index', compact('applicants'));
    }

    public function index(Request $request, User $user, Applicant $applicant) {

        $applicants = Applicant::orderBy('created_at','DESC')->get();
        foreach($applicants as $a){
            $rem=RemarkApplicant::where('user_id', $a->user_id)->first();
            $a-> remark_n_applicant=isset($rem->remark_n_applicant)?$rem->remark_n_applicant:'';
            $users=User::where('id', $a->user_id)->first();
            $a-> name=isset($users->name)?$users->name:'';
            $a-> mobile=isset($users->mobile)?$users->mobile:'';
        }
        return view('upicon.index', compact('applicants'));
    }

    public function show (Applicant $applicant, User $user, RemarkApplicant $remarkapplicant, RemarkCa $remarkca, RemarkExpert $remarkexpert, Director $director, $id) {
                
        $applicant  = Applicant::find($id);
        $users = User::where('id', $applicant->user_id)->get();

        $applicant->n_applicant_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','n_applicant')->orderBy('created_at','DESC')->limit(2)->get();
        $applicant->constitution_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','constitution')->get();
        $applicant->textile_industry_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','textile_industry')->get();
        $applicant->nature_of_textile_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','nature_of_textile')->get();
        $applicant->proposed_capital_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','proposed_capital')->get();
        $applicant->p_side_address_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','p_side_address')->get();
        $applicant->gstin_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','gstin')->get();
        $applicant->estab_copy_undertaking_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','estab_copy_undertaking')->get();
        $applicant->date_from_capital_invest_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','date_from_capital_invest')->get();
        $applicant->whether_capital_invest_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','whether_capital_invest')->get();
        $applicant->total_amount_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','total_amount')->get();
        $applicant->details_applied_financial_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','details_applied_financial')->get();
        $applicant->exemption_stamp_duty_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','exemption_stamp_duty')->get();
        $applicant->exemption_state_tax_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','exemption_state_tax')->get();
        $applicant->additional_reimbursement_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','additional_reimbursement')->get();
        $applicant->capital_subsidy_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','capital_subsidy')->get();
        $applicant->intrest_subsidy_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','intrest_subsidy')->get();
        $applicant->additional_intrest_subsidy_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','additional_intrest_subsidy')->get();
        $applicant->margin_money_grant_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','margin_money_grant')->get();
        $applicant->additional_5_per_margin_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','additional_5_per_margin')->get();
        $applicant->infra_intrest_subsidy_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','infra_intrest_subsidy')->get();
        $applicant->additional_per_infra_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','additional_per_infra')->get();
        $applicant->additional_25_per_working_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','additional_25_per_working')->get();
        $applicant->epf_reimbursement_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','epf_reimbursement')->get();
        $applicant->additional_epf_reimbursement_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','additional_epf_reimbursement')->get();
        $applicant->reimbursement_of_freight_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','reimbursement_of_freight')->get();
        $applicant->gap_filling_grant_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','gap_filling_grant')->get();
        $applicant->exemption_from_electricity_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','exemption_from_electricity')->get();
        $applicant->exemption_from_mandi_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','exemption_from_mandi')->get();
        $applicant->acknowledgment_of_uam_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','acknowledgment_of_uam')->get();
        $applicant->audited_accounts_unit_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','audited_accounts_unit')->get();
        $applicant->dpr_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','dpr')->get();
        $applicant->cac_for_existing_gross_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','cac_for_existing_gross')->get();
        $applicant->cac_for_fixed_gross_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','cac_for_fixed_gross')->get();
        $applicant->affidavit_past= LogUpdate::where('user_id',  $applicant->user_id)->where('column_name','affidavit')->get();

        $remarks = RemarkApplicant::find($id);

        $remarks->remark_n_applicant_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_n_applicant')->orderBy('created_at','DESC')->limit(2)->get();
        $remarks->remark_constitution_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_constitution')->get();
        $remarks->remark_textile_industry_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_textile_industry')->get();
        $remarks->remark_nature_of_textile_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_nature_of_textile')->get();
        $remarks->remark_proposed_capital_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_proposed_capital')->get();
        $remarks->remark_p_side_address_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_p_side_address')->get();
        $remarks->remark_gstin_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_gstin')->get();
        $remarks->remark_estab_copy_undertaking_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_estab_copy_undertaking')->get();
        $remarks->remark_date_from_capital_invest_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_date_from_capital_invest')->get();
        $remarks->remark_whether_capital_invest_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_whether_capital_invest')->get();
        $remarks->remark_total_amount_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_total_amount')->get();
        $remarks->remark_details_applied_financial_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_details_applied_financial')->get();
        $remarks->remark_exemption_stamp_duty_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_exemption_stamp_duty')->get();
        $remarks->remark_exemption_state_tax_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_exemption_state_tax')->get();
        $remarks->remark_additional_reimbursement_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_additional_reimbursement')->get();
        $remarks->remark_capital_subsidy_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_capital_subsidy')->get();
        $remarks->remark_intrest_subsidy_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_intrest_subsidy')->get();
        $remarks->remark_additional_intrest_subsidy_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_additional_intrest_subsidy')->get();
        $remarks->remark_margin_money_grant_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_margin_money_grant')->get();
        $remarks->remark_additional_5_per_margin_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_additional_5_per_margin')->get();
        $remarks->remark_infra_intrest_subsidy_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_infra_intrest_subsidy')->get();
        $remarks->remark_additional_per_infra_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_additional_per_infra')->get();
        $remarks->remark_additional_25_per_working_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_additional_25_per_working')->get();
        $remarks->remark_epf_reimbursement_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_epf_reimbursement')->get();
        $remarks->remark_additional_epf_reimbursement_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_additional_epf_reimbursement')->get();
        $remarks->remark_reimbursement_of_freight_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_reimbursement_of_freight')->get();
        $remarks->remark_gap_filling_grant_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_gap_filling_grant')->get();
        $remarks->remark_exemption_from_electricity_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_exemption_from_electricity')->get();
        $remarks->remark_exemption_from_mandi_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_exemption_from_mandi')->get();
        $remarks->remark_acknowledgment_of_uam_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_acknowledgment_of_uam')->get();
        $remarks->remark_audited_accounts_unit_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_audited_accounts_unit')->get();
        $remarks->remark_dpr_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_dpr')->get();
        $remarks->remark_cac_for_existing_gross_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_cac_for_existing_gross')->get();
        $remarks->remark_cac_for_fixed_gross_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_cac_for_fixed_gross')->get();
        $remarks->remark_affidavit_past= LogUpdate::where('user_id',  $remarks->user_id)->where('column_name','remark_affidavit')->get();

       // $applicant  = Applicant::where('user_id',$id);

        $remarkexpert = RemarkExpert::find($id);
        $remarkca = RemarkCa::find($id);
        $directors = Director::where('applicant_id',  $applicant->user_id)->get();

    return view('upicon.view', compact('applicant', 'remarks', 'users', 'directors', 'remarkexpert', 'remarkca'));   
    }

    public function edit(Applicant $applicant, $id) {
        $applicant = Applicant::find($id);
        return view('upicon.edit', compact('applicant')); 
    }

    public function update (Request $request, $id) {

         $applicant = Applicant::find($id);    
         $applicant->approval = $request->get('approval');
         $applicant->save();

        return redirect('/upicon')->with('success', 'Data updated!');
    }

    public function asignApp (Request $request, Applicant $applicant) {
        $applicants = Applicant::orderBy('created_at','DESC')->get();
        return view('upicon.index', compact('applicants'));
    }

    public function updateApp (Request $request, Applicant $applicant) { 
        $alotData=[
         //"user_id"=>\Auth::user()->id,
         //"id" => $applicant->id,
         $request->asign_field => $request->asign
        ];
        //$remarkca = RemarkCa::where('user_id',\Auth::user()->id)->first();
        $remarkca = Applicant::where('id', '=',  $request->id)->first();
        //print_r($remarkca);
        //die();
        if(isset($remarkca->id)){
               Applicant::where('id', '=',  $request->id)->update($alotData);
        }else{
               Applicant::create($alotData);
        }
        return response()->json([
          'message'=>'successfully updated'
        ]);
    }

    public function updateStatus (Request $request, Applicant $applicant) { 
        $alotData=[
         //"user_id"=>\Auth::user()->id,
         //"id" => $applicant->id,
         $request->asign_field => $request->asign
        ];
        //$remarkca = RemarkCa::where('user_id',\Auth::user()->id)->first();
        $remarkca = Applicant::where('id', '=',  $request->id)->first();
        //print_r($remarkca);
        //die();
        if(isset($remarkca->id)){
               Applicant::where('id', '=',  $request->id)->update($alotData);
        }else{
               Applicant::create($alotData);
        }
        return response()->json([
          'message'=>'successfully updated'
        ]);
    }


    public function allBC() {
        $applicants = Applicant::orderBy('created_at','DESC')->get();
        return view('upicon.index', compact('applicants'));
    }

    public function changePass() {
        //$bcuser  = Applicant::find($id);
        $users = User::first();
        return view('upicon.changePassword', compact('users'));
    } 

    public function UpdatePass(Request $request) {
        $data= $request->input();
        $request->validate([
            'password' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
       if (Auth::attempt(['email' => auth()->user()->email, 'password' => $data['password']]))
        {
           User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        }else{
            return Redirect::back()->withErrors(['current_password', 'Current password is wrong']);
        }
        //dd('Password change successfully.');
        return redirect('upicon/list')->with('success', 'Password change successfully!');
    }

    public function create() {
        return view('upicon.create');
    }

    public function store(Request $request) {
        $request->validate([
            'fe_name'=>'required',
            'bc_name'=>'required',
            'email'=>'required|email|unique:bcusers'
        ]);

        $applicant = Applicant::create($request->all());
        return redirect('upicon')->with('success', 'Contact saved!');
    }

    public function search(Request $request) {
        $applicants = DB::table('applicants');
        if( $request->input('search')){
            $bcusers = $bcusers->where('fe_name', 'LIKE', "%" . $request->search . "%")
            ->orWhere('bc_name', 'LIKE', "%" . $request->search . "%")
            ->orWhere('email', 'LIKE', "%" . $request->search . "%")
            ->orWhere('phone', 'LIKE', "%" . $request->search . "%")
            ->orWhere('ko_code', 'LIKE', "%" . $request->search . "%");
        }
        $applicants = $applicants->get();
        return view('upicon.index', compact('applicants'));
    }

}
