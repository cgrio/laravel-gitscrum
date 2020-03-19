@section('title',  trans('gitscrum.team'))

@extends('layouts.master')

@section('breadcrumb')
<div class="col-lg-6">
    <h3>Gestão Usuários</h3>
</div>
<div class="col-lg-6 text-right"></div>
@endsection

@section('content')

<div id="user-list" class="tab-pane">
    <div class="panel-body">
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Provedor</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
                @each('partials.lists.admin.users-admin', $list, 'user', 'partials.lists.no-items')
            </tbody>
        </table>
    </div>
</div>
@endsection
