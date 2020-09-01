<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"> 
@include('partials.header_login')
{{-- @include('partials.mainheader')  --}}
<body>
  
    <div class="app-content content">
      <div class="content-wrapper">
        <section> 
          @yield('main-content') 
        </section>
      </div>
    </div> 
    <!-- ////////////////////////////////////////////////////////////////////////////-->
  
    {{-- @include('partials.footer') --}}
    @include('partials.scripts_login') 
  </body> 
</html>