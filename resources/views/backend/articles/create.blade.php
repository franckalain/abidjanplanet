@extends('layouts.backend.main')

@section('title', 'Admin | Ajouter nouvel article')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Articles
        <small>Ajouter nouvel article</small>
      </h1>
      <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Tableau de bord</a>
        </li>
        <li><a href="{{route('backend.articles.index')}}">Articles</a></li>
        <li class="active">Ajouter nouvel article</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        {!! Form::model($post, [
                    'method' => 'POST',
                    'route' => 'articles.store',
                    'files' => TRUE,
                    'id' => 'post-form'
                ]) !!}
          @include('backend.articles.form')
          {!! Form::close() !!}
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@include('backend.articles.script')


@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@stop
