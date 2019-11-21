@extends('layouts.backend.main')

@section('title', 'Admin | Articles Index')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Articles
        <small>Afficher tous les articles</small>
      </h1>
      <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Tableau de Bord</a>
        </li>
        <li><a href="{{route('backend.articles.index')}}">Articles</a></li>
        <li class="active">Tous les articles</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
            <div class="box-header clearfix">
                <div class="pull-left">
                    <a href="{{route('backend.articles.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Ajouter un nouvel article</a>
                </div>

                <div class="pull-right" style="padding:7px 0;">
                    <a href="?status=all">Tous |</a>
                    <a href="?status=trash">Corbeille</a>
                </div>

            </div>
              <!-- /.box-header -->
              <div class="box-body ">

              @include('backend.articles.message')

                @if(! $posts->count())
                    <div class="alert alert-danger">
                        <strong>Aucun enregistrement trouvé</strong>
                    </div>
                @else

                    @if($onlyTrashed)
                            @include('backend.articles.table-trash')
                        @else
                            @include('backend.articles.table')
                    @endif

                @endif
              </div>
              <!-- /.box-body -->
                <div class="box-footer clearfix">
                   <div class="pull-left">
                        {{$posts->render()}}
                    </div>

                    <div class="pull-right">

                        <small> {{ $postCount }} Items </small>
                    </div>

                </div>
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
