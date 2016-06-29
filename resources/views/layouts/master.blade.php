<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0-rc.2/themes/smoothness/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.min.js"></script>

<!--
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css.map">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css.map">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script>-->

        <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
        <script type="text/javascript" src="{{ URL::to('src/js/dashboard.js') }}"></script>

        <link rel="stylesheet" href="{{ URL::to('src/css/jquery.dropdown.css') }}">
        <script type="text/javascript" src="{{ URL::to('src/js/jquery.dropdown.js') }}"></script>
    </head>
    <body>
    	@include('includes.header')
        <div class="container">
        	@yield('content')
        </div>
    </body>
</html>
