@extends('admin.template.master')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
              <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
           
             <a href="{{route('admin.show_add_chapter_form')}}" class="btn btn-success form-text-element">Add Chapter</a>
            </div>
          </div>
        </div>
      </div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                            
                            <th>Stream Type</th>
                            <th>Class</th>
                            <th>Stream Name</th>
                            <th>Subject</th>
                            <th>Chapter No</th>
                            <th>Chapter Name</th>
                            <th>Modify</th>
                        </tr>
                      </thead>
                      <tbody class="form-text-element">
                        

                            @foreach ($chapter_records as  $item)

                                <tr>
                                    @if($item->stream_type==2)
                                    <td>Stream</td>
                                    @else
                                     <td>No Stream</td>
                                     @endif
                                    <td>{{$item->class_name }}</td>
                                     @if($item->stream_type==2)
                                    <td>{{$item->stream}}</td>
                                    @else
                                     <td>No Stream</td>
                                     @endif
                                    
                                    <td>{{ ucwords($item->subject_name) }}</td>
                                    <td>{{$item->chapter_no}} </td>
                                    <td>{{ ucwords($item->chapter_name) }}</td>
                                    
                                        <td><a href="{{route('admin.edit_chapter_form',['id'=>$item->subject_id])}}" class="btn btn-warning form-text-element">Edit</a>
                                       </td>
                                       
                                   
                                </tr> 
                            @endforeach
                      
                      </tbody>
                    </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

