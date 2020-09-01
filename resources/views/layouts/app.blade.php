<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"> 
@include('partials.header')
@include('partials.main') 
<body>
  
    <div class="app-content">
      <div class="content-wrapper">
        <section> 
          @yield('main-content') 
        </section>
      </div>
    </div> 
    <!-- ////////////////////////////////////////////////////////////////////////////-->
  
    @include('partials.footer')
    @include('partials.scripts') 
  </body> 
</html>