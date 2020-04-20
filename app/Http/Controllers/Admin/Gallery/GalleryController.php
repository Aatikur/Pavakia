<?php

namespace App\Http\Controllers\Admin\Gallery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use File;
use DB;
class GalleryController extends Controller
{
     public function showAddGalleryForm(){
      return view('admin.gallery.show_add_gallery_form');
     }
     public function addImage(Request $request){
    	  $request->validate([
    		    'upload_file'=>'required|image|mimes:jpeg,png,jpg',
           ]);
        if($request->hasFile('upload_file')) {
            $image = $request->file('upload_file');
            $file   = time().'.'.$image->getClientOriginalExtension();
         
            $destinationPath = public_path('/admin/gallery/images');
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath.'/'.$file);
         	DB::table('gallery')
   	          ->insert([
   	   	         'upload_file'=>$file

               ]);
    }
    return redirect()->back()->with('msg','image inserted successfully');
    }
      public function showGallery(){
            $gallery =DB::table('gallery')->paginate(12);
            return view('admin.gallery.show_gallery',['gallery'=>$gallery]); 
          }
      public function deleteImage($id){

        $image_detail = DB::table('gallery')->where('id',$id)->first();
        File::delete(public_path('admin/gallery/images/'.$image_detail->upload_file));
        DB::table('gallery')
            ->where('id',$id)->delete();
        return redirect()->back()->with('msg','Image deleted successfully');

   		 }
}
