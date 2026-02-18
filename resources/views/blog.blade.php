@extends('components.master-layout')
@section('meta-tags')
    <meta name="description" content=" Explore the blog for expert advice on brick pointing, wall repair, chimney restoration, and more. Stay informed with our latest updates and how-to guides.
    ">
    <title> Brick Repair Tips, Guides & Restoration Insights
    </title>
@endsection
@section('content')
    <!-- begin:main-title -->
    <div class="main-title block-section padd-40-top padd-60-btm bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="main-title-primary">Blogs</h1>
                </div><!-- .col-## -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .main-title -->
    <!-- end:main-title -->

    <!-- begin:breadcrumb -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Blogs</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="site-main">
        <div class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="entry-content">
                            @foreach ($blogs as $blog)
                                <article class="blog-entry">
                                    <a class="blog-entry-thumbnail">
                                        {{-- <img src="{{ Storage::disk('s3')->url($blog->image) }}"
                                            alt="{{ trim($blog->image_alt) }}" title="{{ trim($blog->image_title) }}"
                                            class="img-responsive" /> --}}


                                        <img src="/{{ ltrim($blog->image, '/') }}" alt="{{ trim($blog->image_alt) }}"
                                            title="{{ trim($blog->image_title) }}" class="img-responsive"  />
                                    </a>
                                    <div class="blog-entry-header">
                                        <small class="text-muted">{{ date('M d, Y', strtotime($blog->created_at)) }}</small>
                                        <h2 class=""><a
                                                href="{{ url('blog', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a>
                                        </h2>
                                    </div>
                                    <div class="blog-entry-content ">
                                        <p class="card-text my-0">{!! Str::limit($blog->body, 80) !!}</p>

                                        <p><a href="{{ url('blog', ['slug' => $blog->slug]) }}"
                                                class="read-more ">Read more +</a></p>
                                    </div>
                                </article>
                                <hr class="marg-40-top marg-40-btm">
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection