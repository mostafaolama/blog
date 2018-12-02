@extends('bootstrap')



@section('title')
   Products List
@endsection

<div>
    @section('content')
    @foreach ($phones as $product)
        <a href=" products/{{$product->id}}" >{{$product->name}}</a><br>

    @endforeach
</div>
@endsection()
