<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;
use Session;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('web.include.header', function ($view) {

            /** Class Data Items **/
            $class_data = "";
            if( Auth::guard('user')->user() && !empty(Auth::guard('user')->user()->id)) 
            {
                $user_id = Auth::guard('user')->user()->id;

                $class_data = DB::table('users')
                    ->leftJoin('class', 'users.class_id', '=', 'class.id')
                    ->leftJoin('stream_type', 'users.stream_id', '=', 'stream_type.id')
                    ->where('users.id', Auth::guard('user')->user()->id)
                    ->where('users.class_id', Auth::guard('user')->user()->class_id)
                    ->where('users.stream_id',Auth::guard('user')->user()->stream_id)
                    ->select('users.*', 'class.class_name','stream_type.stream','stream_type.id as stream_id','class.stream_type as stream_type_id','stream_type.status as stream_status' ,'class.status as class_status')
                    ->first();
                $class_syllabus = DB::table('class')->get();
                
    
                
            } else{
                $class_data = DB::table('class')->get();
                $class_syllabus = DB::table('class')->get();
            }

            

            
               $header_data =['class_data'=>$class_data,'class_syllabus'=>$class_syllabus] ;
              
               

            $view->with('header_data', $header_data);
        });
    }
}
