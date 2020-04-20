@extends('admin.template.master')
@section('content')
<div class="right_col" role="main">
        @if(session()->has('msg'))
          {{session()->get('msg')}}
        @endif
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_title">
                    <h2>Add Chapter</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    </div>
                    
                    <form id="demo-form2" method="POST" action="{{route('admin.add_chapter')}}" data-parsley-validate class="form-horizontal form-label-left" enctype='multipart/form-data'>
                    	@csrf
                      <div class="well" style="overflow: auto">
                      <div class="form-group">
                        
                        <div>
                          <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="stream_type_id">Stream Type</label>
                            <select id="stream_type_id" name="stream_type_id" class="form-control col-md-7 col-xs-12">
                                <option selected disabled value="">Choose Stream Type</option>
                           
                               <option value="2">Stream</option>
                             
                              
                               <option value="1">No Stream</option>
                           
                            </select>
                             
                            @error('stream_type_id')
                                {{ $message }}
                            @enderror
                        </div>
                           <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="class_id">Class</label>
                            <select id="class_id" name="class_id" class="form-control col-md-7 col-xs-12">
                                <option selected disabled value="">Choose Class</option>
                            </select>
                            @error('class_id')
                                {{ $message }}
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
                             
                            @error('stream_name_id')
                                {{ $message }}
                            @enderror
                        </div>
                      
                         <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="subject_id">Subject</label>
                            <select id="subject_id" name="subject_id" class="form-control col-md-7 col-xs-12">
                                <option selected disabled value="">Choose Subject</option>
                            </select>
                            @error('subject_id')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="clearfix"></div>

                         
                         <label >Chapter No</label>
                          <input type="integer" name="chapter_no" class="form-control" required  autocomplete="off" />
                          @error('chapter_no')
                              {{$message}}
                          @enderror 
                           <label >Chapter Name</label>
                          <input type="text" name="chapter_name" class="form-control" required  autocomplete="off" />
                          @error('chapter_name')
                              {{$message}}
                          @enderror 
                        </div>
                      </div>

                          
                          
                      </div>
                       <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Add Chapter</button>
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


</script>
@endsection