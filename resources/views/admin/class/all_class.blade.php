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
           
             <a href="{{route('admin.show_add_class_form')}}" class="btn btn-success form-text-element">Add Class</a>
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
                            <th>Modify</th>
                        </tr>
                      </thead>
                      <tbody class="form-text-element">
                        

                            @foreach ($class_record as  $item)

                                <tr>
                                    @if($item->stream_type==1)
                                    <td>No Stream</td>
                                    @else
                                    <td>Stream</td>
                                    @endif
                                    <td>{{$item->class_name}}</td>
                                    
                                    
                                    <td>
                                        <a href="{{route('admin.edit_class_form',['id'=>$item->id])}}" class="btn btn-warning form-text-element">Edit</a>
                                        @if($item->status==2)
                                        <a href="{{route('admin.disable_class',['id'=>$item->id])}}" class="btn btn-danger form-text-element">Disable</a>
                                        @else
                                        <a href="{{route('admin.enable_class',['id'=>$item->id])}}" class="btn btn-success form-text-element">Enable</a>
                                        @endif

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

