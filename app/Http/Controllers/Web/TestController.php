<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;
use Response;

class TestController extends Controller
{
    public function showAllSubjects($id, $stream_id,$stream_type_id){       
        $check = DB::table('stream_type')->where('id',$stream_id)->first();
        $checktwo =  DB::table('class')->where('id',$id)->first();
        if($checktwo->status== 1 or $check->status==1){
            return redirect()->route('web.index');
        }else{
            $subject_record = DB::table('subjects')
                ->where('class_id',$id)
                ->where('stream_id', $stream_id)
                ->get(); 
        }  

        return view('web.subject.subject',['subject_record'=>$subject_record,'id'=>$id]);
    }

    public function showAllSubjectsForNonStream($id){
        
        $checktwo =  DB::table('class')->where('id',$id)->first();
       
        if($checktwo->status==1){
            return redirect()->route('web.index');
        }
        else{$subject_record = DB::table('subjects')
                                  ->where('class_id',$id)
                                ->get();
          }return view('web.subject.subject',['subject_record'=>$subject_record,'id'=>$id]);
        }



      
    

	public function showMaterialCategory($subject_id,$id){
        $checked = DB::table('class')->where('id',$id)->first();

        if($checked->status == 2){
        
        $material_record = DB::table('document_category')->get();
    }
    else{
        return redirect()->route('web.index');
    }

    	return view('web.material.material',['material_record'=>$material_record, 'subject_id' => $subject_id,'id'=>$id]);
    }


    public function showAllMaterials($document_id, $subject_id,$id){
         $check = DB::table('class')->where('id',$id)->first();

        if($check->status == 2){
        $chapters = DB::table('chapter')
            ->where('subject_id', $subject_id)
            ->get();
        foreach ($chapters as $key => $item) {
            $item->topic = DB::table('topic')
                ->where('chapter_id', $item->id)
                ->where('document_type_id', $document_id)
                ->get();
        }
        $document_record = DB::table('document_category')->where('id',$document_id)->get();
        }
        else{
            return redirect()->route('web.index');
        }                       
    	return view('web.chapter.chapter',compact('document_record','chapters'));
    }

    public function showSyllabus($id){

        $syllabus_record = DB::table('syllabus')
           ->where('class_id',$id)
           ->get();

        $syllabus_records = DB::table('syllabus')
            ->leftJoin('subjects','syllabus.subject_id','=','subjects.id')
            
            ->select('syllabus.*','subjects.subject_name','subjects.banner')
            ->get();
        return view('web.syllabus.syllabus',compact('syllabus_record','syllabus_records'));


    }

    public function fileDownload ($topic_id) 
    {

        try {
            $topic_id = decrypt($topic_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $file = DB::table('topic')
            ->where('id', $topic_id)
            ->first();

        $path = public_path('admin/docs/'.$file->file);

        return response()->file($path);
    }
}
