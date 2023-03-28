<!DOCTYPE html>
<html lang="en">
  <x-head-crm />
  <body onload="startTime()">

    <x-loader-crm />

    <div class="page-wrapper compact-wrapper" id="pageWrapper">

      <x-header-crm />

      <!-- Page Body Start-->
      <div class="page-body-wrapper">

        <x-sidebar-crm />

        @yield('content')



        {{-- <x-footer-dashboard /> --}}
        <x-footer-home />
  </body>
</html>
