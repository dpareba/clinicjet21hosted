<!-- jQuery 2.2.3 -->
{{-- <script src="{{asset('js/jquery-2.2.3.min.js')}}"></script> --}}
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<!-- Bootstrap 3.3.6 -->
{{-- <script src="{{asset('js/bootstrap.min.js')}}"></script> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<!-- DataTables -->
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('js/jquery.inputmask.js')}}"></script>
<script src="{{asset('js/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('js/jquery.inputmask.extensions.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('js/fastclick.js')}}"></script>
<!-- AdminLTE App -->
{{-- <script src="{{asset('js/app.min.js')}}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('js/demo.js')}}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/js/demo.js"></script>
{{-- Parsley js --}}
{{-- <script src="{{asset('js/parsley.min.js')}}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.7.0/parsley.min.js"></script>

{{-- Sweetalert --}}
{{-- <script src="{{asset('js/sweetalert.min.js')}}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
{{-- Clipboard js --}}
<script src="{{asset('js/clipboard.min.js')}}"></script>
{{-- <script src="{{asset('js/lightbox.min.js')}}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox.min.js"></script>
{{-- <script src="{{asset('js/moment.js')}}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/js/bootstrap-datepicker.min.js"></script>


@yield('scripts')
@yield('js')
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
  </script>
  @if (Session::has('message'))
        <script>
            swal({
                    title:"{{Session::get('message')}}",
                    text:"{{Session::get('text')}}",
                    type:"{{Session::get('type')}}",
                    timer:"{{Session::get('timer')}}"
                });
        </script>
    @endif