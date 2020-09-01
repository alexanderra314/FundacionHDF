<!DOCTYPE html>
{{-- <html lang="{{ app()->getLocale() }}">  --}}
<html class="loading" lang="en" data-textdirection="ltr">
@include('partials.header_tablero')
<body> 
  @include('partials.mainheader')

    <div class="app-content content">
      <div class="content-wrapper">

        <section> 

          @yield('main-content') 

        </section>
      </div>
    </div> 
    <!-- ////////////////////////////////////////////////////////////////////////////-->
  
    {{-- @include('partials.footer') --}}
    @include('partials.scripts_tablero') 
</body> 

</html>