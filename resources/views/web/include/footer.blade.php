    <footer class="footer">

        <div class="footer-sec">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-sm-6">
                        <div class="footer-wedget-one">
                            <a href="index.php"><img src="{{asset('web/img/logo/logo.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget-menu">
                            <h2>useful links</h2>
                            <ul>
                                <li><a href="{{route('web.about.about')}}">About Us</a></li>
                                <li><a href="{{route('web.gallery.gallery')}}">Gallery</a></li>
                                <li><a href="{{route('web.acheivement.acheivement')}}">Achievement</a></li>
                                <li><a href="#">Test Series</a></li>
                                <li><a href="{{route('web.contact.contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                   <div class="col-md-3 col-sm-6">
                        <div class="footer-widget-menu">
                            <h2>Courses Offered</h2>
                            <ul>
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
                                
                                
                                

                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="footer-wedget-four">
                            <h2>contact us </h2>
                            <div class="inner-box">
                                <div class="media">
                                    <div class="inner-item">
                                        <div class="media-left">
                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <span class="inner-text">Silchar</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="inner-item">
                                        <div class="media-left">
                                            <span class="icon"><i class="fa fa-envelope-o"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <span class="inner-text footmail">
                                                <a class="__cf_email__">info@pavakiakademy.com</a>, <a class="__cf_email__" >info@pavakiakademy.com</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="inner-item">
                                        <div class="media-left">
                                            <span class="icon"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <span class="inner-text">+91-8810597540</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="copy-right">
                            <p>Copyright 2020 &copy; <span>Pavaki Akademy</span> | Designed by<span> <a href="https://www.webinfotech.net.in/">Webinfotech</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('web/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('web/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('web/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('web/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('web/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('web/js/owl.animate.js')}}"></script>
    <script src="{{asset('web/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('web/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('web/js/modernizr.min.js')}}"></script>
    <script src="{{asset('web/js/waypoints.min.js')}}"></script>
    <script src="{{asset('web/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('web/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('web/js/custom.js')}}"></script>

</body>


</html>