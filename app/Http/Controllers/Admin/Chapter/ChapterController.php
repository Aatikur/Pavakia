<?php

namespace App\Http\Controllers\Admin\Chapter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ChapterController extends Controller
{
   public function listChapters(){
   	$chapter_records = DB::table('chapter')
      ->leftjoin('subjects','subjects.id','=','chapter.subject_id')
      ->leftjoin('stream_type','subjects.stream_id','=','stream_type.id')
      ->leftjoin('class','subjects.class_id','=','class.id')
      ->get();
   	return view('admin.chapter.list_chapter',['chapter_records'=>$chapter_records]);
   }

    public function showAddChapterForm(){
    return view('admin.chapter.show_add_chapter_form');
    }

    public function addChapter(Request $request){
           if($request->input('stream_type_id')==2){
            $request->validate([
               'stream_type_id'=>'required',
               'class_id'=>'required',
               'subject_id'=>'required',
                'stream_name_id'=>'required',
               'chapter_no'=>'required|numeric',
               'chapter_name'=>'required',
             ]);
          }
          else{$request->validate([
               'stream_type_id'=>'required',
               'class_id'=>'required',
               'subject_id'=>'required',
                
               'chapter_no'=>'required|numeric',
               'chapter_name'=>'required',
             ]);
        }
        $count = DB::table('chapter')
                       ->where('subject_id',$request->input('subject_id'))
                       ->where('chapter_name',strtolower($request->input('chapter_name')))  
                       ->where('chapter_no',$request->input('chapter_no')) 
                       ->count();
        $countwo = DB::table('chapter')
                       ->where('subject_id',$request->input('subject_id'))
                       ->where('chapter_name',strtolower($request->input('chapter_name')))  
                       
                       ->count();
        $counthree = DB::table('chapter')
                       ->where('subject_id',$request->input('subject_id'))
                       ->where('chapter_no',$request->input('chapter_no')) 
                       ->count();

        if($count>0 or $countwo>0 or $counthree>0 ){
            	 $message = 'chapter already added';
                }
                else{
                  $subject = DB::table('chapter')
                          	   ->insert([
                                  'chapter_name' =>strtolower(($request->input('chapter_name'))),
                          	    	'chapter_no'=>$request->input('chapter_no'),
                                 'subject_id'=>$request->input('subject_id'),
                  
            	   ]);
                $message = "Chapter added succesfully";
            }
            return redirect()->back()->with('msg',$message);


    }

    public function showEditChapterForm(Request $request,$id){
      $chapter_records = DB::table('chapter')
                            ->where('subject_id',$id)
                            ->first();
      
      return view('admin.chapter.show_edit_chapter_form',['chapter_records'=>$chapter_records]);


    }
     public function updateChapter(Request $request,$subject_id,$id){
      
       $count = DB::table('chapter')
                       ->where('subject_id',$subject_id)
                       ->where('chapter_name',strtolower($request->input('chapter_name')))  
                       ->where('chapter_no',$request->input('chapter_no')) 
                       ->count();
       
        if($count>0  ){
               $message = 'chapter already added';
                }
                else{
                      DB::table('chapter')
                        ->where('id',$id)
                        ->update(['chapter_no'=>$request->input('chapter_no'),
                                  'chapter_name'=>$request->input('chapter_name')



                       ]);
                        $message="Chapter Updated Successfully";
                      }
                      return redirect()->back()->with('msg',$message);


     }


    

}
