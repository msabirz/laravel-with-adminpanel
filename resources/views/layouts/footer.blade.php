</div>
</div>
</div>
</div>
</div>
</section>
<!-- Jquery Core Js -->
<script src="{{url('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap Core Js -->
<!-- <script src="{{url('assets/plugins/bootstrap/js/bootstrap.js')}}"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Select Plugin Js -->
<script src="{{url('assets/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
<!-- Slimscroll Plugin Js -->
<script src="{{url('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- Bootstrap Notify Plugin Js -->
<script src="{{url('assets/plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>
<!-- Waves Effect Plugin Js -->
<script src="{{url('assets/plugins/node-waves/waves.js')}}"></script>
<!-- Jquery DataTable Plugin Js -->
<!-- <script src="{{url('assets/plugins/jquery-datatable/jquery.dataTables.js')}}"></script> -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script src="{{url('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<!-- <script src="{{url('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>  -->

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ url('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

<script src="{{ url('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{ url('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{ url('assets/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <!-- <script src="{{ url('assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.62/pdfmake.min.js" integrity="sha256-wHsYlzQ9EnjIdWOKOlQcOIw4imM+CDwRJ6NhkvJ96iY=" crossorigin="anonymous"></script>
    <!-- <script src="{{ url('assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.62/vfs_fonts.js" integrity="sha256-UsYCHdwExTu9cZB+QgcOkNzUCTweXr5cNfRlAAtIlPY=" crossorigin="anonymous"></script>
    <script src="{{ url('assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{ url('assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
    <script src="{{url('assets/js/pages/tables/jquery-datatable.js')}}"></script>
<!-- Custom Js -->
<script src="{{url('assets/js/admin.js')}}"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="{{url('assets/plugins/jquery-steps/jquery.steps.js')}}"></script>
<script src="{{url('assets/js/pages/forms/form-wizard.js')}}"></script>




<!-- Sweet alert Js-->
<!--<script src="{{url('assets/js/pages/ui/dialogs.js')}}"></script>
<script src="{{url('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>-->


<!-- Demo Js -->
<script src="{{url('assets/js/demo.js')}}"></script>
<script type="application/javascript">
      setTimeout(function(){ 
          document.getElementById("show_success_msg").style.display='none'; 
          @php 
            Session::forget('new_user_message');
          @endphp
        }, 5000);
    
</script>

@yield('extra-script')

</body>
</html>
