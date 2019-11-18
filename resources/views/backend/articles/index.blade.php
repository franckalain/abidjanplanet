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
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body ">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td width="80">Action</td>
                            <td>Titre</td>
                            <td width="120">Auteur</td>
                            <td width="150">Categorie</td>
                            <td width="170">Date</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>
                            <a href="{{route('backend.articles.edit', $post->id)}}" class="btn btn-xs btn-default">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('backend.articles.destroy', $post->id)}}" class="btn btn-xs btn-danger">
                                <i class="fa fa-times"></i>
                            </a>
                            </td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->author->name}}</td>
                            <td>{{$post->category ? $post->category->title : ''}}</td>
                            <td>
                                <abbr title="{{$post->dateFormatted(true)}}">{{$post->dateFormatted()}}</abbr> |
                                {!!$post->publicationLabel()!!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
              </div>
              <!-- /.box-body -->
                <div class="box-footer clearfix">
                   <div class="pull-left">
                        {{$posts->render()}}
                    </div>

                    <div class="pull-right">
                    <?php $postCount = $posts->count() ?>
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
