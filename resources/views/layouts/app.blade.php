<!DOCTYPE html>
<html lang="en">
<head>
@include('partials._head')
@yield('stylesheets')
</head>
<body id="app-layout">
  
  @include('partials._nav')  
  @include('partials._messages')
  @yield('content')
</div>
    <!-- JavaScripts -->
    @include('partials._footer')
    @include('partials._javascript')
    
       @yield('scripts')
</body>
</html>



    



