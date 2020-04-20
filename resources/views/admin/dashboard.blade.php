@extends('admin.template.master')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY  col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-photo"></i></div>
                  <div class="count">Total Streams</div>
                  <h3>{{$count}}</h3>
                </div>
              </div>
              <div class="animated flipInY  col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">Total Class</div>
                  <h3>{{$class}}</h3>
                </div>
              </div>
                <div class="animated flipInY  col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">Total Subjects</div>
                  <h3>{{$subjects}}</h3>
                </div>
              </div>
              
              
            </div>








            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection