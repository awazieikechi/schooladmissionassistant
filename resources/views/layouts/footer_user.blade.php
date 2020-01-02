<!-- footer -->

<footer class="footer text-center">
       All Rights Reserved by Michelle $ Anthony Consulting Limited .
</footer>
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
   
    
    <div class="chat-windows"></div>
<!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
     <script src="{{ asset('assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/taskboard/js/jquery-ui.min.js') }}"></script>
   
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src=" {{ asset ('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
     
    
    
    <!-- apps -->
    <script src="{{ asset ('js/app.min.js') }}"></script>
    <!-- fixed sidebar and header -->
    <script>
   $(function() {
        "use strict";
        $("#main-wrapper").AdminSettings({
            Theme: false, // this can be true or false ( true means dark and false means light ),
            Layout: 'vertical',
            LogoBg: 'skin5', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6 
            NavbarBg: 'skin6', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
            SidebarType: 'full', // You can change it full / mini-sidebar / iconbar / overlay
            SidebarColor: 'skin5', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
            SidebarPosition: true, // it can be true / false ( true means Fixed and false means absolute )
            HeaderPosition: true, // it can be true / false ( true means Fixed and false means absolute )
            BoxedLayout: false, // it can be true / false ( true means Boxed and false means Fluid ) 
        });
    });
    </script>
    
    
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset ('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset ('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset ('js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset ('js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset ('js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    
    <!--c3 charts -->
    
    <!--chartjs -->
    
    
     <!--Datatables -->
    <script src="{{ asset ('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset ('assets/extra-libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="{{ asset ('js/pages/datatable/datatable-advanced.init.js') }}"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    
    <!--Map -->
     <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <script src="{{ asset ('js/routingmap.js') }}"></script>
    
    <!--Calender -->
    <script src="{{ asset ('assets/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset ('js/pages/calendar/cal-init.js') }}"></script>
    
    
</body>

</html>