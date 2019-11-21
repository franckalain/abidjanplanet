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
            {!! Form::open(['style' => 'display:inline-block' ,'method' => 'PUT', 'route' => ['backend.articles.restore', $post->id]]) !!}
            <button title="Restaurer" class="btn btn-xs btn-default">
                <i class="fa fa-refresh"></i>
            </button>
            {!! Form::close() !!}
            {!! Form::open(['style' => 'display:inline-block', 'method' => 'DELETE', 'route' => ['backend.articles.force-destroy', $post->id]]) !!}

            <button title="Supprimer definitivement" onclick="return confirm('Voulez-vous supprimer définitivement votre article ?')" type="submit" class="btn btn-xs btn-danger">
                <i class="fa fa-times"></i>
            </button>
            {!! Form::close() !!}
            </td>
            <td>{{$post->title}}</td>
            <td>{{$post->author->name}}</td>
            <td>{{$post->category ? $post->category->title : ''}}</td>
            <td>
                <abbr title="{{$post->dateFormatted(true)}}">{{$post->dateFormatted()}}</abbr>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
