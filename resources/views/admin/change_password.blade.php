<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pavakiakademy | Admin Update Password</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('admin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{route('admin.update_password')}}" method="POST" autocomplete="off">
                @csrf
              <h1>Update Admin Password</h1>
              <center>
                <b>
                @if (session()->has('msg'))
               {{ session()->get('msg') }}
                    
                @endif
                </b>
            </center>

              <div>
                <input type="email" class="form-control form-text-element" placeholder="Email" value="{{ old('email') }}"  name="email"/>
               
              </div>
               @error('email')
                  <span style="color: red; font-weight: bold">{{ $message }}</span>
                @enderror
              <div>
                <input type="password" class="form-control form-text-element" placeholder="old Password" value="{{ old('password') }}" name="old_password" >
                 
              </div>
              @error('old_password')
                   <span style="color: red; font-weight: bold">{{ $message }}</span>
                @enderror


              <div>
                <input type="password" class="form-control form-text-element" placeholder="New Password" value="{{ old('password') }}" name="new_password" >
                
              </div>
               @error('new_password')
                   <span style="color: red; font-weight: bold">{{ $message }}</span>
                @enderror
              <div>
                <input type="password" class="form-control form-text-element" placeholder="Confirm New Password" value="{{ old('password') }}" name="retype_new_password" >
               
              </div>
                @error('retype_new_password')
                  <span style="color: red; font-weight: bold">{{ $message }}</span>
                @enderror
              <div>
                <button type="submit" class="btn btn-default submit form-text-element">Update Password</button>
              </div>
              <h5><a href="{{route('admin.login')}}">Back To Login</a></h5>
              <div class="clearfix"></div>
       
              <div class="separator">

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>