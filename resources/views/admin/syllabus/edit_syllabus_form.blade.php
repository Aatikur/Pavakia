@extends('admin.template.master')

@section('content')

<div class="right_col" role="main">
      
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Syllabus</h2>
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
                    
                    <form id="demo-form2" method="POST" action="{{route('admin.update_syllabus',['id'=>$syllabus_record->id])}}" data-parsley-validate class="form-horizontal form-label-left" enctype='multipart/form-data'>
                      @csrf
                       <div class="well" style="overflow: auto">
                      <div class="form-group">
                        
                        <div>
                         
                          <label for="topic">Subject</label>
                          @foreach($subject_records as $subject_records )
                           @if($subject_records->id==$syllabus_record->id)
                          <input type="text" name="subject" class="form-control" required  value ="{{ucwords($subject_records->subject_name)}}" disabled />

                           @error('subject')
                            <div class="alert alert-danger" role="alert">
                              {{$message}}
                            </div>
                          @enderror
                          @endif 
                          @endforeach
                          
                          <label for="File">Upload File</label>
                          <input type="file" name="syllabus" class="form-control">


                        </div>
                      </div>
                       @if($errors->has('syllabus'))
                                <span style="color:red">
                                    <strong>{{ $errors->first('syllabus') }}</strong>
                                </span>
                        @enderror
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="submit" class="btn btn-primary">Update syllabus</button>
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