@extends('layouts.layout-landing-page')

@section('content')
    <!-- Page Content -->
    <div class="article-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Article</h1>
                    {{-- <span>We are over 20 years of experience</span> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="post mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="post-img d-flex justify-content-center">
                        @foreach ($posts as $post)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" width="400">
                        @endforeach
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="post-content">
                        @foreach ($posts as $post)
                            <h6 style="font-size: 14px; text-align: right;">
                                <em>
                                    {{ date('d M Y', strtotime($post->published_at)) }}
                                </em>
                            </h6>
                            <h3>{{ $post->title }}</h3>
                            <h6 style="font-size: 14px;"><small>Category in : <a
                                        href="{{ route('category', ['category' => $post->category->id]) }}">{{ $post->category->name }}</a></small>
                            </h6>
                            <hr>
                            <p>{!! $post->body !!}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
