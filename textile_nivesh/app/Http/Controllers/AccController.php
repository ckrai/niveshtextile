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
use App\Models\RemarkCa;
use App\Models\User;
use App\Models\LogUpdate;
use Maatwebsite\Excel\Facades\Excel;
use Validator,Redirect,Response;
use Textile;
use Applicants;
use Directors;
use Remarks;
use LogUpdates;
use RemarkExperts;
use RemarkApplicants;
use Users;
use DB;
use DateTime;
use File;


class AccController extends Controller {

    public function getComm ( Request $request) {
        return view ('share');
    }     

    public function indexShare (User $user, $id) {
        $users = User::find($id);
        return view('share' ,  compact( 'users'));
    }

    public function searchBOB (Request $request, User $user, Applicant $applicant) {
        $users = DB::table('users');
        if( $request->input('search')) {
            $users = $users->where('unique_id', 'LIKE', "%" . $request->search . "%")
            ->orWhere('mobile', 'LIKE', "%" . $request->search . "%")
            ->orWhere('name', 'LIKE', "%" . $request->search . "%");
        }
        $users = User::get();
        $applicants = Applicant::where('user_id','=' , $user->id)->get();
        return view('appDetails', compact('users', 'applicants'));
    }

     public function detailApp (Request $request, User $user, Applicant $applicant) {
        //$users1 = User::select('id', 'unique_id')->groupBy('id')->get();
        $search = $request->get('search');  
        if($search != '') {
        //$applicants = Applicant::where('user_id','=' , $user->id)->get();
        // $users = DB::table('users')
        //  ->where('unique_id', 'like', '%'.$search.'%')
        //  ->orWhere('mobile', 'like', '%'.$search.'%')        
        //  ->orderBy('unique_id', 'desc')
        //  ->get();

        $users = User::join('applicants','applicants.user_id','users.id')
            ->orWhere('name','LIKE','%'.$search.'%')
            ->orWhere('unique_id','LIKE','%'.$search.'%')
            ->orWhere('mobile','LIKE','%'.$search.'%') 
            ->orWhere('email','LIKE','%'.$search.'%')
            ->get();
    }
      
         // print_r($app);
         // die();
        //$applicants = Applicant::where('user_id','=' , $user->id)->get();
        //$users = $users->get();
        return view('appDetails', compact('users'));
    }

    public function detailApp12123 (Request $request, User $user, Applicant $applicant) {
        $users = User::get();
        $search = $request->get('search');  
        if($search != '') {
        $users = DB::table('users')
         ->where('unique_id', 'like', '%'.$search.'%')
         ->orWhere('mobile', 'like', '%'.$search.'%')        
         ->orderBy('unique_id', 'desc')
         ->get();
        }
        $app = Applicant::where('user_id','=' , $user->id)->get();
        //$users = $users->get();
        return view('appDetails', compact('users', 'app'));
    }
      
}
