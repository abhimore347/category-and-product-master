@extends('navbar')
@section('div1')
<h2 class='text-center'>Create New Product</h2>

@include("message")

<form action="{{url('product')}}" method='POST' enctype="multipart/form-data">
@csrf 

<div class="form-group">
    <label for="exampleInputEmail1">Product name</label>
    <input type="text" class="form-control" name="Product_name"  placeholder="Enter product name">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea type="text" class="form-control" name="Product_decsription"  placeholder="Enter product description"></textarea>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Select category</label>
    <select name="categoryid[]" id="" class="form-control" multiple>Select category
    @foreach($categories as $cat)
    <option value="{{$cat->id}}">{{$cat->category_name}}</option>
    @endforeach
    </select>
</div>
<div class="form-group">
    <label>Product Image</label>
    <input type="file" name="product_file[]" value="" accept="image/*" multiple=""/>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection 