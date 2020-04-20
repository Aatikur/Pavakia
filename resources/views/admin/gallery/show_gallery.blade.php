@extends('admin.template.master')

@section('content')

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                     @if(session()->has('msg'))
                      <div class="alert alert-success" role="alert">
                             {{session()->get('msg')}}
                       </div>
                   @endif
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

                    <div class="row">

                      @if(!empty($gallery) && (count($gallery) > 0))
                         @foreach($gallery as $gallerylist)

                      <div class="col-md-3" style="height: 200px; overflow: hidden;margin-bottom: 10px;">
                        <span style="display: block;width: 280px; height: 100%; background: url({{asset('admin/gallery/images/'.$gallerylist->upload_file).''}}) left center; background-repeat: no-repeat;">
                         
                          <a href="{{ route('admin.delete_image',['id' => $gallerylist->id])}}" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                          </a>
                          

                        </span>
                      </div>


                       @endforeach
                         @endif

                    </div>
                    {{$gallery->links()}}
                  </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection