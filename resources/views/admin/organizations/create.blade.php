@section('title',  trans('gitscrum.organizations'))

@extends('layouts.master')

@section('content')

    @include('partials.forms.organization', ['route' => 'organizations.store'])

@endsection
