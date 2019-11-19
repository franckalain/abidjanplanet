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
          <div class="col-xs-9">
            <div class="box">

              <!-- /.box-header -->
              <div class="box-body ">
                <div class="form-group" {{ $errors->has('title') ? 'has-error' : '' }}>
                    {!! Form::label('title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}

                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif

                </div>

                <div class="form-group" {{ $errors->has('slug') ? 'has-error' : '' }}>
                    {!! Form::label('slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control']) !!}

                    @if($errors->has('slug'))
                        <span class="help-block">{{ $errors->first('slug') }}</span>
                    @endif

                </div>

                <div class="form-group excerpt">
                    {!! Form::label('excerpt') !!}
                    {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group" {{ $errors->has('body') ? 'has-error' : '' }}>
                    {!! Form::label('body') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                    @if($errors->has('body'))
                        <span class="help-block">{{ $errors->first('body') }}</span>
                    @endif

                </div>

                <hr>


              </div>
              <!-- /.box-body -->

            </div>
            <!-- /.box -->
          </div>
          <div class="col-xs-3">
                <div class="box">
                    <div class="box-header width-border">
                        <h3 class="box-title">Publication</h3>
                    </div>
                    <div class="box-body">
                    <div class="form-group" {{ $errors->has('published_at') ? 'has-error' : '' }}>
                    {!! Form::label('published_at', 'Publish Date') !!}
                    <div class='input-group date' id='datetimepicker1'>
                    {!! Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d H:i:s']) !!}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>


                    @if($errors->has('published_at'))
                        <span class="help-block">{{ $errors->first('published_at') }}</span>
                    @endif

                </div>
                    </div>
                    <div class="box-footer clearfix">
                        <div class="pull-left">
                            <a id="draft-btn" class="btn btn-default">Enregistrer brouillon</a>
                        </div>
                        <div class="pull-right">
                        {!! Form::submit('Publier', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Categories</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group" {{ $errors->has('category_id') ? 'has-error' : '' }}>
                        {!! Form::select('category_id', App\Category::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}

                        @if($errors->has('category_id'))
                            <span class="help-block">{{ $errors->first('category_id') }}</span>
                        @endif
                </div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Feature Image</h3>
                    </div>
                    <div class="box-body text-center">
                        <div class="form-group" {{ $errors->has('image') ? 'has-error' : '' }}>
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>                    <div>
                        {!! Form::file('image') !!}
                        </div>
                        </div>
                        @if($errors->has('image'))
                            <span class="help-block">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                    </div>
                </div>
          </div>
          {!! Form::close() !!}
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');

        $('#title').on('blur', function(){
            var theTitle = this.value.toLowerCase().trim(),
                slugInput = $('#slug');
                theSlug = theTitle.replace(/&/g, '-and-')
                                  .replace(/[^a-z0-9-]+/g, '-')
                                  .replace(/\-\-+/g, '-')
                                  .replace(/^-+|-+$/g, '');

                slugInput.val(theSlug);
        });

        var simplemde1 = new SimpleMDE({ element: $("#excerpt")[0] });
        var simplemde2 = new SimpleMDE({ element: $("#body")[0] });

        $('#draft-btn').click(function(e){
            e.preventDefault();
            $('#published_at').val("");
            $('#post-form).submit();
        });

        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            showClear: true
        });


    </script>
@endsection
