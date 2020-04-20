@extends('admin.template.master')

@section('content')

<div class="right_col" role="main">
      
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Document Category</h2>
                    <div class="clearfix"></div>
                  </div>
                    @if(session()->has('msg'))
                      <div class="alert alert-success" role="alert">
                             {{session()->get('msg')}}
                       </div>
                   @endif
                  <div class="x_content">
                    <br />
                  </div>
                    <form id="demo-form2" method="POST" action="{{route('admin.add_category')}}" data-parsley-validate class="form-horizontal form-label-left" enctype='multipart/form-data'>
                    	@csrf
                      <div class="well" style="overflow: auto">
                      <div class="form-group">
                        <div>
                          <label >Add Document Category</label>
                            <input type="text" name="category" class="form-control" required  autocomplete="off" />
                        </div>
                      </div>
                        @error('category')
                          <span style="color: red; font-weight: bold">{{ $message }}</span>
                        @enderror
                      </div>    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
                        </div>
                      </div>
                    </form>
                      <div class="x_content"><br />
                        <table id="datatable" class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Document Category</th>
                              <th>Modify</th>
                            </tr>
                          </thead>
                          <tbody class="form-text-element">
                            @foreach ($document_record as  $item)
                              <tr>
                                <td>{{ ucwords($item->category_name) }}</td>
                                <td><a href="{{route('admin.show_edit_category_form',[$item->id])}}" class="btn btn-warning form-text-element">Edit</a>
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

@endsection