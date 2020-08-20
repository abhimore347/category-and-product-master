@extends('navbar')
@section('div1')
<h2 class='text-center'>Update Category</h2>


<!-- {{$errors}} -->
<form action="{{url('Category/'.$category->id)}}" method='post'>
@csrf
@method("PUT")
<div class="form-group">
    <label for="exampleInputEmail1">Category name</label>
    <input type="text" class="form-control" name="Category_name" value='{{"$category->category_name"}}' placeholder="Enter Category">
    <p>{{$errors->first('Category_name')}}</p>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Category description</label>
    <input type="text" class="form-control" name="Category_description" value='{{"$category->category_description"}}'  placeholder="Enter description">
    <p>{{$errors->first('Category_description')}}</p>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection 