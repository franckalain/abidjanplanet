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
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{($post->image_thumb_url) ? $post->image_thumb_url :  'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image'}}" /></div>                    <div>
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
