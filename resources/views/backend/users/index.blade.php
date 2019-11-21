@extends('layouts.backend.main')

@section('title', 'Admin | Utilisateurs')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categories
        <small>Afficher tous les Utilisateurs</small>
      </h1>
      <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Tableau de Bord</a>
        </li>
        <li><a href="{{route('backend.users.index')}}">Utilisateurs</a></li>
        <li class="active">Toutes les Utilisateurs</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
            <div class="box-header clearfix">
                <div class="pull-left">
                    <a href="{{route('backend.users.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Ajouter un nouvel Utilisateur</a>
                </div>

                <div class="pull-right">

                </div>

            </div>
              <!-- /.box-header -->
              <div class="box-body ">

              @include('backend.partials.message')

                @if(! $users->count())
                    <div class="alert alert-danger">
                        <strong>Aucun enregistrement trouvé</strong>
                    </div>
                @else
                    @include('backend.users.table')
                @endif

              </div>
              <!-- /.box-body -->
                <div class="box-footer clearfix">
                   <div class="pull-left">
                        {{$users->appends(Request::query())->render()}}
                    </div>

                    <div class="pull-right">

                        <small> {{ $userCount }} Items </small>
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
