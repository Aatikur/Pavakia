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
                    <h2>Update Admin Account Password </h2>
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{route('admin.update_password')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="well" style="overflow: auto">
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                          <input type="email" class="form-control form-text-element"  value="{{ old('email') }}"  class="form-control col-md-7 col-xs-12" name="email"/>
                         @error('email')
                          <span style="color: red; font-weight: bold">{{ $message }}</span>
                        @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="old_password">Old Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          <input type="password" class="form-control col-md-7 col-xs-12"  value="{{ old('password') }}" name="old_password" >
                           @error('old_password')
                             <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="new_password">New Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          

                          <input type="password" class="form-control col-md-7 col-xs-12"  value="{{ old('password') }}" name="new_password" >
                          @error('new_password')
                            <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="retype_new_password">Retype New Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" class="form-control col-md-7 col-xs-12"  value="{{ old('password') }}" name="retype_new_password" >
                          @error('retype_new_password')
                            <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      
                        </div>
                      </div>
                     <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="submit" class="btn btn-primary">Update Password</button>
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
