@extends('layout')
@section('content')
<h1>Add danh muc</h1>
<form action="{{route('danhmuc')}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label>Danh muc</label>
      <input type="text" class="form-control" placeholder="Enter danh muc" name="tendanhmuc">
      <input type="submit" value="Add">
    </div>
 </form>
@stop