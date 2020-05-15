@extends('admin.template.master')

@section('content')


<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        

        <!-- top navigation -->
       
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>All Registered Students</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registered Student List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Stream</th>
                          <th>Class</th>
                          <th>Phone Number</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                     
                      <tbody>
                         @foreach($student_list as $item=>$value)
                        <tr>
                          <td>{{$value->name}}</td>
                          <td>{{$value->email}}</td>
                          @if($value->stream!=null)
                          <td>{{$value->stream}}</td>
                          @else
                          <td>No Stream</td>
                          @endif
                          <td>{{$value->class_name}}</td>
                          <td>{{$value->mobile}}</td>
                          <td>
                            <a href="{{route('admin.view_all_details',['id'=>$value->id])}}" class="btn btn-success form-text-element">View </a>
                          @if($value->status == 2)
                              <a href="{{route('admin.disable_student_account',['id'=>$value->id])}}" class="btn btn-danger form-text-element">Disable</a>
                          @else
                              <a href="{{route('admin.enable_student_account',['id'=>$value->id])}}" class="btn btn-success form-text-element">Enable</a>
                          @endif
                          <a  onclick="return confirm('Are You Sure Want To Delete?')"  href="{{route('admin.delete_account',['id'=>$value->id])}}" class="btn btn-danger form-text-element">Delete</a>
                         {{--  <a href="{{route('admin.reset_password_form',['id'=>$value->id])}}" class="btn btn-success form-text-element">Change Password</a> --}}
                          <a href="{{route('admin.edit_details_form',['id'=>$value->id])}}" class="btn btn-success form-text-element">Edit </a>
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
        </div>
      </div>
    </div>

@endsection
@section('script')
<script type="text/javascript">


$(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>
@endsection