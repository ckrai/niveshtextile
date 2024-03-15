<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:51'],
            
            'email' => ['required', 'string', 'email', 'max:51', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'integer', 'max:11'],
            'mobile' => ['required', 'string', 'max:13'],
            'address' => ['required', 'string', 'max:151'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create (array $data) {

            //$two_1 = substr('name', 0, 2);
        return User::create([
            'name' => $data['name'],
            'unique_id' => "NIVESH" . str_pad(mt_rand(1,9999),4,'0',STR_PAD_LEFT),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'mobile' => $data['mobile'],
            'address' => $data['address'],

        ]);
        $to = "hello@ufsdigital.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: chandan.rai@ufsdigital.com" . "\r\n" .
"CC: amit.gupta@ufsdigital.com";

mail($to,$subject,$txt,$headers);
    }

    protected function create1234 (array $data) {
        $input = [
            'name' => 'name',
            'unique_id' => $this->generateUniqueCode(),
            'email' =>'email',
            'password' => Hash::make('password'),
            'role' => 'role',
            'mobile' => 'mobile',
            'address' => 'address'
        ];

        $users = User::create($input);
        print_r($users);
        die();
  
        return view ('users');
        //dd($game);
    }
    /**
     * Write unique_id on Method
     *
     * @return response()
     */
    public function generateUniqueCode()
    {
        do {
            $unique_id = random_int(100000, 999999);
        } while (User::where("unique_id", "=", $unique_id)->first());
  
        return $unique_id;
    }
}
