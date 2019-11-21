@extends('layouts.backend.main')

@section('title', 'Admin | Confirmer la suppression')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Utilisateurs
        <small>Confirmer la suppression</small>
      </h1>
      <ol class="breadcrumb">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Tableau de bord</a>
        </li>
        <li><a href="{{route('backend.users.index')}}">Utilisateurs</a></li>
        <li class="active">Confirmer la suppression</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        {!! Form::model($user, [
                    'method' => 'DELETE',
                    'route' => ['users.destroy', $user->id],

                ]) !!}
                <div class="col-xs-9">
                    <div class="box">
                        <div class="box-body ">
                            <p>
                                Vous avez spécifié cet utilisateur pour suppression
                            </p>

                            <p>
                                ID #{{ $user->id }} : {{ $user->name }}
                            </p>

                            <p>
                                <input type="radio" name="delete_option" value="delete" checked> Supprimer tout le contenu
                            </p>

                            <p>
                                <input type="radio" name="delete_option" value="attribute"> Attribuer le contenu à cet utilisateur:
                                {!! Form::select('selected_user', $users, null) !!}
                            </p>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
                            <a href="{{ route('backend.users.index') }}" class="btn btn-default">Annuler</a>
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

