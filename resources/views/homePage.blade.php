@extends('layout')

@section('content')
	@foreach($danhmucs as $danhmuc)
		<a href='/list/{{$danhmuc->tendanhmuc}}'>{{$danhmuc->tendanhmuc}}</a>
	@endforeach
@stop