@extends('customattributes::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('customattributes.name') !!}</p>
@endsection
