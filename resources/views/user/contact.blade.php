@extends('layouts.web')

@section('content')

@include('web-components.page-title',['pageTitle' => 'Contact Us','pageSubTitle' => 'Feel free to contact us for any kind of community support, to start a new chapter or to organise a local community event or meetup.'])

@include('web-components.contact-us-section')

@endsection

<script src="{{asset('assets/js/scrolldown.js')}}"></script>
