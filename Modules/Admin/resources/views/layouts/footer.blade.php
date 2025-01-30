

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
      <div class="mb-2 mb-md-0">

      </div>

    </div>
  </footer>
  <!-- / Footer -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>



      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>


      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->





    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('backend-assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('backend-assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>



    <!-- Main JS -->
    <script src="{{ asset('backend-assets/js/main.js') }}"></script>


    <!-- Page JS -->
    <script src="{{ asset('backend-assets/js/app-logistics-dashboard.js') }}"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    function configureDataTables(className) {
    var tables = document.getElementsByClassName(className);
    for (var i = 0; i < tables.length; i++) {
        new DataTable(tables[i]);
    }
    }
    configureDataTables('data-table');
</script>
  </body>

</html>

  <!-- beautify ignore:end -->

