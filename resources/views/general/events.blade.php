@extends('layouts.web')

@section('content')

@include('web-components.page-title',['pageTitle' => 'Events and Meetups','pageSubTitle' => 'Explore all our upcoming community events and meetups in more than 30 countries around the world.'])

@include('web-components.event-section')

@endsection
