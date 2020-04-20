@extends('admin.template.master')

@section('content')

<div class="right_col" role="main">
      
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Chapter Details</h2>
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
                    
                    <form id="demo-form2" method="POST" action="{{route('admin.update_chapter',['subject_id'=>$chapter_records->subject_id,'id'=>$chapter_records->id])}}" data-parsley-validate class="form-horizontal form-label-left" enctype='multipart/form-data'>
                    	@csrf
                      <div class="form-group">
                        
                        <div>
                         
                          

                          <label for="chapter_no">Chapter No</label>
                          <input type="text" value="{{$chapter_records->chapter_no}}" name="chapter_no" class="form-control" required  />
                          <label for="chapter_name">Chapter Name</label>
                           <input type="text" value="{{$chapter_records->chapter_name}}" name="chapter_name" class="form-control" required  />

                        </div>
                      </div>
                        @error('class')
                            <div class="alert alert-danger" role="alert">
                              {{$message}}
                            </div>
                          @enderror 
                          
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button class="btn btn-primary" type="reset">Reset</button>
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