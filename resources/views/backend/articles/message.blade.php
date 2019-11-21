@if(session('message'))

    <div class="alert alert-info">
        {{session('message')}}
    </div>

@elseif(session('trash-message'))

    <div class="alert alert-info">
       <?php list($message, $postId) = session('trash-message') ?>
       {!! Form::open(['method' => 'PUT', 'route' => ['backend.articles.restore', $postId]]) !!}
       {{ $message }}
        <button type="submit" class="btn btn-sm btn-warning"><i class="fa fa-undo"></i> Restaurer</a>
       {!! Form::close() !!}
    </div>

@endif
