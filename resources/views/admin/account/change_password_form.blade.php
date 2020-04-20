@extends('admin.template.master')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Change Password</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            @if(session()->has('msg'))
                <div class="alert alert-success">{{ session()->get('msg') }}</div>
            @endif
            <!-- Section For New User registration -->
            <form method="POST" action="{{route('admin.reset_password',['id'=>$id])}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
                @csrf
                <div class="well" style="overflow: auto">
                    <div class="form-row mb-3">
                       <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="password">Password</label>
                            <input  name="password" class="form-control col-md-7 col-xs-12" type="password" name="subject"/>
                            @if($errors->has('password'))
                                <span style="color:red">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="retype_password">Retype Password</label>
                            <input  name="retype_password" class="form-control col-md-7 col-xs-12" type="password" />
                            @if($errors->has('retype_password'))
                                <span style="color:red">
                                    <strong>{{ $errors->first('retype_password') }}</strong>
                                </span>
                            @enderror
                        </div>
                        

                    </div>
                </div>

                <div class="ln_solid"></div>
                    <div class="form-group">
                       <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="submit" class="btn btn-primary form-text-element">Update Password</button>
                      </div>
                    </div>
            </form>
            <!-- End New User registration -->
            </div>
          </div>
        </div>
      </div>
    
</div>
@endsection

