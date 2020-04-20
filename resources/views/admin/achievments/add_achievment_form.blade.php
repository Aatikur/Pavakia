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
                    <h2>Add Achievment </h2>
                    {{-- <ul class="nav navbar-right panel_toolbox">
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
                      </li> --}}
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{route('admin.add_achievment')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="well" style="overflow: auto">
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_id">Student ID<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="student_id" required="required" class="form-control col-md-7 col-xs-12" value="{{ old('student_id') }}" name="student_id">
                         @error('student_id')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                            @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="studentname">Student Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="studentname" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" name="studentname">
                           @error('studentname')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                            @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image" accept="image/*">Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="file" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" name="file">
                           @error('file')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                            @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="achievment">Achievment <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="city" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" name="achievment">
                          @error('achievment')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="class">Student Class <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="studentclass" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" name="studentclass">
                           @error('studentclass')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                            @enderror
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="year">Year <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="studentclass" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" name="year">
                           @error('year')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                            @enderror
                       </div>
                        </div>
                      </div>
                     <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="submit" class="btn btn-primary">Add Achievment</button>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>

@endsection
