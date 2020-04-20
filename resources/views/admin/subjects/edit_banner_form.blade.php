@extends('admin.template.master')

@section('content')

<div class="right_col" role="main">
       <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Subject</h2>
                    <div class="clearfix"></div>
                  </div>
                  @if(session()->has('msg'))
                      <div class="alert alert-success" role="alert">
                             {{session()->get('msg')}}
                       </div>
                  @endif
                  <div class="x_content">
                    <br />
                  </div>
                   <form id="demo-form2" method="POST" action="{{route('admin.update_banner',['id'=>$banner_record->id])}}" enctype='multipart/form-data'>
                    	@csrf
                      <div class="well" style="overflow: auto">
                      <div class="form-group">
                       <div>
                          <label >Update Subject Banner</label>
                          <input type="file"  name="banner" class="form-control"   autocomplete="off" accept="image/*" />
                           <p style="color:red;">/* Subject Banner size should be 360 X 217</p>
                        </div>   
                      </div>
                      @error('banner')
                        <span style="color: red; font-weight: bold">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="submit" class="btn btn-primary">Update  Banner</button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <p style="color:red">/*To not update and retain old subject banner leave input field empty and click update </p>
            </div>
          </div>
        </div>

@endsection