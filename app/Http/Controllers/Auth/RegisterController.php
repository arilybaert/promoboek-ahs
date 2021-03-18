<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo;
    public function redirectTo()
    {
        switch(Auth::user()->role){
            case 2:
            $this->redirectTo = '/student';
            return $this->redirectTo;
                break;
            case 1:
                $this->redirectTo = '/admin';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }

        // return $next($request);
    }
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $details = [
            'title' => 'Administrator',
            'body' => 'There is a new account submission by ' . $data['first_name'] . ' ' . $data['last_name']
        ];
        Mail::to('studiogdm2020@gmail.com')->send(new \App\Mail\NotificationMail($details));

        if(strlen($data['sub_course']) == 1) {
            return User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'course_id' => $data['course'],
                'sub_course_id' => $data['sub_course'],
                'bio' => ' ',
                'catchphrase' => ' ',
                'profile' => ' ',
                'request' => true,
                'role' => 2,
                'password' => Hash::make($data['password']),
            ]);
        } else {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'course_id' => $data['course'],
            'bio' => ' ',
            'catchphrase' => ' ',
            'profile' => ' ',
            'request' => true,
            'role' => 2,
            'password' => Hash::make($data['password']),
        ]);
        }
    }


}
