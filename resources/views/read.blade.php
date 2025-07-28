@extends('app')
@section('content')

<p>Read Page</p>


@if(session('success'))
<h2>{{session('success')}}</h2>
@endif

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif


<form method="POST" action="{{route('add')}}"  enctype="multipart/form-data" >
    @csrf
    <input type="text" name="NameProduct" id="NameProduct"  value="{{old('NameProduct')}}" placeholder="NameProduct" required> <br>
    <input type="number" name="Price" id="Price" value="{{old('Price')}}" placeholder="Price" required  ><br>
     <button type="submit"> Submit </button>
    </form>

<br>
<br>
<br>
<br>


<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Uploaded At</th>
            <th> Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->NameProduct }}</td>
                <td>{{ $product->Price }}</td>
                <td>{{ $product->created_at }}</td>
                <td>  <a href="{{url('/edit/'.$product->id)}}">Update</a></td>

                <td> <form action="{{url('delete/'.$product->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                    @csrf
                    @method('DELETE')
                <button type="submit">    Delete </button>
                
                </form></td>
            
            
            
            </tr>
        @endforeach
    </tbody>
</table>






@endsection