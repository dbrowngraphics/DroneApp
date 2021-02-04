<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Drone App</title>

        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       </head>
    <body>
    	<div>
    		<a href="{{ url('pilots') }}" class="btn">Pilots</a>
    		<a href="{{ url('drones') }}" class="btn">Drones</a>
    		<a href="{{ url('missions') }}" class="btn">Missions</a>
    	</div>


    	@yield('content')

    </body>

</html>