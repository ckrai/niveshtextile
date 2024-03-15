<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Http\Controllers\Controller;
use App\Models\Bcuser;
use App\Models\Performance;
use App\Models\Superadmin;
use App\Models\User;

use Performances;
use Bcusers;
use Auth;
use DB;

class OpenController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        //$bcusers = Bcuser::all();
        $bcusers = Bcuser::orderBy('created_at','DESC')->get();
        return view('openuser.open', compact('bcusers'));
    }

    public function sortFE() {
        $bcusers = Bcuser::orderBy('fe_name','ASC')->get();
        return view ('openuser.open', compact('bcusers'));
    }

    public function sortBC() {
        $bcusers = Bcuser::orderBy('bc_name','ASC')->get();
        return view ('openuser.open', compact('bcusers'));
    }


    public function show(Bcuser $bcuser, $id) {
        //
        $bcuser = Bcuser::find($id);
        return view('openuser.view', compact('bcuser'));
    }


    public function search(Request $request) {
        $bcusers = DB::table('bcusers');
        if( $request->input('search')){
            $bcusers = $bcusers->where('fe_name', 'LIKE', "%" . $request->search . "%")
            ->orWhere('bc_name', 'LIKE', "%" . $request->search . "%")
            ->orWhere('email', 'LIKE', "%" . $request->search . "%")
            ->orWhere('phone', 'LIKE', "%" . $request->search . "%")
            ->orWhere('ko_code', 'LIKE', "%" . $request->search . "%");
        }
        $bcusers = $bcusers->get();
        return view('openuser.open', compact('bcusers'));
    }

}
