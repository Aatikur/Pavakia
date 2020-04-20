<?php

namespace App\Http\Controllers\Admin\Syllabus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class SyllabusController extends Controller
{
    public function showAddSyllabusForm(){
    	$class_record = DB::table('class')->get();

    	$syllabus_records = DB::table('syllabus')
    	                        ->leftjoin('class','syllabus.class_id','=','class.id')
    	                        ->leftjoin('subjects','syllabus.subject_id','=','subjects.id')
    	                        ->select('syllabus.*','class.class_name','subjects.subject_name')
    	                        ->get();

    	return view('admin.syllabus.add_syllabus_form',compact('class_record','syllabus_records'));
    }

    public function addSyllabus(Request $request){
        $msg = "";
    	$request->validate([
           'class_id'=>'required',
           'subject_id'=>'required',
           'syllabus'=>'required|mimes:doc,docx,pdf',
    	]);
    	$count = DB::table('syllabus')
                   ->where('class_id',$request->input('class_id'))
                   ->where('subject_id',$request->input('subject_id'))

                   ->count();
         if($count>0){
         	$msg = "Syllabus already uploaded  against the subject!Use edit option to update it!";

         }else{
         	if($request->hasFile('syllabus')) {
            $file_upload = $request->file('syllabus');
            $file   = time().'.'.$file_upload->getClientOriginalExtension();
            $path = $request->file('syllabus')->move('admin/syllabus/docs/',$file);
            DB::table('syllabus')
    	    ->insert([
             'class_id'=>$request->input('class_id'),
             'subject_id'=>$request->input('subject_id'),
             'syllabus'=>basename($path),

    	]);
            $msg="Syllabus uploaded successfully";
    	}
    }
    return redirect()->back()->with('msg',$msg );
}
    public function showEditSyllabusForm($id){
    	$subject_records = DB::table('syllabus')
    	                        ->leftjoin('class','syllabus.class_id','=','class.id')
    	                        ->leftjoin('subjects','syllabus.subject_id','=','subjects.id')
    	                        ->select('syllabus.*','class.class_name','subjects.subject_name')
    	                        ->get();
        $syllabus_record = DB::table('syllabus')
                               ->where('id',$id)
                               ->first();
    	return view('admin.syllabus.edit_syllabus_form',compact('syllabus_record','subject_records'));
    }

    public function updateSyllabus($id,Request $request){
    if($request->hasFile('syllabus')) {
            $file_upload = $request->file('syllabus');
            $file   = time().'.'.$file_upload->getClientOriginalExtension();
            $path = $request->file('syllabus')->move('admin/syllabus/docs/',$file);

            DB::table('syllabus')
            ->where('id',$id)
    	    ->update([
             
             'syllabus'=>basename($path),
    	]);
    	    $record = DB::table('syllabus')
            ->where('id',$id)
    	    ->first();
    	    File::delete('public/syllabus/docs'.$record->syllabus);
    	}

    	return redirect()->back()->with('msg','Syllabus updated successfully');


    }

}

   
