@extends('admin.template.master')
@section('content')
<div class="right_col" role="main">
 
  <div class="">
    <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
             @if(session()->has('msg'))
                <div class="alert alert-success">{{ session()->get('msg') }}</div>
            @endif

            <div class="x_title">
              <h2>Add Topic</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
            </div>
            <form id="demo-form2" method="POST" action="{{route('admin.add_topic')}}" data-parsley-validate class="form-horizontal form-label-left" enctype='multipart/form-data'>
              	@csrf
                <div class="well" style="overflow: auto">
                  <div class="form-group">
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                      <label for="stream_type_id">Stream Type</label>
                      <select id="stream_type_id" name="stream_type_id" class="form-control col-md-7 col-xs-12">
                          <option selected disabled value="">Choose Stream Type</option>
                          <option value="2" name="stream_type_id">Stream</option>
                          <option value="1" name="stream_type_id">No Stream</option>
                      </select>
                      @if($errors->has('stream_type_id'))
                          <span style="color:red">
                              <strong>{{ $errors->first('stream_type_id') }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                      <label for="class_id">Class</label>
                      <select id="class_id" name="class_id" class="form-control col-md-7 col-xs-12">
                          <option selected disabled value="">Choose Class</option>
                      </select>
                      @if($errors->has('class_id'))
                          <span style="color:red">
                              <strong>{{ $errors->first('class_id') }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                      <label for="stream_name_id">Stream Name</label>
                      <select id="stream_name_id" name="stream_name_id" class="form-control col-md-7 col-xs-12">
                          <option selected disabled value="">Choose Stream</option>
                          @if(isset($stream_record) && !empty($stream_record) && (count($stream_record) > 0))
                              @foreach($stream_record as $key => $value)
                                @if($value->status==1)
                                  <option value="{{ $value->id }}">{{ ucwords($value->stream) }}</option>
                                @endif
                              @endforeach
                          @endif
                      </select>
                       
                      @if($errors->has('stream_name_id'))
                          <span style="color:red">
                              <strong>{{ $errors->first('stream_name_id') }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                      <label for="subject_id">Subject</label>
                      <select id="subject_id" name="subject_id" class="form-control col-md-7 col-xs-12">
                          <option selected disabled value="">Choose Subject</option>
                      </select>
                     @if($errors->has('subject_id'))
                          <span style="color:red">
                              <strong>{{ $errors->first('subject_id') }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                      <label for="chapter_no_id">Chapter No</label>
                      <select id="chapter_no_id" name="chapter_no_id" class="form-control col-md-7 col-xs-12">
                          <option selected disabled value="">Choose Chapter No</option>
                      </select>
                     @if($errors->has('chapter_no_id'))
                          <span style="color:red">
                              <strong>{{ $errors->first('chapter_no_id') }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                      <label for="chapter_name_id">Chapter Name</label>
                      <select id="chapter_name_id" name="chapter_name_id" class="form-control col-md-7 col-xs-12">
                        
                          <option selected disabled value="">Choose Chapter Name</option>
                      </select>
                      @if($errors->has('chapter_name_id'))
                          <span style="color:red">
                              <strong>{{ $errors->first('chapter_name_id') }}</strong>
                          </span>
                      @enderror
                  </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                      <label for="category_id">Choose Document Category</label>
                      <select id="category_id" name="category_id" class="form-control col-md-7 col-xs-12">
                        <option selected disabled value="">Choose Document Category</option>
                        @foreach($category_record as $record)
                          <option selected value="{{$record->id}}">{{ucwords($record->category_name)}} </option>
                          @endforeach
                      </select>
                      @if($errors->has('category_id'))
                          <span style="color:red">
                              <strong>{{ $errors->first('category_id') }}</strong>
                          </span>
                      @enderror
                    </div>
                
                   <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                    <label>Topic Name</label>
                    <input type="text" name="topic_name" class="form-control" required  autocomplete="off" />
                     @if($errors->has('topic_name'))
                          <span style="color:red">
                              <strong>{{ $errors->first('topic_name') }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                    <label>File</label>
                    <input type="file" name="upload_file" class="form-control" required  autocomplete="off" />
                   @if($errors->has('upload_file'))
                          <span style="color:red">
                              <strong>{{ $errors->first('upload_file') }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                    <label>Year</label>
                    <input type="number" name="year" class="form-control" autocomplete="off" />
                  
                  
                    @if($errors->has('year'))
                          <span style="color:red">
                              <strong>{{ $errors->first('year') }}</strong>
                          </span>
                      @enderror
                  </div>
                  
                  <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                    <label>Date</label>
                    <input type="date" name="date" class="form-control" autocomplete="off" />
                 
                  
                    @if($errors->has('date'))
                          <span style="color:red">
                              <strong>{{ $errors->first('date') }}</strong>
                          </span>
                      @enderror
                  </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="submit" name="submit" class="btn btn-primary">Add Topic</button>
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
$(document).ready(function(){
    $('#class_id').change(function(){
        var class_id = $('#class_id').val();
          var stream_type_id = $('#stream_type_id').val(); 


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        $.ajax({
            method: "GET",
            "_token": "{{ csrf_token() }}",
            url   : "{{route('admin.retrive_subject')}}",
            data  : {
                'class_id': class_id,
                'stream_type_id':stream_type_id
            },
            success: function(response) {

                var res = response.split(',');
                $('#stream_name_id').html(res[0]);
                $('#subject_id').html(res[1]);

            }
        }); 
    });
});
$(document).ready(function(){
    $('#stream_name_id').change(function(){
        var class_id = $('#class_id').val();
        var stream_name_id = $('#stream_name_id').val();
          
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        $.ajax({
            method: "GET",
            "_token": "{{ csrf_token() }}",
            url   : "{{route('admin.retrive_subject_for_stream')}}",
            data  : {
                 'class_id':class_id,
                 'stream_name_id': stream_name_id,
                
            },
            success: function(response) {

                
                
                $('#subject_id').html(response);

            }
        }); 
    });
});
$(document).ready(function(){
    $('#subject_id').change(function(){
        var subject_id = $('#subject_id').val();
        
          
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        $.ajax({
            method: "GET",
            "_token": "{{ csrf_token() }}",
            url   : "{{route('admin.retrive_chapter_no')}}",
            data  : {
                 'subject_id':subject_id
            },
            success: function(response) {

                
                
                $('#chapter_no_id').html(response);

            }
        }); 
    });
});
$(document).ready(function(){
    $('#chapter_no_id').change(function(){
        var chapter_no_id = $('#chapter_no_id').val();
        
          
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        $.ajax({
            method: "GET",
            "_token": "{{ csrf_token() }}",
            url   : "{{route('admin.retrive_chapter_name')}}",
            data  : {
                 'chapter_no_id':chapter_no_id
            },
            success: function(response) {

                
                
                $('#chapter_name_id').replaceWith(response);

            }
        }); 
    });
});


</script>
@endsection