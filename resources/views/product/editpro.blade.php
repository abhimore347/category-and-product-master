@extends('navbar')
@section('div1')
<h2 class='text-center'>Edit products</h2>
@include("message")

<form action="{{url('product/'.$product->id)}}" method='POST' enctype="multipart/form-data">
@csrf
@method('PUT')

<div class="form-group">
    <label for="exampleInputEmail1">Product name</label>
    <input type="text" class="form-control" name="Product_name" value ="{{$product->product_name}}" placeholder="Enter title">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea type="text" class="form-control" name="Product_decsription"  placeholder="Enter description">{{$product->product_description}}</textarea>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Select category</label>
    <select name="category_ids[]" id="" class="form-control" multiple>
    @foreach($categories as $cat)
    <option value="{{$cat->id}}"{{ (in_array($cat->id,$product_categories)? 'selected' :'' ) }}>{{$cat->category_name}}</option>
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