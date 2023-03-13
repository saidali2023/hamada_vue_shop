

 <!doctype html>
 <html class="no-js" lang="zxx">

    <!-- index28:48-->
      <head>
         @include('layout.front_head')
     </head>
     <body>
     <!--[if lt IE 8]>
 		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 	<![endif]-->
         <!-- Begin Body Wrapper -->
         <div class="body-wrapper">
             <!-- Begin Header Area -->
             @if(!Request::is(['login','register']))
                @include('layout.front_header')
             @endif
             <!-- Header Area End Here -->
             @yield('content')
             <!-- Begin Footer Area -->
             @if(!Request::is(['login','register']))
                @include('layout.front_footer_two')
            @endif
             <!-- Footer Area End Here -->
             <!-- Begin Quick View | Modal Area -->

             <!-- Quick View | Modal Area End Here -->
         </div>
         <!-- Body Wrapper End Here -->
         <!-- jQuery-V1.12.4 -->

         @include('layout.front_footer')

     </body>

 <!-- index30:23-->
 </html>
