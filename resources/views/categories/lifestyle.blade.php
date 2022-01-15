@extends('layouts.site')

@section('content')
<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-leaf bg-aqua"></i> Lifestyle <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active">Lifestyle</li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-custom-build">
                        @foreach ($posts as $post)
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="/posts/{{$post->slug}}" title="">
                                    <img src="/admin/images/posts/{{$post->image}}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div>
                                    <!-- end hover -->
                                </a>
                            </div>
                            <!-- end media -->
                            <div class="blog-meta big-meta text-center">

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="https://telegram.me/share/url?url=http://jorenvanhocht.be&text=abduhalimsdjalkdjsaklj" class="tw-button btn btn-primary"><i class="fa fa-telegram"></i><span class="down-mobile">Share on Telegram</span></a></li>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://jorenvanhocht.be" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="https://twitter.com/intent/tweet?text=share-words&amp;url=http://jorenvanhocht.be" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                                <h4><a href="/posts/{{$post->slug}}" title="">{{$post->title}}</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="/lifestyle" title="">Lifestyle</a></small>
                                <small><a href="single.html" title="">{{$post->created_at->format('d M, Y')}}</a></small>
                                <small><a href="blog-author.html" title="">by Amanda</a></small>
                                <small><a href="blog-author.html" title=""><i class="fa fa-eye"></i> {{$post->view}}</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        @endforeach


                    </div><!-- end blog-custom-build -->
                </div><!-- end page-wrapper -->

                <hr class="invis">

                {{-- <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end col -->
                </div><!-- end row --> --}}
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
               @include('sections.sidebar')
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@endsection


