<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;


class UsersLoginController extends Controller
{
   public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
    }

    public function showUserLoginForm(){

        return view('web.login', ['url' => 'user']);
    }

    public function userLogin(Request $request){
         
        $user_detail = DB::table('users')
                          ->where('email',$request->username)
                          ->first();
        
        if($user_detail->status==1){
            $msg = "Account deactivated,Ask Admin For Assistance";
            return redirect()->back()->with('msg',$msg);
        }
        else{

        $this->validate($request, [
            'username'   => 'required|email',
            'password' => 'required'
        ]);
        
        
        if (Auth::guard('user')->attempt(['email' => $request->username, 'password' => $request->password])) {
            return redirect()->intended('/');
        }else{
            return back()->withInput($request->only('username'))->with('login_error','Username or password incorrect');
        }
    }
    }

    public function logout(){

        Auth::guard('user')->logout();
        return redirect()->route('web.login');
    }
}
