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
                    <h2>Create User Account </h2>
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{route('admin.create_account')}}"  enctype="multipart/form-data">
                      @csrf
                      <div class="well" style="overflow: auto">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="full_name">Full Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="full_name" required="required" class="form-control col-md-7 col-xs-12" value="{{ old('full_name') }}" name="full_name">
                        </div>
                         @error('full_name')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                      </div>
                     
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" value="{{ old('email') }}" name="email">
                        </div>
                          @error('email')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile">Mobile <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="mobile" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" value="{{ old('mobile') }}" name="mobile">
                        </div>
                         @error('mobile')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Stream Type<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select id="stream_type_id" class="form-control col-md-7 col-xs-12" name="stream_type_id">
                               <option selected disabled value="">Choose Stream Type</option>
                               <option value="2">Stream</option>
                               <option value="1">No Stream</option>
                             </select>
                            @error('stream_type_id')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select class <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select id="class_id" name="class_id" class="form-control col-md-7 col-xs-12">
                          <option selected disabled value="">Choose Class</option>
                         </select>
                             @error('class_id')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                             @enderror
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Stream<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select id="stream_name_id" name="stream_name_id" class="form-control col-md-7 col-xs-12">
                                <option selected disabled value="">Choose Stream Name</option>
                            </select>
                            @error('stream_name_id')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                       </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="city" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" value="{{ old('city') }}" name="city">
                          @error('city')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state">State <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="state" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" value="{{ old('state') }}" name="state">
                            @error('state')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="address" value="{{ old('address') }}" name="address"></textarea>

                           @error('address')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pin">PIN <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="state" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" value="{{ old('pin') }}" name="pin">
                          @error('pin')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state">Image<span></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="file"  class="form-control col-md-7 col-xs-12" autocomplete="off" name="file">
                            @error('file')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            <input type="radio" name="gender" value="female"> Female
                              @error('gender')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                              @enderror
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" type="date" name="dob" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                          @error('dob')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                      </div>
                        
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Create Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" class="date-picker form-control col-md-7 col-xs-12" required="required" name="password" type="password">
                          @error('password')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Retype Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="retype_password" class="date-picker form-control col-md-7 col-xs-12" required="required" name="retype_password" type="password">
                           @error('retype_password')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                          @enderror
                        </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success">Submit</button>
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
@section('script')
<script type="text/javascript">

$(document).ready(function(){
    $('#stream_type_id').change(function(){
        var stream_type_id = $('#stream_type_id').val();
        

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        $.ajax({
            method: "GET",
            "_token": "{{ csrf_token() }}",
            url   : "{{route('admin.retrive_class')}}",
            data  : {
                'stream_type_id': stream_type_id
            },
            success: function(response) {

               var res = response.split(',');
                $('#class_id').html(res[0]);
                $('#stream_name_id').html(res[1]);
            }
        }); 
    });
});
</script>
@endsection