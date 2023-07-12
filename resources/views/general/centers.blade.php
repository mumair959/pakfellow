@extends('layouts.web')

@section('content')

@include('web-components.page-title',['pageTitle' => 'Pak Community Centers','pageSubTitle' => 'We are expanding our community network by starting up new international chapters to organise regular cultural shows, national events and community meetups. Please feel free to contact us and apply for local cultural shows and community meetups in your country of residence.'])

@include('web-components.centers-section')

@endsection