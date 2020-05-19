<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
use Input;

class AdminDashboardController extends Controller
{
    public function index(){
    	$count = DB::table('stream_type')->distinct()->count();
    	$class = DB::table('class')->distinct()->count();
    	$subjects = DB::table('subjects')->distinct('subject_name')->count('subject_name');
    	
    	return view('admin.dashboard',['count'=>$count,'class'=>$class,'subjects'=>$subjects]);
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
             if(Hash::check($request->input('old_password'),$entered_password)){
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
