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
                    <form id="demo-form2" method="POST" action="{{route('admin.update_subject',['id'=>$subject_record->id,'class_id'=>$subject_record->class_id])}}" enctype='multipart/form-data'>
                    	@csrf
                      <div class="well" style="overflow: auto">
                      <div class="form-group">
                       <div>
                         <label >Update Subject</label>
                        <input type="text" value="{{$subject_record->subject_name}}" name="subject" class="form-control"   autocomplete="off" />
                       </div>
                      </div>
                      @error('subject')
                        <span style="color: red; font-weight: bold">{{ $message }}</span>
                      @enderror
                    </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="submit" class="btn btn-primary">Update Subject</button>
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