<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Industria Bank</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <!-- Styles -->
    
     @if(App::isLocale('ar'))
  <link href="{{ asset('css/a.css') }}" rel="stylesheet">

  @else
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

@endif

    @yield('stylesheet')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
              Industria Bank
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __(trans('app.Login')) }}</a>
                        </li>
                       
                        @else
                       

                               <div class="dropdown">
                              <li class="dropbtn">  {{ trans('app.home') }}</li>
                             <div class="dropdown-content">
                                   <li class="nav-item">
                                <a class="nav-link" href="{{ route('sliders.index') }}">{{ __(trans('app.slider')) }}</a>
                            </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('abouts.index') }}">{{ __(trans('app.about_list')) }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('posts.index') }}">{{ __(trans('app.news') )}}</a>
                            </li>
                               <li class="nav-item">
                                <a class="nav-link" href="{{ route('questions.index') }}">{{ __(trans('app.qes')) }}</a>
                            </li>
								          <li class="nav-item">
                                <a class="nav-link" href="{{ route('latests.index') }}">{{ __(trans('app.important')) }}</a>
                            </li>
								                   <li class="nav-item">
                                <a class="nav-link" href="{{ route('loans.index') }}">{{ __(trans('app.service')) }}</a>
                            </li>
                           </div>
                             </div>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pages.index') }}">{{ __(trans('app.page')) }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('galleries.index') }}">{{ __(trans('app.gallery_list')) }}</a>
                            </li>

                               <div class="dropdown">
                              <li class="dropbtn">  {{ trans('app.permission') }}</li>
                             <div class="dropdown-content">
                             <li><a class="nav-link" href="{{ route('users.index') }}"> {{ __(trans('app.user')) }}</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}"> {{ __(trans('app.role')) }}</a></li>
                            </div>
                          </div>

                                <a class="nav-link" href="{{ route('categories.index') }}"> {{ trans('app.nw') }}</a>
                            </li> 
                                   <div class="dropdown">
                              <li class="dropbtn">{{ trans('app.branches') }}</li>
                             <div class="dropdown-content">
                                <a class="nav-link" href="{{ route('services.index') }}">{{ trans('app.directory') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('directives.index') }}">{{ trans('app.branches') }}</a>
                            </li>
                                </div>
                          </div>
                              <div class="dropdown">
                              <li class="dropbtn">  {{ trans('app.information') }}</li>
                             <div class="dropdown-content">
                                           <li class="nav-item">
                                <a class="nav-link" href="{{ route('complaints.index') }}">{{ __(trans('app.complaint')) }}</a>
                            </li>
                                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('maillists.index') }}">{{ __(trans('app.maillist')) }}</a>
                            </li>
                                    <li class="nav-item">
                                <a class="nav-link" href="{{ route('footers.index') }}">{{ __(trans('app.contact')) }}</a>
                            </li>
                        
                           </div>
                             </div>
                                    <li class="nav-item">
                                <a class="nav-link" href="{{ route('settings.index') }}">{{ __(trans('app.sett'))}}</a>
                            </li>
                                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('color.index') }}">{{ __(trans('app.color'))}}</a>
                            </li>
  @php $locale = session()->get('locale'); @endphp
                        <div class="dropdown">
                              <li class="dropbtn">
                             @switch($locale)
                                @case('ar')
                                ar
                                @break
                                @default
                              en
                            @endswitch</li>
                             <div class="dropdown-content">
                             <li>
                                <a class="nav-link" href="{{url('/lang/en')}}">
                                 <img src="{{ asset('/image/en.jpg')}}" style="width: 40px; height:30px;" alt=""></a>
                              </li>
                                <li class="nav-item">
                               <li> <a class="nav-link" href="{{url('/lang/ar')}}">
                               <img src="{{ asset('/image/ar.png')}}" style="width: 40px; height:30px;" alt=""> </a>
                              </li>
                           </div>
                             </div>
                             <div class="dropdown">
                              <li class="dropbtn">  {{ trans('app.info') }}</li>
                             <div class="dropdown-content">
                                           <li class="nav-item">
                                <a id="" class="nav-link " href="/home" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                              </li>
                                <li class="nav-item " > <a class="nav-link" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __(trans('app.Logout')) }}
                                    </a> <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                              </li>
                           </div>
                             </div>
                  
                </ul>
                            
                            @endguest
                </ul>
            </div>
        </div>
    </nav>


    <main class="py-4">
        @yield('content')
    </main>
</div>

@yield('javascript')
</body>
</html>
<style>
.dropbtn {
  color: rgba(0, 0, 0, 0.5);
  font-size: 1.2rem;
  border: none;
  cursor: pointer;
 padding-right: 10px;
  margin-left:5%;
 
}

.dropdown {
  position: relative;
  display: inline-block;
  top:8px;
  right: 2px;
  left: 2px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  
  padding: 14px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color:#f9f9f9;

}
</style>
