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
            <div class="box-header">
                <div class="pull-left">
                    <a href="{{route('backend.articles.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Ajouter un nouvel article</a>
                </div>
            </div>
              <!-- /.box-header -->
              <div class="box-body ">
              @if(session('message'))
                <div class="alert alert-info">
                    {{session('message')}}
                </div>
              @endif


                @if(! $posts->count())
                    <div class="alert alert-danger">
                        <strong>Aucun enregistrement trouvé</strong>
                    </div>
                @else
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
