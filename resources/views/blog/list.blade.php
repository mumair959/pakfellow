@extends('layouts.web')

@section('content')

@include('web-components.page-title',['pageTitle' => 'Pak Fellows Blog','pageSubTitle' => 'Pakfellow.com brings you a user friendly community blog to share and exchange your views and experiences as an overseas Pakistani.'])

@include('web-components.blog-list')

@endsection
