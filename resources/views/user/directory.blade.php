@extends('layouts.web')

@section('content')

@include('web-components.page-title',['pageTitle' => 'Member Directory','pageSubTitle' => 'We take care of our members privacy and we do not share the details of our fellows with our partners or any third parties.'])

@include('web-components.directory-section')

@endsection