<div class="col-md-4">
                <aside class="right-sidebar">
                    <!--
                    <div class="search-widget">
                        <div class="input-group">
                          <input type="text" class="form-control input-lg" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-lg btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                          </span>
                        </div>-->
                    </div>

                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Categories</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="categories">

                            </ul>
                        </div>
                    </div>

                    <div class="widget">

                        <div class="widget">
                        <div class="widget-heading">
                            <h4>Related Posts</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="popular-posts">
                            @if(isset($relatedPosts))
                            @foreach($relatedPosts as $post)
                                <li>
                                    @if($post->image_thumb_url)
                                    <div class="post-image">
                                        <a href="{{route('show', $post->slug)}}">
                                            <img src="{{$post->image_thumb_url}}" />
                                        </a>
                                    </div>
                                    @endif
                                    <div class="post-body">
                                        <h6><a href="{{route('show', $post->slug)}}">{{$post->title}}</a></h6>
                                        <div class="post-meta">
                                            <span>{{$post->date}}</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            @endif
                            </ul>
                        </div>
                    </div>

                    <!--
                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Tags</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="tags">
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">Codeigniter</a></li>
                                <li><a href="#">Yii</a></li>
                                <li><a href="#">Laravel</a></li>
                                <li><a href="#">Ruby on Rails</a></li>
                                <li><a href="#">jQuery</a></li>
                                <li><a href="#">Vue Js</a></li>
                                <li><a href="#">React Js</a></li>
                            </ul>
                        </div>
                    </div>
                    -->
                </aside>
            </div>
