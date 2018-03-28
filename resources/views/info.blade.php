@extends('layouts.master')
@section('content')
@include('includes.header')

<section id="info" class="section coral-white">
  <div class="col-12 container mb40">
    <h1>What is this?</h1>
    <p class="subheading secondary-color mt20 launchaco-builder-hoverable">
      BrowserTunes is developed and maintained by just me, Christo Mitov. I enjoy listening to music while I code but having to context switch
      became an issue. So I created BrowserTunes as a way to listen to whatever I wanted on the internet without leaving the tab that I was in.
    </p>
  </div>
</section>


@include('includes.footer')
@endsection