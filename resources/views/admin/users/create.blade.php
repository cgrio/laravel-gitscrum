@section('title',  trans('gitscrum.users'))

@extends('layouts.master')

@section('content')

    @include('partials.forms.user', ['route' => 'usuarios.store'])

@endsection
