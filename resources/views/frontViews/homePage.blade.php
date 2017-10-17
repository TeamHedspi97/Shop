@extends('layout')

@section('content')
	<ul class="menu">
		@foreach($danhmucs as $danhmuc)
  		<li><a href="/">{{$danhmuc->tendanhmuc}}</a>
			<ul>
				@foreach($danhmuc->listsanpham() as $sanpham)
					<li><a href="#">{{$sanpham->tensanpham}}</a></li>
				@endforeach	
			</ul>
  		</li>
		@endforeach	
	</ul>
@stop


