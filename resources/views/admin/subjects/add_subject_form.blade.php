@extends('admin.template.master')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Subject</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            @if(session()->has('msg'))
                <div class="alert alert-success">{{ session()->get('msg') }}</div>
            @endif
            <!-- Section For New User registration -->
            <form method="POST" action="{{route('admin.add_subjects')}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
                @csrf
                <div class="well" style="overflow: auto">
                    <div class="form-row mb-3">
                        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="stream_type_id">Stream Type</label>
                            <select id="stream_type_id"  class="form-control col-md-7 col-xs-12">
                                <option selected disabled value="">Choose Stream Type</option>
                                <option name="stream_type_id" value="2">Stream</option>
                                <option name="stream_type_id" value="1">No Stream</option>  
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
                            {{-- @error('class_id')
                                <span>{{ $message }}</span>
                            @enderror --}}
                            @if($errors->has('class_id'))
                                <span style="color:red">
                                    <strong>{{ $errors->first('class_id') }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="stream_name_id">Stream Name</label>
                            <select id="stream_name_id" name="stream_name_id" class="form-control col-md-7 col-xs-12">
                            <option selected disabled value="">Choose Stream Name</option>
                            </select>
                               @if($errors->has('stream_name_id'))
                                <span style="color:red">
                                    <strong>{{ $errors->first('stream_name_id') }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="subject">Subject</label>
                            <input id="subject_id" name="subject_id" class="form-control col-md-7 col-xs-12" type="text" name="subject"/>
                            @if($errors->has('subject_id'))
                                <span style="color:red">
                                    <strong>{{ $errors->first('subject_id') }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="Banner">Subject Banner</label>
                            <input id="banner_id" name="banner_id" class="form-control col-md-7 col-xs-12" type="file"/>
                           @if($errors->has('banner_id'))
                                <span style="color:red">
                                    <strong>{{ $errors->first('banner_id') }}</strong>
                                </span>
                            @enderror
                        <p style="color:red;">/* Subject Banner size should be 360 X 217</p></div>

                    </div>
                </div>

                <div class="ln_solid"></div>
                    <div class="form-group">
                       <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="submit" class="btn btn-primary form-text-element">Add Subject</button>
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
            <h2>All Subjects</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
           </div>
          <div class="x_content"><br />
           <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         <th>Class Name</th>
                            <th>Subject Name</th>
                            <th>Modify</th>
                        </tr>
                       </thead>
                       <tbody class="form-text-element">
                        @if (count($all_subject_records) > 0)
                           @foreach ($all_subject_records as $key => $item)
                           <tr>
                                <td>{{ $item->class_name }}</td>
                                    <td>{{ ucwords($item->subject_name)}}</td>
                                    <td>
                                     <a href="{{route('admin.show_edit_subject_form',['id'=>$item->id,'class_id'=>$item->class_id])}}" class="btn btn-warning form-text-element">Edit</a>
                                     <a href="{{route('admin.show_edit_banner_form',['id'=>$item->id])}}" class="btn btn-warning form-text-element">Update banner </a>
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
$(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>
@endsection