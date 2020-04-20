	  	@extends('web.templete.master')

	    {{-- META --}}
	    @section('meta')
	     <title>Parakiaki Academy</title>
	     <!--<meta name="description" content="">-->
	     <!--<meta name="author" content="">-->
	     <!--<meta name="keywords" content="">-->
	    @endsection

	    @section('content') 
	        <div class="pagehding-sec">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-12">
			                <div class="page-heading">
			                    <h1>Subject</h1>
			                </div>
			                <div class="breadcrumb-list">
			                    <ul>
			                        <li><a href="{{route('web.index')}}">Home</a></li>
			                        <li><a href="#">Subject</a></li>
			                    </ul>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="research-sec pt-100 pb-100">
			    <div class="container">
			        <div class="row">
			        	
			        	@foreach($subject_record as $record)
			            <div class="research-item">
			                <div class="col-md-4 col-sm-6 inner">
			                    <div class="media">
                                     
			                        <div class="research-thumb">
			                            <a href="{{route('web.show_material_category', ['subject_id' => $record->id,'class_id'=>$record->class_id,'id'=>$id])}}"><img src="{{asset('admin/subject/banner/'.$record->banner)}}" alt="" /></a>
			                            <div class="research-icon">
			                                <div class="readmore-button">
			                                    <a href="{{route('web.show_material_category', ['subject_id' => $record->id,'id'=>$id])}}">Learn More</a>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="research-inner-text">
			                        	
			                            <div class="media-body">
			                                <h2><a href="{{route('web.show_material_category', ['subject_id' => $record->id,'id'=>$id])}}">{{$record->subject_name}}</a></h2>
			                            </div>
			                           
			                        </div>
			                    </div>
			                </div>
			            </div>
			            @endforeach

			          

			        
			            		            


			           
			           
			           
			          
			           
			        </div>
			    </div>
			</div>
    	@endsection   

      