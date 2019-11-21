@extends('layouts.backend.main')

@section('title', 'Admin | Ajouter nouvelle catégorie')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Articles
        <small>Ajouter nouvelle catégorie</small>
      </h1>
      <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Tableau de bord</a>
        </li>
        <li><a href="{{route('backend.categories.index')}}">Catégories</a></li>
        <li class="active">Ajouter une catégorie article</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        {!! Form::model($category, [
                    'method' => 'POST',
                    'route' => 'categories.store',
                    'files' => TRUE,
                    'id' => 'category-form'
                ]) !!}
          @include('backend.categories.form')
          {!! Form::close() !!}
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@include('backend.categories.script')
