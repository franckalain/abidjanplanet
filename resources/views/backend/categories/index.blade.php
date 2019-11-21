@extends('layouts.backend.main')

@section('title', 'Admin | Categories')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categories
        <small>Afficher tous les categories</small>
      </h1>
      <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Tableau de Bord</a>
        </li>
        <li><a href="{{route('backend.categories.index')}}">Categories</a></li>
        <li class="active">Toutes les categories</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
            <div class="box-header clearfix">
                <div class="pull-left">
                    <a href="{{route('backend.categories.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Ajouter une nouvelle catégorie</a>
                </div>

                <div class="pull-right">

                </div>

            </div>
              <!-- /.box-header -->
              <div class="box-body ">

              @include('backend.partials.message')

                @if(! $categories->count())
                    <div class="alert alert-danger">
                        <strong>Aucun enregistrement trouvé</strong>
                    </div>
                @else
                    @include('backend.categories.table')
                @endif

              </div>
              <!-- /.box-body -->
                <div class="box-footer clearfix">
                   <div class="pull-left">
                        {{$categories->appends(Request::query())->render()}}
                    </div>

                    <div class="pull-right">

                        <small> {{ $categoriesCount }} Items </small>
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
