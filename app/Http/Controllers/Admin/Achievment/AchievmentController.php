<?php

namespace App\Http\Controllers\Admin\Achievment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Image;
use File;
class AchievmentController extends Controller
{
    public function showAddAchievmentForm(){

    	return view('admin.achievments.add_achievment_form');
    }

    public function addAchievment(Request $request){
        
    	$request->validate([
    		'student_id'=>'required',
    		'studentname'=>'required',
    		'file'=>'required|image|mimes:jpeg,png,jpg',
    		'studentclass'=>'required',
    		'year'=>'required'

   
    	]);
    	
    	   if($request->hasFile('file')) {
    	   
            $image = $request->file('file');
            $file   = time().'.'.$image->getClientOriginalExtension();
         
            $destinationPath = public_path('/admin/achievment/images');
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath.'/'.$file);

        }
          
  	   DB::table('achievment')
    	   ->insert([
    	   	'student_id'=>$request->input('student_id'),
    	    'name'=>$request->input('studentname'),
    	    'image'=>$file,
    	    'achievment'=>$request->input('achievment'),
    	    'class'=>$request->input('studentclass'),
    	    'year'=>$request->input('year'),



    	   ]);
    	
    	

    	return redirect()->back()->with('msg','Achievment Added Successfully');
    }

    public function showAllAchievments(){
        $achievment_record = DB::table('achievment')->get();

        return view('admin.achievments.show_all_achievments',compact('achievment_record'));
    }

    public function deleteAchievment($id){
        $achievment_record = DB::table('achievment')
                                ->where('id',$id)
                                ->first();

        File::delete('admin/achievment/images/'.$achievment_record->image);
        
        DB::table('achievment')
          ->where('id',$id)
          ->delete();
       

        return redirect()->back()->with('msg',"Achievmentent Deleted Successfully");

    }



    
           



}
