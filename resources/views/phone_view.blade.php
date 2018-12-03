@extends('bootstrap')

@section('content')
<div>
    <h1>
        {{$phone->name}}
    </h1>
    <p>
        {{$phone->description}}
    </p>

    <p>
        Brand: {{$phone->brand}}
    </p>
    <p>
       Price: {{$phone->price}}$
    </p>

</div>

@endsection
