  <!-- ========== COMMON JS FILES ========== -->
  <script src="assets/js/jquery/jquery-2.2.4.min.js"></script>
  <!-- <script src="assets/js/jquery/jquery-2.2.4.init.js"></script> -->
  <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>
  <script src="assets/js/pace/pace.min.js"></script>
  <script src="assets/js/lobipanel/lobipanel.min.js"></script>
  <script src="assets/js/iscroll/iscroll.js"></script>
  <script src="assets/js/DataTables/datatables.min.js"></script>
  <!-- ========== PAGE JS FILES ========== -->
  <script src="assets/js/prism/prism.js"></script>
  <script src="assets/js/waypoint/waypoints.min.js"></script>
  <script src="assets/js/counterUp/jquery.counterup.min.js"></script>
  <script src="assets/js/amcharts/amcharts.js"></script>
  <script src="assets/js/amcharts/serial.js"></script>
  <script src="assets/js/amcharts/plugins/export/export.min.js"></script>
  <link rel="stylesheet" href="assets/js/amcharts/plugins/export/export.css" type="text/css" media="all" />
  <script src="assets/js/amcharts/themes/light.js"></script>
  <!-- <script src="assets/js/toastr/toastr.min.js"></script> -->
  <script src="assets/js/icheck/icheck.min.js"></script>

  <!-- ========== THEME JS ========== -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/production-chart.js"></script>
  <script src="assets/js/traffic-chart.js"></script>
  <script src="assets/js/task-list.js"></script>
  <script>
      $(function($) {
          $('#example').DataTable();

          $('#example2').DataTable({
              "scrollY": "300px",
              "scrollCollapse": true,
              "paging": false
          });

          $('#example3').DataTable();
      });
  </script>
  <script>
      $(function() {

          // Counter for dashboard stats
          $('.counter').counterUp({
              delay: 10,
              time: 1000
          });

          // Welcome notification

      });
  </script>
  <script>
      $(function($) {
          $(".js-states").select2();
          $(".js-states-limit").select2({
              maximumSelectionLength: 2
          });
          $(".js-states-hide").select2({
              minimumResultsForSearch: Infinity
          });
      });
  </script>
  <script type="text/javascript">
      function googleTranslateElementInit() {
          new google.translate.TranslateElement({
              pageLanguage: 'en'
          }, 'google_translate_element');
      }
  </script>

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <style>
      .goog-logo-link {
          display: none !important;
      }

      .goog-te-gadget {
          color: transparent;
      }

      .goog-te-gadget .goog-te-combo {
          margin: 0px 0;
          padding: 8px;
          color: #000;
      }

      #google_translate_element {
          padding-top: 11px;
          color: #000;
          position: absolute;
          right: 20px;
      }
  </style>
  </body>

  </html>