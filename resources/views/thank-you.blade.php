@extends('layouts.master')
@section('content')

<div class="coral-flat" style="height:100%">
  <!---->
  @include('includes.header')
  <section class="section">
    <div class="container mb40">
      <div class="col-12 text-center">
        <h1 class="heading-lrg primary-color launchaco-builder-hoverable">Nice!</h1>

        <h2 class="subheading secondary-color mt20 launchaco-builder-hoverable">
          You've successfully connected your Spotify account.
        </h2>
        <img src="images/party-popper.png" style="padding-top:40px;" height="300"/>
      </div>
    </div>
  </section>
</div>

@endsection