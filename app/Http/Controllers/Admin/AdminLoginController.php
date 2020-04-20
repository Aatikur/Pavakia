<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Input;

use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showAdminLoginForm(){
        return view('admin.index', ['url' => 'admin']);
    }

     public function adminLogin(Request $request){

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);
        // dd(Hash::make($request->input('password')));
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            
            return redirect()->intended('/admin/dashboard');
        }
        return back()->withInput($request->only('email'))->with('login_error','Username or password incorrect');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function showAdminRegisterForm()
    {
        return view('admin.register', ['url' => 'admin']);
    }
    public function changePasswordForm(){

        return view('admin.change_password');
    }

    public function updatePassword(Request $request){
       
      $request->validate([
        'email'   => 'required|email',
        'old_password' => 'required',
        'new_password'=>'required|required_with:retype_new_password|same:retype_new_password',
        'retype_new_password'=>'required|min:8'
    ]);

      $count = DB::table('admin')->where('email',$request['email'])->first();
      if(!empty($count)){
          $entered_password = $count->password;
             if(Hash::check(Input::get('old_password'),$entered_password)){
                $admin =  DB::table('admin')->where('email',$request['email'])->update([
                  'password' => Hash::make($request['new_password']),
      ]);

      $msg = "Password Updated Successfully";
      }
      else{
      $msg = "Wrong Password";
      }
    }
    else{
      $msg = "Wrong Email Entered";
    }

    return redirect()->back()->with('msg',$msg);
    }
}
