<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\DetailsUsers;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;

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
    protected $redirectTo = '/profil';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
    
        $token = Str::random(60);
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->token = $token;
        $user->etat = "non verifier";
        $user->save();
        $id= $user->id;
        $detail = new DetailsUsers();
        $detail->id_users = $id;
        $detail->photo_profil = null;
        $detail->tel1 = null;
        $detail->tel2 = null;
        $detail->fax = null;
        $detail->ville = null;
        $detail->adress = null;
        $detail->cp = null;
        $detail->presentation = null;
        $detail->save();
        $arrays[] =  ($user->token);
        Mail::send('gmailview', ["arrays1"=>$arrays], function($message) use ($user) {
            $message->to($user->email, $user->name)
                ->subject('Code vérification hireo');
            $message->from('mohamed.rejab003@gmail.com',' Mohamed Rejab');

        });

        return $user;
        
    }
}
