<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Director;
use App\Models\Superadmin;
use App\Models\User;
use Validator,Redirect,Response;
use Applicants;
use Directors;
use Users;
use Auth;
use DB;

class SuperAdminController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
   
    public function index() {
        $applicants = Applicant::orderBy('created_at','DESC')->get();
        return view('superadmin.sadmin', compact('applicants'));
    }

    public function sortFE() {
        $applicants = Applicant::orderBy('fe_name','ASC')->get();
        return view ('superadmin.sadmin', compact('applicants'));
    }

    public function sortBC() {
        $applicants = Applicant::orderBy('bc_name','ASC')->get();
        return view ('superadmin.sadmin', compact('applicants'));
    }


    public function changePass() {
        $applicants = User::first();
        return view('superadmin.changePassword', compact('applicants'));
    } 

    public function UpdatePass(Request $request) {
        $data= $request->input();
        $request->validate([
            'password' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
       if (Auth::attempt(['email' => auth()->user()->email, 'password' => $data['password']])) {
           User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        }else{
            return Redirect::back()->withErrors(['Alert-', 'Current password is wrong']);
        }
            //dd('Password change successfully.');
            return redirect('superadmin/list')->with('success', 'Password change successfully!');
    }
    
    public function create() {
        return view('superadmin.create');
    }

    public function store(Request $request) {
        $request->validate([
            'fe_name'=>'required',
            'bc_name'=>'required',
        ]);
        $applicant = Applicant::create($request->all());
        return redirect('superadmin/list')->with('success', 'Data sucessfully saved!');
    }

    public function show(Applicant $applicant, $id) {
        $applicant  = Applicant::find($id);
        return view('superadmin.view', compact('applicant'));
       //print_r( $bcusers); 
    }

    public function edit(Applicant $applicant, $id) {  
        $applicant = Applicant::find($id);
        return view('superadmin.edit', compact('applicant')); 
    }

    public function update(Request $request, $id) {
        // $request->validate([
        //    
        // ]);
        //$bcuser = Applicant::whereIn('id', $bcuser->id)->update($request->all())->except(['_token']);
        // $bcuser = Applicant::find($id)->update($request->all());

        // $applicant = Applicant::find($id);
        // $applicant->email = $request->get('email');
        // $applicant->phone = $request->get('phone');
       
        $applicant->save();

        return redirect('/superadmin/list')->with('success', 'Data updated!');
    }

    public function destroy($id) {
        $applicant = Applicant::find($id);
        $applicant->delete();
        return redirect('/superadmin/list')->with('success', 'Contact deleted!');
    }

    public function search (Request $request) {
        $applicants = DB::table('applicants');
        if( $request->input('search')) {
            $applicants = $applicants->where('n_applicant', 'LIKE', "%" . $request->search . "%")
            ->orWhere('constitution', 'LIKE', "%" . $request->search . "%")
        }
        $applicants = $applicants->get();
        return view('superadmin.sadmin', compact('applicants'));
    }
}

