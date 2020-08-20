@extends('navbar')
@section('div1')
<h2 class='text-center'>Create New Category</h2>

@include("message")
<!-- {{$errors}} -->
<form action="{{url('Category')}}" method='post'>
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Category name</label>
    <input type="text" class="form-control" name="Category_name" value='{{old("Category_name")}}' placeholder="Enter Category">
    <p>{{$errors->first('Category_name')}}</p>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Category description</label>
    <input type="text" class="form-control" name="Category_description" value='{{old("Category_description")}}'  placeholder="Enter description">
    <p>{{$errors->first('Category_description')}}</p>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection 