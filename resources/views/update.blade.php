@extends('app')
@section('content')

Update Page



<br><br><br>

<form method="POST" enctype="multipart/form-data" action="{{url('update/'.$productbyid->id)}}">
@csrf
<input type="text" name="NameProduct" id="NameProduct" required value="{{$productbyid->NameProduct}}"> <br>
<input type="number" name="Price" id="Price" required value="{{$productbyid->Price}}"> <br>

<button type="submit"> Submit</button>

</form>


@endsection