<section class="full-page" id="codes">
    <div class="blog overlay-container">
        <div class="kayo-intro-section">
            <div class="overlay">
                <div class="section-intro">
                    <div class="text-center kayo-icon-box-container">
                        <div class="kayo-icon-box">
                            <span class="glyphicon glyphicon-console kayo-icon"></span>
                        </div>
                    </div>
                    <h1 class="text-center">
                        Codes
                    </h1>
                </div>
            </div>
        </div>
        <div class="port-box">
            <div class="kayo-container">
                <div class="mrkayo-main-title">
                    <h2>
                        Solutions
                        <span class="kayo-line"></span>
                    </h2>
                </div>
                <div class="posts">
                    <div class="row posts-grid">
                        @foreach($codes as $code)
                            <div class="col-lg-6 col-md-12 col-sm-6 post-grid-item">
                                <div>
                                    <article class="normal-post">
                                        <figure class="entry-header">
                                            <div class="post-image">
                                                <img src="{{ asset('home/images/dummy/programmer.gif') }}" class="img-responsive" alt="">
                                            </div>
                                        </figure>
                                        <div class="entry-content">
                                            <div class="entry-post-info">
                                                <h4><a href="#">{{ $code->name }}</a></h4>
                                                <p>Posted on {{ $code->updated_at }}</p>
                                            </div>
                                            <div class="entry-expert">
                                                <p>
                                                    {{ substr($code->problem, 0, 250) }}...
                                                </p>
                                                <div class="post-readMore">
                                                    <a href="#" class="pull-left read-more-link"  data-toggle="modal" data-target="#code-{{$code->id}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    <div class="modal fade" id="code-{{$code->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                            <div class="modal-content normal-post" style="background-color: #2c3e50;">
                                                                <div class="modal-header">
                                                                    <h2 class="modal-title" id="exampleModalScrollableTitle">{{ $code->name }}</h2>
                                                                    <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h4>Problem</h4>
                                                                    <p>{{ $code->problem }}</p>
                                                                    <pre>
                                                                        {{ $code->testcase }}
                                                                    </pre>
                                                                    <hr>

                                                                    <h4>Solution</h4>
                                                                    <pre><code>{{ $code->solution }}</code></pre>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
