@extends('admin.template.master')

@section('content')

<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>New Class</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            @if(session()->has('msg'))
                <div class="alert alert-success">{{ session()->get('msg') }}</div>
            @endif
            <!-- Section For New User registration -->
            <form method="POST" autocomplete="off" action="{{ route('admin.add_class') }}" class="form-horizontal form-label-left">
                @csrf

                <div class="well" style="overflow: auto">
                    <div class="form-row mb-3">

                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="stream_id">Stream Type</label>
                            <select id="stream_id"  name="stream_type" class="form-control col-md-7 col-xs-12">
                                <option selected disabled value="">Choose Stream Type</option>
                                <option value="2" name="stream_type">Stream</option>
                                <option value="1" name="stream_type">No stream</option>
                            </select>
                            @error('stream_type')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="studentclass">Class Name</label>
                            <input type="text"  name="studentclass" id="studentclass"  class="form-control col-md-7 col-xs-12">
                            @error('studentclass')
                                <span style="color: red; font-weight: bold">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="submit" class="btn btn-primary">Add Class</button>
                  </div>
                </div>
            </form>
            <!-- End New User registration -->
            </div>
          </div>
        </div>
      </div>
</div>

@endsection