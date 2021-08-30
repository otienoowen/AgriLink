<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'AgriLink') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/script.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js">
    </script>
     
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

<script type="text/javascript">
    <!--
    function confirmation(){
    var answer = confirm('Are you sure you want to delete?');
    if(answer){
    form1.submit();
    }
    else{
    alert("Cancelled the delete!")
    }
    }
    //-->
    </script>

<link href="{{ asset('images/favicon.ico')}}" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="{{ asset('js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="{{ asset('js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="{{ asset('fonts/fontawesome/css/all.min.css')}}" type="text/css" rel="stylesheet">

<!-- plugin: fancybox  -->
<script src="{{ asset('plugins/fancybox/fancybox.min.js')}}" type="text/javascript"></script>
<link href="{{ asset('plugins/fancybox/fancybox.min.css')}}" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="{{ asset('css/ui.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript --
<script src="{{ asset('js2/script.js') }}" defer></script> -->

<script type="text/javascript">


/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>

</head>
<body>
    <div id="app">
        @include('inc.navbar')

        <main class="py-4">
            @yield('content')
            @include('inc.messages')
        </main>
    </div>

</body>
</html>
