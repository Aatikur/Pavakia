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
                          <th>Chapter No</th>
                          <th>Chapter Name</th>
                          <th>Topic Name</th>
                          <th>File</th>
                          <th>Year</th>
                          <th>Date</th>
                          <th>Modify</th>
                        </tr>
                      </thead>
                      <tbody class="form-text-element">
                        

                             @foreach($all_file_records as $item)

                                <tr>
                                  
                                    <td>{{ $item->chapter_no }}</td>
                                    <td>{{ucwords($item->chapter_name)}} </td>
                                   
                                    <td>{{ ucwords($item->name) }}</td>
                                    <td><a href="{{asset('admin/docs/'.$item->file).''}}" target="_blank">{{ $item->file }}</a></td>
                                    <td>{{$item->year}}</td>
                                    <td>{{$item->date}}</td>
                                    <td>
                                      <a href="{{route('admin.delete_file',['id'=>$item->id])}}" class="btn btn-warning form-text-element">Delete</a>
                                      <a href="{{route('admin.show_edit_topic_files_form',['id'=>$item->id])}}" class="btn btn-warning form-text-element">Edit</a>
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

