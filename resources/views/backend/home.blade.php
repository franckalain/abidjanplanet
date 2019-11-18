@extends('layouts.backend.main')

@section('title', 'Admin | Tableau de Bord')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Tableau de Bord
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Tableau de Bord</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body ">
                    <p class="lead text-muted">Bonjour {{Auth::user()->name}}</p>
                    <h3>Bienvenue sur l'interface de gestion des articles!</h3>


                     <!-- <h4>Commencer ici !</h4>-->
                    <p><a href="{{route('backend.articles.create')}}" class="btn btn-primary">Rédiger votre premier article</a> </p>
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
