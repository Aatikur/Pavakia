
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
			                    <h1>Material</h1>
			                </div>
			                <div class="breadcrumb-list">
			                    <ul>
			                        <li><a href="{{route('web.index')}}">Home</a></li>
			                        <li><a href="#">Material</a></li>
			                    </ul>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="research-sec pt-100 pb-100 material">
			    <div class="container">
			        <div class="row">
			        	@foreach($material_record as $record)
			            <div class="research-item">
			                <div class="col-md-4 col-sm-6 inner">
			                    <div class="media">
			                        <div class="research-thumb">
			                            <a href="#"><h1>{{ucwords($record->category_name)}}</h1></a>
			                            <div class="research-icon">
			                                <div class="readmore-button">
			                                    <a href="{{route('web.show_all_materials',['document_id'=>$record->id, 'subject_id' => $subject_id,'id'=>$id])}}">Learn More</a>
			                                </div>
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

      