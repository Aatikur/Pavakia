 @extends('admin.template.master')

@section('content')

<div class="right_col" role="main">

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Account Details</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <section class="content invoice">
              <div class="row invoice-info">
                @if (!empty($user_record))                    
                <div class="col-sm-6 invoice-col">
                  <table class="table table-striped">
                    
                    <tr>
                      <th style="width:150px;">Name : </th>
                      <td>{{$user_record->name}}</td>
                    </tr> 
                    <tr>
                      <th style="width:150px;">Email : </th>
                      <td>{{$user_record->email}}</td>
                    </tr> 
                    <tr>
                      <th style="width:150px;">Mobile : </th>
                      <td>{{$user_record->mobile}}</td>
                    </tr> 
                    <tr>
                      <th style="width:150px;">Stream : </th>
                      @if($user_record->stream==null)
                      <td>No Stream</td>
                      @else
                      <td>{{$user_record->stream}}</td>
                      
                      @endif
                    </tr> 
                    <tr>
                      <th style="width:150px;">dob : </th>
                      <td>{{$user_record->dob}}</td>
                    </tr> 
                    <tr>
                      <th style="width:150px;">City : </th>
                      <td>{{$user_record->city}}</td>
                    </tr>
                    <tr>
                      <th style="width:150px;">State : </th>
                      <td>{{$user_record->state}}</td>
                    </tr>
                  
                    <tr>
                      <th style="width:150px;">Address : </th>
                      <td>{{$user_record->address}}</td>
                    </tr>
                    <tr>
                      <th style="width:150px;">PIN : </th>
                      <td>{{$user_record->pin}}</td>
                    </tr>
                    <tr>
                      <th style="width:150px;">Gender : </th>
                      <td>{{$user_record->gender}}</td>
                    </tr>
                    <tr>
                      <th style="width:150px;">Account Status : </th>
                      @if($user_record->status==2)
                      <td>Active</td>
                      @else
                      <td>Inactive</td>
                      @endif
                    </tr>
                    
                  </table>
                </div>
                @endif

                <div class="col-sm-6 invoice-col">
                   <table class="table table-striped">
                    <center><caption>Profile Image</caption></center>
                  	@if($user_record->image!=null)
                            <img src="{{asset('admin/profile/'.$user_record->image)}}" style="max-width:400px;" >
                            @else
                            <img alt="No Image">
                            @endif
                  </table>

                  
                </div>
              </div>
              <!-- /.row -->
              <hr>
           


              <div class="row">
                <button class="btn btn-warning" onclick="javascript:window.close()">Close</button>
              </div>
              <!-- /.row -->
            </section>
          </div>
        </div>
      </div>
    </div>

</div>
@endsection
