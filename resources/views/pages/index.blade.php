@extends('layouts.app')

@section('title', 'Page Title')


{{-- remove @parent directive to prevent parent nav's displaying --}}
@section('side-nav')
@parent
@endsection

@section('content')



@endsection
