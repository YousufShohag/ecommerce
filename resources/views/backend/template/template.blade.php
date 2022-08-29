
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend/includes/head')
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    @include('backend/includes/leftpanel')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('backend/includes/toppanel')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    @include('backend/includes/rightpanel')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      @yield('content')
     
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @include('backend/includes/footer')


    @include('backend/includes/script')
  </body>
</html>
