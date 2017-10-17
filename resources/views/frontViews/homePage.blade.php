@extends('layout')

@section('content')
	@foreach($danhmuc as $dm)
		<h2>{{$dm->tendanhmuc}}</h2>
	@endforeach
	<h2>{{$list}}</h2>
@stop