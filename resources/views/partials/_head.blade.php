
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Clinicjet') }} @yield('title')</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.6 -->
{{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Font Awesome -->
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> --}}
{{-- <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"> --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- <script src="https://use.fontawesome.com/a023e01194.js"></script> --}}
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.css')}}">
<!-- Theme style -->
{{-- <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  {{-- <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/skins/_all-skins.min.css">
 {{--  <link rel="stylesheet" href="{{asset('css/parsley.css')}}"> --}}
  {{-- <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  {{-- <link rel="stylesheet" href="{{asset('css/lightbox.min.css')}}"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/css/lightbox.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker3.min.css">

  {!! Charts::assets() !!}

  <style>


    input.parsley-success,
    select.parsley-success,
    textarea.parsley-success {
      color: #468847;
      background-color: #DFF0D8;
      border: 1px solid #D6E9C6;
    }

    input.parsley-error,
    select.parsley-error,
    textarea.parsley-error {
      color: #B94A48;
      background-color: #F2DEDE;
      border: 1px solid #EED3D7;
    }

    .parsley-errors-list {
      margin: 2px 0 3px;
      padding: 0;
      list-style-type: none;
      font-size: 0.9em;
      line-height: 0.9em;
      opacity: 0;

      transition: all .3s ease-in;
      -o-transition: all .3s ease-in;
      -moz-transition: all .3s ease-in;
      -webkit-transition: all .3s ease-in;
    }

    .parsley-errors-list.filled {
      opacity: 1;
    }


  </style>


  @yield('stylesheets')
  @yield('css')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Scripts -->
  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
      ]); ?>
    </script>
