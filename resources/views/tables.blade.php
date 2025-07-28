@extends('app')
@section('content')

Move Page
<div class="tables">
    {{-- Table 1 --}}


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


    

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Uploaded At</th>
                <th>Move</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($getdetails1 as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->NameProduct }}</td>
                    <td>{{ $item->Price }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                    <form action="{{ route('moved', ['id' => $item->id]) }}" method="POST">
                        @csrf
                        <button type="submit">Move</button>
                    </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Table 2 (if different data source) --}}
    <table border="1" cellpadding="8" cellspacing="0" style="margin-left: 20px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Bought</th>
                <th>Date</th>
                <th>Back</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($getdetails2 as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nameNameProduct }}</td>
                    <td>{{ $item->Price }}</td>
                    <td>{{$item->bought}}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <form action="{{route('deletetwo', ['id'=> $item->id])}}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Back</button>
                        </form>
                    </td>
                       
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    div.tables {
        display: flex;
        gap: 20px;
        color: black;
    }
    table {
        border-collapse: collapse;
        min-width: 400px;
    }
    th, td {
        padding: 8px 12px;
        text-align: left;
    }

</style>

@endsection