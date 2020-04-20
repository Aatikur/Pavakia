@extends('admin.template.master')

@section('content')

<div class="right_col" role="main">
      
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Topic & Files</h2>
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
                    <form id="demo-form2" method="POST" action="{{route('admin.update_topic_files',['id'=>$topic_record->id])}}" data-parsley-validate class="form-horizontal form-label-left" enctype='multipart/form-data'>
                    	@csrf
                      <div class="well" style="overflow: auto">
                      <div class="form-group">
                        <div>
                          <label for="topic">Topic</label>
                          <input type="text" name="topic" class="form-control" required  value ="{{$topic_record->name}}" />
                          @error('topic')
                            <div class="alert alert-danger" role="alert">
                              {{$message}}
                            </div>
                          @enderror
                          <label for="Date">Date</label>
                          <input type="date" name="date" class="form-control">
                          @error('date')
                            <div class="alert alert-danger" role="alert">
                              {{$message}}
                            </div>
                          @enderror 
                          <label for="Year">Year</label>
                          <input type="integer" name="year" class="form-control" value="{{$topic_record->year}}">
                          @error('year')
                            <div class="alert alert-danger" role="alert">
                              {{$message}}
                            </div>
                          @enderror 
                          <label for="File">File</label>
                          <input type="file" name="upload_file" class="form-control">
                        </div>
                      </div>
                      @error('upload_file')
                        <span style="color: red; font-weight: bold">{{ $message }}</span>
                      @enderror
                      </div>
                     <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                              <button type="submit" name="submit" class="btn btn-primary">Update Topic & Files</button>
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