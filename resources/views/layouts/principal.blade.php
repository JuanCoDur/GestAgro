<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GestAgro</title>
       <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
       <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
       <!--lo que tengo en principal css-->
       <link rel="stylesheet" href="{{asset('css/menu.css')}}">
       <script src="{{asset('js/menu.js')}}"></script>

	</head>
	<body>
		
		@extends('layouts.navbar')
    
    </body>
</html>
