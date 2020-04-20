@extends('admin.template.master')

@section('content')

 <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
             
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  @if(session()->has('msg'))
                                <div class="alert alert-success" role="alert">
                                            {{ session()->get('msg') }}
                                 </div>
                   @endif
                 
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Achievment List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    @foreach($achievment_record as $records)
                    <div class="col-md-3">
                    	<div class="img-div">
                    		<img src="{{asset('admin/achievment/images/'.$records->image)}}" width="100%" alt="">
                    		<div class="achievment_texts">
	                    		<h4>{{$records->achievment}}</h4>
	                    		<h5>{{$records->name}}</h5>
	                    		<p class="text-uppercase">Student ID : {{$records->student_id}}</p>
                    		</div>
                    		<p class="class text-center">{{$records->class}}</p>
                    		<h3 class="year">2020</h3>
                    		<div class="actions">
                    			<a href="{{route('admin.delete_achievment',['id'=>$records->id])}}"><i class="fa fa-trash"></i></a>
                    			{{-- <a href="#"><i class="fa fa-edit"></i></a> --}}
                    		</div>
                    	</div>
                    </div>
                    @endforeach
                 
                  </div>
                </div>
              </div>
            </div>

           
           


             
            </div>

            
           

            
          </div>


@endsection