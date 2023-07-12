@extends('layouts.web')

@section('content')

@include('web-components.page-title',['pageTitle' => 'Event Details','pageSubTitle' => 'Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need'])

@include('web-components.single-event-section')

@endsection
