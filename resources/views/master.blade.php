@extends('base')



<div class="wrapper">
	@include('layout.header')
	@include('layout.sidebar')


	<div class="content-wrapper">
	@section('dashboard.content')
	@yield('from.content')
	</div>


	@include('layout.footer')
</div>
@stop
