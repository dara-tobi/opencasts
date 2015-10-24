@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('body')
<div class="wrapper">

    <div class="content">
        <div id="body">
  <div class="text-center video-categories">
 @foreach($categories as $category)
 <a href="/categories/{{ $category->category }}"> {{ $category->category }} </a>
@endforeach
</div>
@endsection

@section('footer')
@include('includes.footer')
@endsection
