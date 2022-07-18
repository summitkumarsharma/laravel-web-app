<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }


    public function authenticate(Request $request){
        $validator = Validator::make($request->all(),[       
            'email'=>'required|email',
            'password'=>'required'

        ]);

        if($validator->fails()){
             // redirect with errors
            return back()->withInput($request->only('email'))->withErrors($validator);
        }

        else{
            
            // Now Authenticate Admin

            if(Auth::guard('admin')->attempt(['email'=> $request->email,'password'=>$request->password],$request->get('remember'))){

                $user = Auth::guard('admin')->user();
                if($user->role == 'admin'){

                    // redirect user to dashboard

                    return  redirect()->route('admin.dashboard');

                }
                else{
                    Auth::guard('admin')->logout();
                    $request->session()->flush('error','Either Email/Password is incorrect');
                    return redirect()->route('admin.login');
                }

            }
            else{
                $request->session()->flush('error','Either Email/Password is incorrect');
                    return redirect()->route('admin.login');
            }
            
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
