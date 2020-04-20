<?php

namespace App\Http\Controllers\Admin\Studentclass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use str;

class StudentClassController extends Controller
{
    public function listStreams(){
        $stream_record = DB::table('stream_type')->get();

      return view('admin.streams.list_streams',['stream_record'=>$stream_record]);
    }

    public function showAddStreamForm(){

      return view('admin.streams.add_stream');
    }

    public function addStream(Request $request){
      
        $request->validate([
           'Stream'=>'required|alpha',
         ]);
        $count = DB::table('stream_type')
              ->where('stream',strtolower($request->input('Stream')))
              ->count();

        if($count>0){
           $msg ="Already Added";
         }
        else{
            DB::table('stream_type')
               ->insert([
                    'stream'=>strtolower($request->input('Stream'))
                ]);
               $msg = "Stream added successfully";
    }
    return redirect()->back()->with('msg',$msg);
    }

    public function showEditStreamForm($id){
      $stream_record = DB::table('stream_type')
          ->where('id',$id)
          ->first();
      return view('admin.streams.show_edit_stream_form',['stream_record'=>$stream_record]);
    }

    public function updateStream(Request $request,$id){
        if($request['stream']!=null){
        $count = DB::table('stream_type')
                   ->where('stream',strtolower($request->input('stream')))
                  ->count();
       if($count>0){
           $msg ="Already Added";
         }
         else{
     
      DB::table('stream_type')
          ->where('id',$id)
          ->update([
          'stream'=>ucwords(strtolower($request->input('stream')))
          ]);
          $msg = 'Stream updated successfully';
    }
  }
  else{
       $record = DB::table('stream_type')
          ->where('id',$id)->first();
        DB::table('stream_type')
          ->where('id',$id)
          ->update([
          'stream'=>$record->stream
          ]);
          $msg = 'Stream updated successfully';


  }
    return redirect()->back()->with('msg',$msg);
   }

    public function listClass(){
        $class_record=DB::table('class')
          
                        ->get();
        return view('admin.class.all_class',['class_record' =>$class_record]);
   }

    public function editClassForm(Request $request,$id){
        $class_record = DB::table('class')
                           ->where('id',$id)
                           ->first();

        return view('admin.class.edit_class_form',['class_record'=>$class_record]);
   }
    public function showAddClassForm(){
          
        
           return view('admin.class.show_add_class_form');
          
    }
 public function updateClass(Request $request,$id){
          if($request['class']!=null){
        
          $count = DB::table('class')
                   ->where('class_name',strtolower($request->input('class')))
                   ->count();

          if($count>0){
           $msg ="Class Already Added";
          }
         else{
         
          DB::table('class')
             ->where('id',$id)
            ->update([
                'class_name'=>ucwords(strtolower($request->input('class')))
            ]);
          $msg = 'Class updated successfully';
    }
  }
  else{
 $record = DB::table('class')
                   ->where('id',$id)->first();
          DB::table('class')
             ->where('id',$id)
            ->update([
                'class_name'=>$record->class_name
            ]);
          $msg = 'Class updated successfully';


  }
    return redirect()->back()->with('msg',$msg);
   }



  public function addClass(Request $request){
         
          $request->validate([
          'studentclass' => 'required',
          'stream_type' => 'required',
          ]);
        
          $count = DB::table('class')
                     ->where('class_name',$request->input('studentclass'))
                    
                     ->count();

              if($count>0){
                 $msg ="Already Added";
               }
              else{
               

                  DB::table('class')
                     ->insert([
                          'class_name'=>$request->input('studentclass'),
                      
                           'stream_type'=>$request->input('stream_type')
                          
                      ]);
                   

                     $msg = "Class added successfully";
          }
         
          return redirect()->back()->with('msg',$msg);

}

  public function deactivateStream($id){

      $status = DB::table('stream_type')
                      ->where('id',$id)
                      ->update(['status'=>1]);
      return redirect()->back();
} 

  public function activateStream($id){

      $status = DB::table('stream_type')
                    ->where('id',$id)
                    ->update(['status'=>2]);
      return redirect()->back();
}

  public function deactivateClass($id){

      $status = DB::table('class')
                      ->where('id',$id)
                      ->update(['status'=>1]);
      return redirect()->back();
}

  public function activateClass($id){

      $status = DB::table('class')
                      ->where('id',$id)
                      ->update(['status'=>2]);
      return redirect()->back();
}  

}
//   public function showStreamClassMappingForm(){
//       $stream_record = DB::table('stream_type')->get();
//       $class_record = DB::table('class')->get();
//       return view('admin.class.class_stream_mapping',['stream_record'=>$stream_record,'class_record'=>$class_record]);
// }

//   public function addStreamClassMapping(Request $request){

//   $count = DB::table('stream_class_mapping')
//       ->where([
//         'class_id'=>$request->input('class_id'),
//         'stream_id'=>$request->input('stream_id')
//       ])->count();
//   if($count>0){
//     $message = "Mapping already done";
//   }
//   else{
//   DB::table('stream_class_mapping')
//       ->insert([
//         'class_id'=>$request->input('class_id'),
//         'stream_id'=>$request->input('stream_id')
//       ]);
//       $message = 'Mapping done successfully';
//     }

//       return redirect()->back()->with('msg',$message);
// }




