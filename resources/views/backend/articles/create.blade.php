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
            <a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
        </li>
        <li><a href="{{route('backend.articles.index')}}">Articles</a></li>
        <li class="active">Ajouter nouvel article</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">

              <!-- /.box-header -->
              <div class="box-body ">
                {!! Form::model($post, [
                    'method' => 'POST',
                    'route' => 'articles.store'
                ]) !!}

                <div class="form-group">
                    {!! Form::label('title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('excerpt') !!}
                    {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('body') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('published_at', 'Publish Date') !!}
                    {!! Form::text('published_at', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('category_id', 'Category') !!}
                    {!! Form::select('category_id', App\Category::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}
                </div>

                <hr>
                {!! Form::submit('Creer nouvel article', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
              </div>
              <!-- /.box-body -->

            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection
