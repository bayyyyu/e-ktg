@include('backend.template.section.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('backend.template.section.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('backend.template.utils.notif')
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('backend.template.section.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{url('public')}}/assets-admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('public')}}/assets-admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('public')}}/assets-admin/dist/js/adminlte.min.js"></script>


<script src="{{url('public')}}/assets-admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/jszip/jszip.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

@stack('script')
<script>
  $(".table-datatable").DataTable();
</script>
    <!-- Custom js for this page -->
    <script src="{{url('public')}}/assets-admin/assets/js/dashboard.js"></script>
</body>
</html>
