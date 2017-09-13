<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use App\Image;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
 

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'tel' => 'digits_between:7, 10',
            'cel' => 'digits_between:7, 10',
            'type' => 'required|string|max:255',
            'image' => 'file',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
        
        //obtenemos el campo file definido en el formulario
       $file = $data['image'];
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
       
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('public')->put($nombre,  \File::get($file));

       

        $user = User::firstOrCreate([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'tel' => $data['tel'],
            'cel' => $data['cel'],
            'type' => $data['type'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $image = Image::firstOrCreate(['user_id' => $user->id, 'filename' => $file->getFilename().'.'.$file->getClientOriginalExtension(), 'mime' => $file->getClientMimeType(), 'original_filename' => $file->getClientOriginalName()]);

        return $user;
        
        //var_dump($file);
    }
}
