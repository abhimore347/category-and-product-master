@extends('navbar')
@section('div1')
<h1>View Products</h1>
@include("message")

<table class="table table-bordered">
<thead><tr>
<th>Sr.No</th>
<th>product Name</th>
<th>product Description</th>
<th>Categories name</th>
<th>file</th>
<th>Edit</th>
<th>Delete</th>
</tr></thead>
<tbody>
@foreach($product as $key=>$pro)
<tr>
<td>{{$key+1}}</td>
<td>{{$pro->product_name}}</td>
<td>{{$pro->product_description}}</td>
<td>{{$pro->category->pluck("category_name")->implode(", ")}}</td>
<td>@foreach(explode(', ', $pro->file_name) as $image)
     <img src="{{asset('uploads/'.$image)}}" height="100px" width="100px"/>
    @endforeach   
</td>
<td class="text-center"><a href="{{url('product/'.$pro->id.'/edit ')}}" class="btn btn-info">Edit</a></td>
<td class="text-center"><form action="{{url('product/'.$pro->id)}}" method="POST">
     @method('DELETE')
     @csrf
<input type="submit" class="btn btn-danger" value="Delete">
</form></td>
</tr>
@endforeach
</tbody>

</table>
<span class="text-center">{{$product->links()}}</span>




@endsection 
