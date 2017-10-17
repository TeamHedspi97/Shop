@extends('layout')
@section('content')
<h1>Form page</h1>
<form action="{{route('sanpham')}}" method="post">
    {{csrf_field()}}
    <select name="danhmuc" id=""> 
    @for ($i = 0; $i < count($danhmuc); $i++)
          <option value="{{$danhmuc[$i]->id_danhmuc}}">{{$danhmuc[$i]->tendanhmuc}}</option>
    @endfor
    </select>
    <div class="form-group">
      <label>San pham:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="tensanpham">
    </div>
    <div class="form-group">
      <label>So luong:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter number" name="soluong">
    </div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
  <form action="/addDanhmuc">
      <input type="submit" value="Add danh muc" />
  </form>
  @if($check == "true")
    <h1>Ban vua them : </h1>
    <h2>Name: {{$sanpham->tensanpham}}</h2>
    <h2>So luong: {{$sanpham->soluong}}</h2>
  @endif
@stop