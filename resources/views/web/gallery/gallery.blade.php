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
		                        <h1>Gallery</h1>
		                    </div>
		                    <div class="breadcrumb-list">
		                        <ul>
		                            <li><a href="{{route('web.index')}}">Home</a></li>
		                            <li><a href="{{route('web.gallery.gallery')}}">Gallery </a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="gallery-sec pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="gallery-area">

                <div class="navbarsort">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarfiltr" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="shorttitle">
                        <h2>Sort Gallery</h2>
                    </div>
                </div>
                @foreach($gallery_record as $record)
                <div class="gallery-container">

                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="gallery-item">
                            <img src="{{asset('admin/gallery/images/'.$record->upload_file).''}}" alt="">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-text">
                                    <span class="gallery-button">
										<a href="{{asset('admin/gallery/images/'.$record->upload_file).''}}" class="gallery-photo"><i class="fa fa-file-image-o"></i></a>
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div>
               {{$gallery_record->links()}}
               </div>
    </div>
</div>
    	@endsection   

      