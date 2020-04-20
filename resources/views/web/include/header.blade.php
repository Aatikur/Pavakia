 <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-8">
                        <div class="header-left">
                            <ul>
                                <li><i class="fa fa-phone"></i>+91-8810597540</li>
                                <li><i class="fa fa-envelope-o"></i><a href="" class="__cf_email__">info@pavakiakademy.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-4">
                        <div class="header-right-div">
                            <div class="soical-profile">
                                <span class="social-title">Follow Us</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hd-sec">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-12 col-xs-8">
                        <div class="logo">
                            <a href="{{route('web.index')}}">
                                <img src="{{asset('web/img/logo/logo.jpg')}}" style="max-height: 80px;" />
                                <h3>
                                    Pavaki Akademy
                                    <span>Education center</span>
                                </h3>
                            </a>
                        </div>
                    </div>
                    <div class="mobile-nav-menu"></div>
                    <div class="col-md-8 col-sm-9 menu-center">
                        <div class="menu">
                            <nav id="main-menu" class="main-menu">
                                <ul>
                                    <li class="active"><a href="{{route('web.index')}}">Home</a></li>
                                    <li><a href="{{route('web.about.about')}}">About Us</a></li>
                                    <li><a href="{{route('web.gallery.gallery')}}">Gallery </a></li>
                                    <li><a href="{{route('web.acheivement.acheivement')}}">Achievement</a></li>
                                    <li><a class="topcat">Courses Offered<i class="fa fa-angle-down"></i></a>
                                        @auth('user')
                                            @if(!empty($header_data['class_data']))
                                                @php
                                                $class_course = $header_data['class_data'];
                                                @endphp
                                                <ul>
                                                    <li>
                                                        
                                                        @if($class_course->stream_type_id ==2)
                                                            @if($class_course->class_status==1 or $class_course->stream_status==1)
                                                            <a disabled>
                                                            {{ $class_course->class_name }} (disabled by admin)
                                                          </a>
                                                   
                                                            
                                                          @else
                                                          <a href="{{route('web.show_all_subjects',['id'=>$class_course->class_id,'stream_id'=>$class_course->stream_id,'stream_type_id'=>$class_course->stream_type_id])}}">
                                                                {{ $class_course->class_name }}
                                                            </a>
                                                          
                                                            
                                                          @endif
                                                        @else
                                                        @if($class_course->class_status==2)

                                                        <a href="{{route('web.show_all_subjects_for_non_stream',['id'=>$class_course->class_id])}}">
                                                                {{ $class_course->class_name }}
                                                            </a>
                                                        @else
                                                         <a disabled>
                                                            {{ $class_course->class_name }} (disabled by admin)
                                                          </a>


                                                          
                                                        @endif
                                                        @endif
                                                    </li>
                                                </ul>
                                            @endif
                                        @else
                                        <ul>
                                            @php
                                              $class_course = $header_data['class_data'];
                                            @endphp
                                            @foreach($class_course as $key => $item)
                                            <li>
                                                @if($item->stream_type=2)
                                                   @if($item->status==2)
                                                <a href="{{route('web.login')}}">
                                                    {{ $item->class_name }}
                                                </a>
                                                    @else
                                                        <a disabled>
                                                            {{ $item->class_name }} (disabled by admin)
                                                            </a>
                                                    @endif
                                                @else
                                                    @if($item->status==2)
                                                      <a href="{{route('web.login')}}">
                                                    {{ $item->class_name }}
                                                      </a>
                                                      @else
                                                       <a disabled>
                                                            {{ $item->class_name }} (disabled by admin)
                                                            </a>
                                                    @endif

                                                  
                                                @endif
                                            </li>
                                            @endforeach
                                           
                                        </ul>
                                        
                                        @endauth
                                    </li>
                                    <li><a class="topcat">Syllabus<i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            
                                              @foreach($header_data['class_syllabus'] as $key => $item)
                                              @if($item->status==2)
                                                <li><a href="{{route('web.show_syllabus',['id'=>$item->id])}}">{{$item->class_name }} </a></li>
                                             @else
                                              <li><a disabled>
                                                            {{ $item->class_name }} (disabled by admin)
                                               </a>
                                           </li>
                                             @endif
                                              @endforeach
                                           
                                           
                                        </ul>
                                    </li>
                                    <li><a href="#">Test Series</a></li>
                                    <li><a href="{{route('web.contact.contact')}}">Contact</a></li>
                                    @auth('user')
                                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>