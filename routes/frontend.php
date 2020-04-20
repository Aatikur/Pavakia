<?php

Route::group(['namespace'=>'Web'],function(){
    
	Route::get('/', 'IndexController@index')->name('web.index');

    Route::get('/Forgot-password', function () {
        return view('web.forgot-password');
    })->name('web.forgot-password');

    Route::get('login', 'UsersLoginController@showUserLoginForm')->name('web.login');
    Route::post('login', 'UsersLoginController@userLogin')->name('web.login_submit');

    Route::get('logout', 'UsersLoginController@logout')->name('web.logout');
});

Route::group(['namespace'=>'Web'],function(){
    Route::get('/About', function () {
    return view('web.about.about');
   })->name('web.about.about');

    Route::get('/Gallery', function () {
        $gallery_record = DB::table('gallery')->paginate(12);
        return view('web.gallery.gallery',['gallery_record'=>$gallery_record]);
    })->name('web.gallery.gallery');

    Route::get('/Class/Syllabus/{id}', 'TestController@showSyllabus')->name('web.show_syllabus');

    Route::get('/Acheivement', function () {
        $achievment_record = DB::table('achievment')->get();
        return view('web.acheivement.acheivement',compact('achievment_record'));
    })->name('web.acheivement.acheivement');

    Route::get('/Contact', function () {
    return view('web.contact.contact');
    })->name('web.contact.contact');

    Route::group(['middleware'=>'auth:user'],function(){
        Route::get('/Class/Subject/Material/{subject_id}/{id}','TestController@showMaterialCategory')->name('web.show_material_category');
        
        Route::get('/Class/Subject/{id}','TestController@showAllSubjectsForNonStream')->name('web.show_all_subjects_for_non_stream');
        
       
        Route::get('/Class/Subject/Material/Chapter/{document_id}/{subject_id}/{id}','TestController@showAllMaterials')->name('web.show_all_materials');
        Route::get('/Class/Subject/{id}/{stream_id}/{stream_type_id}','TestController@showAllSubjects')->name('web.show_all_subjects');

        Route::get('file-download/{topic_id}', 'TestController@fileDownload')->name('web.file_download');
    });
});

    





// Route::get('/Forgot-password', function () {
//     return view('web.forgot-password');
// })->name('web.forgot-password');

