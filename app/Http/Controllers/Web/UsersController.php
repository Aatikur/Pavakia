<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\User;
use DB;
use Auth;
use Hash;

class UsersController extends Controller
{
     public function showUserRegisterForm()
    {
        return view('web.user.register', ['url' => 'users']);
    }
     protected function createUser(Request $request)
    {
        
    	$user_cnt = DB::table('users')
    		->where('contact_no', $request['mobile_no'])
    		->count();

    	if ($user_cnt > 0) 
    		return redirect()->back()->with('msg', 'You have already registered.');

        $user = User::create([
            'name' => ucwords(strtolower($request['name'])),
            'email' => $request['email'],
            'contact_no' => $request['mobile_no'],
            'password' => Hash::make($request['pass']),
        ]);

        return redirect()->intended('login');
    }
}
