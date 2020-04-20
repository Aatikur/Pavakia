<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AdminDashboardController extends Controller
{
    public function index(){
    	$count = DB::table('stream_type')->distinct()->count();
    	$class = DB::table('class')->distinct()->count();
    	$subjects = DB::table('subjects')->distinct('subject_name')->count('subject_name');
    	
    	return view('admin.dashboard',['count'=>$count,'class'=>$class,'subjects'=>$subjects]);
    }
}
