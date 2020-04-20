@extends('admin.template.master')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          {{-- <div class="x_title">
            <div class="clearfix"></div>
          </div> --}}
          <div style="text-align:right;" class="x_content"><br />
            <a  href="{{route('admin.show_add_stream_form')}}" class="btn btn-success form-text-element">Add Stream</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content"><br />
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Stream</th>
                  <th>Modify</th>
                </tr>
              </thead>
                <tbody class="form-text-element">
                  @foreach ($stream_record as  $item)
                    <tr>
                      <td>{{ ucwords($item->stream) }}</td>
                      <td>
                        <a href="{{route('admin.show_edit_stream_form',['id'=>$item->id])}}" class="btn btn-warning form-text-element">Edit</a>
                          @if($item->status == 2)
                              <a href="{{route('admin.disable_stream',['id'=>$item->id])}}" class="btn btn-danger form-text-element">Disable</a>
                          @else
                              <a href="{{route('admin.enable_stream',['id'=>$item->id])}}" class="btn btn-success form-text-element">Enable</a>
                          @endif
                      </td>
                    </tr> 
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <p style="color:red;">/*1. Disable stream option will disable class only for registered users i.e it will disable class that user registered with at the time of registration.<br>
        /*2. Use <a style="text-decoration: underline" href="{{route('admin.list_all_class')}}">Disable classes</a> option if want to disable classes for non registered users.
        </p>
      </div>
    </div>
</div>
@endsection

