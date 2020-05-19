<?php

namespace App\Http\Controllers\Admin\Account;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\User\User;
use Illuminate\Mail\Mailer;
use App\Mail\CreateAccount;
use Image;
use File;
use Auth;
use Hash;

$msg = "";
class AccountController extends Controller
{
    public function showCreateAccountForm(){
        $class_record = DB::table('class')->get();
        $stream_record = DB::table('stream_type')->get();
      return view('admin.account.show_create_account_form',['class_record'=>$class_record,'stream_record'=>$stream_record]);
    }
    public function createAccount(Request $request){
      $file='';
       $count = DB::table('users')
            ->where('email', strtolower($request->input('email')))
            ->count();
      $counttwo = DB::table('users')
            ->where('mobile', $request->input('mobile'))
            ->count();

        if ($count> 0){
          $msg ="User already registered";

        }
        else{
        if($counttwo>0){
          $msg ="mobile number already registered";
        }
        else{
        if($request['stream_type_id']=="2"){
           $request->validate([

           'full_name'=>'required',
           'email'=>'required|email',
           'mobile'=>'required|numeric',
           'class_id'=>'required',
           'city'=>'required',
           'state'=>'required',
           'address'=>'required',
           'pin'=>'required|numeric',
           'stream_name_id'=>'required',
           'stream_type_id'=>'required',
           'gender'=>'required',
           'dob'=>'required',
           'file'=>'image|mimes:jpeg,png,jpg',
          'password'=>'required|required_with:retype_password|same:retype_password',
           'retype_password'=>'required|min:6',
          ]);
         }

         else{$request->validate([
           'full_name'=>'required',
           'email'=>'required|email',
           'mobile'=>'required|numeric',
           'class_id'=>'required',
           'city'=>'required',
           'state'=>'required',
           'address'=>'required',
           'pin'=>'required|numeric',
           'stream_type_id'=>'required',
           'gender'=>'required',
           'dob'=>'required',
           'file'=>'image|mimes:jpeg,png,jpg',
           'password'=>'required|required_with:retype_password|same:retype_password',
           'retype_password'=>'required|min:6',
            ]);
         }
     

        
        
     $name =  $request->input('full_name');
     $email = $request->input('email');
     $password = $request->input('password');
     $html = '<center><h2>Hello' . $name . 'Your password is generated successfully</h2></center>
            <table border=1 style="border-collapse: collapse;width:90%;border: 1px solid #999;text-align:center; margin: auto;">
            <tbody>
            <tr>
            <th style="padding:10px;background:#f9d776">Name</th>
            <th style="padding:10px;background:#f9d776">LoginId</th>
            <th style="padding:10px;background:#f9d776">Password</th>
            
            </tr>
            <tr>
            <td style="padding:10px;background:#d1fdff">'.$name.'</td>
            <td style="padding:10px;background:#d1fdff"><a href="mailto:'.$email.'">'.$email.'</a></td>
           
            <td style="padding:10px;background:#d1fdff">'.$password.'</td>
            </tr>

            </tbody>
            </table>';

    $data = [
        'message' => $html
    ];

    Mail::to($email)->send(new CreateAccount($data));

  
    if(count(Mail::failures())>0){

      $message = "Mail was not send successfully";
    }
    else{
      if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file = microtime().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/profile');
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath.'/'.$file);
        }
       

        
        
         $user = DB::table('users')->insert([
          'name' => ucwords(strtolower($request['full_name'])),
    
             'email' => strtolower($request['email']),
             'mobile'=>$request['mobile'],
             'class_id'=>$request['class_id'],
             'dob'=>$request['dob'],
             'city'=>$request['city'],
             'state'=>$request['state'],
             'address'=>$request['address'],
             'pin'=>$request['pin'],
             'gender'=>$request['gender'],
             'stream_id'=>$request['stream_name_id'],
             'stream_type'=>$request['stream_type_id'],
             'image'=>$file,
             'password' => Hash::make($request['password'])

             
            
        ]);
          $msg = "User created successfully and credentials have been  sent";
       }
      }
       }

      
      return redirect()->back()->with('msg',$msg);

    
  }

  public function ListAllStudents(){

    $student_list = DB::table('users')
                        ->leftjoin('class','users.class_id','=','class.id')
                        ->leftjoin('stream_type','users.stream_id','=','stream_type.id')
                        ->select('users.*','class.class_name','stream_type.stream')
                        ->orderBy('id','desc')
                        ->get();
    return view('admin.account.List_students',compact('student_list'));
  }
   public function deactivateStudentAccount($id){

      $status = DB::table('users')
                      ->where('id',$id)
                      ->update(['status'=>1]);
      return redirect()->back();
} 

  public function activateStudentAccount($id){

      $status = DB::table('users')
                    ->where('id',$id)
                    ->update(['status'=>2]);
      return redirect()->back();
}

public function deleteStudentAccount($id){
   $user_record = DB::table('users')->where('id',$id)->first();
   if($user_record->image!=null){
    File::delete(public_path('admin/profile/'.$user_record->image));
   }
   DB::table('users')->where('id',$id)->delete();

  return redirect()->back();
}

// public function resetPasswordForm($id){

//   return view('admin.account.change_password_form',['id'=>$id]);
// }

// public function resetPassword(Request $request,$id){

//   $request->validate([
//     'password'=>'required|required_with:retype_password|same:retype_password',
//     'retype_password'=>'required|min:6',

//   ]);

//     $student_details = DB::table('users')->where('id',$id)->first();
//     $name = $student_details->name;
//     $email = $student_details->email;
//     $password = $request->input('password');
//      $html = '<center><h2>Hello' . $name . 'Your password is updated successfully</h2></center>
//              <center><h2>Your updated Credentials are provided  below</h2></center>
//             <table border=1 style="border-collapse: collapse;width:90%;border: 1px solid #999;text-align:center; margin: auto;">
//             <tbody>
//             <tr>
//             <th style="padding:10px;background:#f9d776">Name</th>
//             <th style="padding:10px;background:#f9d776">LoginId</th>
//             <th style="padding:10px;background:#f9d776">Password</th>
            
//             </tr>
//             <tr>
//             <td style="padding:10px;background:#d1fdff">'.$name.'</td>
//             <td style="padding:10px;background:#d1fdff"><a href="mailto:'.$email.'">'.$email.'</a></td>
           
//             <td style="padding:10px;background:#d1fdff">'.$password.'</td>
//             </tr>

//             </tbody>
//             </table>';

//     $data = [
//         'message' => $html
//     ];

//     Mail::to($email)->send(new CreateAccount($data));

  
//     if(count(Mail::failures())>0){

//       $message = "Mail was not send successfully";
//     }
//     else{
//     DB::table('users')
//       ->where('id',$id)
//       ->update(['password'=>Hash::make($request['password'])]);
//       $msg = "Password is updated successfully and updated password has been sent";

//   return redirect()->back()->with('msg',$msg);
// }
// }
public function showAllDetails($id){
   $user_record = DB::table('users')
                        ->leftjoin('class','users.class_id','=','class.id')
                        ->leftjoin('stream_type','users.stream_id','=','stream_type.id')
                        ->select('users.*','class.class_name','stream_type.stream')
                        ->where('users.id',$id)
                        ->first();

  
  return view('admin.account.view_all_details',compact('user_record'));


}
public function editDetailsForm($id){
  $user_record = DB::table('users')
                        ->leftjoin('class','users.class_id','=','class.id')
                        ->leftjoin('stream_type','users.stream_id','=','stream_type.id')
                        ->select('users.*','class.class_name','stream_type.stream')
                        ->where('users.id',$id)
                        ->first();


  
  return view('admin.account.show_edit_details_form',compact('user_record'));


}

public function updateUserDetails(Request $request,$id){
  $msg='';
   $file='';
   
   $record=DB::table('users')->where('id',$id)->first();
   $count = DB::table('users')->where('mobile',$request['mobile'])->count();
   
   
   if($record->mobile==$request['mobile'] or $request['mobile']==null)
   {
   
    if($request['stream_type_id']==2){
       if($request->hasFile('file')){
            File::delete(public_path('admin/profile/'.$record->image));
    }
   
   if($request->hasFile('file')) {
   
            $image = $request->file('file');
            $file = microtime().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/profile');
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath.'/'.$file);

  }
   $user = DB::table('users')->where('id',$id)->update([
             'name' => ucwords(strtolower($request['full_name']))?ucwords(strtolower($request['full_name'])):$record->name,
             
             'class_id'=>$request['class_id']?$request['class_id']:$record->class_id,
             'dob'=>$request['dob']?$request['dob']:$record->dob,
             'city'=>$request['city']?$request['city']:$record->city,
             'state'=>$request['state']?$request['state']:$record->state,
             'address'=>$request['address']?$request['address']:$record->address,
             'pin'=>$request['pin']?$request['pin']:$record->pin,
             'gender'=>$request['gender'],
             'mobile'=>$request['mobile']?$request['mobile']:$record->mobile,
             'stream_id'=>$request['stream_name_id']?$request['stream_name_id']:$record->stream_id,
             'stream_type'=>$request['stream_type_id']?$request['stream_type_id']:$record->stream_type,
             'image'=>$file?$file:$record->image,
           ]);
 }
 else{
  if($request->hasFile('file')){
            File::delete(public_path('admin/profile/'.$record->image));
    }
   
   if($request->hasFile('file')) {
   
            $image = $request->file('file');
            $file = microtime().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/profile');
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath.'/'.$file);

  }
   $user = DB::table('users')->where('id',$id)->update([
             'name' => ucwords(strtolower($request['full_name']))?ucwords(strtolower($request['full_name'])):$record->name,
             
             'class_id'=>$request['class_id']?$request['class_id']:$record->class_id,
             'dob'=>$request['dob']?$request['dob']:$record->dob,
             'city'=>$request['city']?$request['city']:$record->city,
             'state'=>$request['state']?$request['state']:$record->state,
             'address'=>$request['address']?$request['address']:$record->address,
             'pin'=>$request['pin']?$request['pin']:$record->pin,
             'gender'=>$request['gender'],
             'mobile'=>$request['mobile']?$request['mobile']:$record->mobile,
             'stream_id'=>$request['stream_name_id'],
             'stream_type'=>$request['stream_type_id']?$request['stream_type_id']:$record->stream_type,
             'image'=>$file?$file:$record->image,
           ]);

 }
     $msg = "Details updated successfully";
 }
 else{

  if($count>0){
    $msg = 'mobile already registered with other account';
  }
  else{
    
    if($request['stream_type_id']==2){
      if($request->hasFile('file')){
            File::delete(public_path('admin/profile/'.$record->image));
    }
   
   if($request->hasFile('file')) {
   
            $image = $request->file('file');
            $file = microtime().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/profile');
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath.'/'.$file);

  }
   $user = DB::table('users')->where('id',$id)->update([
             'name' => ucwords(strtolower($request['full_name']))?ucwords(strtolower($request['full_name'])):$record->name,
             
             'class_id'=>$request['class_id']?$request['class_id']:$record->class_id,
             'dob'=>$request['dob']?$request['dob']:$record->dob,
             'city'=>$request['city']?$request['city']:$record->city,
             'state'=>$request['state']?$request['state']:$record->state,
             'address'=>$request['address']?$request['address']:$record->address,
             'pin'=>$request['pin']?$request['pin']:$record->pin,
             'gender'=>$request['gender'],
             'mobile'=>$request['mobile']?$request['mobile']:$record->mobile,
             'stream_id'=>$request['stream_name_id']?$request['stream_name_id']:$record->stream_id,
             'stream_type'=>$request['stream_type_id']?$request['stream_type_id']:$record->stream_type,
             'image'=>$file?$file:$record->image,
           ]);
 }
 else{
  if($request->hasFile('file')){
            File::delete(public_path('admin/profile/'.$record->image));
    }
   
   if($request->hasFile('file')) {
   
            $image = $request->file('file');
            $file = microtime().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/profile');
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath.'/'.$file);

  }
   $user = DB::table('users')->where('id',$id)->update([
             'name' => ucwords(strtolower($request['full_name']))?ucwords(strtolower($request['full_name'])):$record->name,
             
             'class_id'=>$request['class_id']?$request['class_id']:$record->class_id,
             'dob'=>$request['dob']?$request['dob']:$record->dob,
             'city'=>$request['city']?$request['city']:$record->city,
             'state'=>$request['state']?$request['state']:$record->state,
             'address'=>$request['address']?$request['address']:$record->address,
             'pin'=>$request['pin']?$request['pin']:$record->pin,
             'gender'=>$request['gender'],
             'mobile'=>$request['mobile']?$request['mobile']:$record->mobile,
             'stream_id'=>$request['stream_name_id'],
             'stream_type'=>$request['stream_type_id']?$request['stream_type_id']:$record->stream_type,
             'image'=>$file?$file:$record->image,
           ]);

 }
     $msg = "Details updated successfully";
     
   }
 
 
  
 }
  return redirect()->back()->with('msg',$msg);
  

  }
    

  
    
  

     
          
       
          
       
         
       

      
      
    
    


  



}