@extends('components.master-layout')

@section('meta-tags')
{!! str_replace('>', ">\n", $blog->meta_tags) !!}
<title>{{ $blog->title }}</title>
@stop

@section('content')
<main id="main" class="new01" style="margin-top: 20px;">
    <div class="container py-5">
        {{-- <img src="{{ Storage::disk('s3')->url($blog->image) }}" loading="lazy" alt="{{ $blog->title }} Image"
            style="width: 100%; height: 460px; object-fit: cover;" /> --}}


        <img src="/{{ ltrim($blog->image, '/') }}" alt="{{ trim($blog->image_alt) }}"
            title="{{ trim($blog->image_title) }}" style="width: 100%; height: 460px; object-fit: cover;" />


        <h1 class="mt-3 mb-2" style="font-size: 2rem; font-weight: 400;">{{ $blog->title }}</h1>
        {!! $blog->body !!}
    </div>
</main>
@stop