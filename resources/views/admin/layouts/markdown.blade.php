@extends('layouts.nk-docs')
@section('title', 'Courses Example')

@section('content')
<?php  $text = file_get_contents($filename); ?> @parsedown($text)
@endsection
