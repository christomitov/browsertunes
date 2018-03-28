@extends('layouts.master')
@section('content')
@include('includes.header')
@include('includes.hero')
@include('includes.seller')
{{--  @include('includes.features')  --}}
@include('includes.cta')
{{--  @include('includes.pricing')  --}}

{{--  @include('includes.faq')  --}}

@include('includes.footer')

@endsection