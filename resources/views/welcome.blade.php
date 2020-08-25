<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSM General</title>

        <!-- Fonts -->

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/izmir.min.css') }}">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
      <!-- Styles -->
    </head>
    <body>
        {{--  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif--}}

            {{--  <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> --}}
        <div class="wrapper">
            <header>
               <nav>
                  <div class="menu-icon">
                     <i class="fa fa-bars fa-2x" id="bread"></i>
                  </div>
                  <div class="logo">
                     <a href="{{ route('index') }}"><img src="{{ url('images/logoline.png') }}" /></a>
                  </div>
                  <div class="menu">
                     <ul>
                        <li><a href="{{ route('index') . '#whatwe' }}" class="hvr-grow"><i class="las la-user-friends"></i> {{ __('messages.about') }}</a></li>
                        <li><a href="{{ route('index') . '#ref' }}" class="hvr-grow"><i class="las la-home"></i> {{ __('messages.reference') }}</a></li>
                        <li><a href="{{ route('index') . '#cont' }}" class="hvr-grow"><i class="las la-phone"></i> {{ __('messages.contact') }}</a></li>
                        <li><a href="#" class="hvr-grow"><i class="lab la-facebook-square fb-ico"></i></a></li>
                        @if (App::isLocale('hu'))
                        <li id="langEng"><a href="{{ url('locale/en') }}" class="hvr-grow">EN</a></li>
                        @else
                        <li id="langEng" style="display:none;"><a href="{{ url('locale/en') }}" class="hvr-grow">EN</a></li>
                        @endif
                        @if (App::isLocale('en'))
                        <li id="langHu"><a href="{{ url('locale/hu') }}" class="hvr-grow">HU</a></li>
                        @else
                        <li id="langHu" style="display:none;"><a href="{{ url('locale/hu') }}" class="hvr-grow">HU</a></li>
                        @endif
                        <!--<li id="langEng"><a href="{{ url('locale/en') }}" class="hvr-grow">EN</a></li>
                        <li id="langHu"><a href="{{ url('locale/hu') }}" class="hvr-grow">HU</a></li>-->
                     </ul>
                  </div>
               </nav>
         @yield('content')
         <footer>
            <div class="flex">
                <div class="footer-content">
                    <p>
                        <a href="#">{{ __('messages.privacy') }}</a> |
                        <a href="#">{{ __('messages.cookie') }}</a> |
                        <a href="#">{{ __('messages.impress') }}</a> |
                        CSM General Kft. 2020
                    </p>
                </div>
            </div>
        </footer>
        {{-- scriptek --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="{{ asset('js/slick.min.js') }}" defer></script>
        <script type="text/javascript">
            $(document).ready(function() {
               $(".menu-icon").on("click", function() {
                     $("nav ul").toggleClass("showing");
               });
                 $('.slider').slick({
                   autoplay: true,
                   autoplaySpeed: 2000,
                     mobileFirst: true,
                     variableWidth: false,

                    // rtl: true,
                     //centerMode: true
               });

         });

         // Scrolling Effect

         $(window).on("scroll", function() {
               if($(window).scrollTop()) {
                     $('nav').addClass('black');
               }

               else {
                     $('nav').removeClass('black');
               }
         })
         </script>
        <script>
            // The function actually applying the offset
function offsetAnchor() {
  if (location.hash.length !== 0) {
    window.scrollTo(window.scrollX, window.scrollY - 100);
  }
}

// Captures click events of all <a> elements with href starting with #
$(document).on('click', 'a[href^="#"]', function(event) {
  // Click events are captured before hashchanges. Timeout
  // causes offsetAnchor to be called after the page jump.
  window.setTimeout(function() {
    offsetAnchor();
  }, 0);
});

// Set the offset when entering page with hash present in the url
window.setTimeout(offsetAnchor, 0);
        </script>
    </body>
</html>
