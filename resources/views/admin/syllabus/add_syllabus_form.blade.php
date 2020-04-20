@extends('admin.template.master')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Upload Syllabus</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            @if(session()->has('msg'))
                <div class="alert alert-success">{{ session()->get('msg') }}</div>
            @endif
            <!-- Section For New User registration -->
            <form method="POST" action="{{route('admin.add_syllabus')}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
                @csrf
                <div class="well" style="overflow: auto">
                    <div class="form-row mb-3">
                        
                        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="class_id">Class</label>
                            <select id="class_id" name="class_id" class="form-control col-md-7 col-xs-12">
                                
                                <option selected disabled value="">Choose Class</option>
                                @foreach($class_record as $records)
                                 <option selected  value="{{$records->id}}">{{$records->class_name}}</option>
                                @endforeach
                            </select>
                           
                            @if($errors->has('class_id'))
                                <span style="color:red">
                                    <strong>{{ $errors->first('class_id') }}</strong>
                                </span>
                            @enderror
                        </div>
                       
                    </div>
                    <div class="form-row mb-3">
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
                        
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="syllabus">Syllabus</label>
                            <input id="syllabus" name="syllabus" class="form-control col-md-7 col-xs-12" type="file"/>
                            @if($errors->has('syllabus'))
                                 <span style="color:red">
                                    <strong>{{ $errors->first('syllabus') }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>

                <div class="ln_solid"></div>
                    <div class="form-group">
                       <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="submit" class="btn btn-success form-text-element">Add Syllabus</button>
                      </div>
                    </div>
            </form>
            <!-- End New User registration -->
            </div>
          </div>
        </div>
      </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>All Subject Syllabus</h2>
            <div class="clearfix"></div>
           </div>
          <div class="x_content"><br />
            <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                             <th>Class Name</th>
                            <th>Subject Name</th>
                            <th>Syllabus</th>
                            <th>Modify</th>
                        </tr>
                       </thead>
                       <tbody class="form-text-element">
                        @if (count($syllabus_records) > 0)
                           @foreach ($syllabus_records as $key => $item)
                           <tr>
                                    <td>{{ $item->class_name }}</td>
                                    <td>{{ ucwords($item->subject_name)}}</td>
                                    <td><a href="{{asset('admin/syllabus/docs/'.$item->syllabus)}}" target="_blank">Download</a></td>
                                    <td>
                                     <a href="{{route('admin.show_edit_syllabus_form',['id'=>$item->id])}}" class="btn btn-warning form-text-element">Edit</a>
                                    
                                 </td>
                                </tr> 
                            @endforeach
                        @endif
                      </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@section('script')
<script type="text/javascript">

$(document).ready(function(){
    $('#class_id').change(function(){
        var class_id = $('#class_id').val();
        

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        $.ajax({
            method: "GET",
            "_token": "{{ csrf_token() }}",
            url   : "{{route('admin.retrive_subject_for_syllabus')}}",
            data  : {
                'class_id': class_id
            },
            success: function(response) {

               var res = response.split(',');
                $('#subject_id').html(response);
                
            }
        }); 
    });
});
</script>
@endsection