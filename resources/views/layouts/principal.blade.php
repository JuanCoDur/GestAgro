<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GestAgro</title>
       <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
       @stack('scripts') 
       <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
       <!--lo que tengo en principal css-->
       <link rel="stylesheet" href="{{asset('css/menu.css')}}">
       <script src="{{asset('js/menu.js')}}"></script>
      <!--bootstrap-select-->
       <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
       <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
 <!-- Latest compiled and minified CSS 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">-->
<!-- Latest compiled and minified JavaScript 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>-->
	</head>
	<body>
		
		@extends('layouts.navbar')
    
    </body>
</html>
