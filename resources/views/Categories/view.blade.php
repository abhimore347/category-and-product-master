@extends('navbar')
@section('div1')
<h1>View Catergories</h1>
@include("message")

<table class="table table-bordered">
<thead><tr>
<th>Sr.No</th>
<th>Name</th>
<th>Description</th>
<th>Edit</th>
<th>Delete</th>
</tr></thead>
@foreach($category as $key=>$category)
<tbody><tr>
<td>{{$key+1}}</td>
<td>{{$category->category_name}}</td>
<td>{{$category->category_description}}</td>
<td class="text-center"><a href="{{url('Category/'.$category->id.'/edit ')}}" class="btn btn-info">Edit</a></td>
<td class="text-center"><form action="{{url('Category/'.$category->id)}}" method="POST">
     @method('DELETE')
     @csrf
<input type="submit" class="btn btn-danger" value="Delete">
</form></td>
</tr></tbody>
@endforeach
</table>

@endsection 