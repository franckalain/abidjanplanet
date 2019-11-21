@extends('layouts.backend.main')

@section('title', 'Admin | Ajouter un nouvel utilisateur')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Articles
        <small>Ajouter un utilisateur</small>
      </h1>
      <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Tableau de bord</a>
        </li>
        <li><a href="{{route('backend.users.index')}}">Utilisateurs</a></li>
        <li class="active">Ajouter un utilisateur</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        {!! Form::model($user, [
                    'method' => 'POST',
                    'route' => 'users.store',
                    'files' => TRUE,
                    'id' => 'user-form'
                ]) !!}
          @include('backend.users.form')
          {!! Form::close() !!}
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

