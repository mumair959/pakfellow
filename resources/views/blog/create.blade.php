@extends('layouts.web')

@section('content')

@include('web-components.page-title',['pageTitle' => 'Create Blog','pageSubTitle' => 'Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need'])

@include('web-components.blog-form')

@endsection
