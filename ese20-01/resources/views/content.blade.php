@extends('layouts.struct')

@section('content')
    @foreach ($new_travel as $travel)
        <p>{{$travel->city}}</p>
    @endforeach
@endsection