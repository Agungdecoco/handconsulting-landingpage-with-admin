@extends('layouts.layout-landing-page')

@section('content')
    <!-- Page Content -->
    <div class="article-heading header-text">
        <div class="container">
            <div class="row  d-flex justify-content-center">
                <div class="col-md-6">
                    <h1 class="mb-3">Our Articles</h1>
                    <form action="/article">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" placeholder="Search title..."
                                value="{{ request('search') }}">
                            <button class="btn btn-success" type="submit" style="color:beige">Search</button>
                        </div>
                    </form>
                    {{-- <span>We are over 20 years of experience</span> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="mb-4 mt-5">
        <div class="container">
            <div class="row" id="category">
                <div class="col-md-3">
                    @if ($category == null)
                        <h6 class="mb-2">Category : All</h6>
                    @else
                        {{-- @foreach ($category as $select) --}}
                        <h6 class="mb-2">Category : {{ $category->name }}</h6>
                        {{-- @endforeach --}}
                    @endif
                    {{-- <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('articles.category') }}">All</a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="list-group-item">
                                <a
                                    href="{{ route('articles.category', ['category' => $category->id]) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach --}}
                    <ul class="list-group">
                        <li class="list-group-item ui-category-active">
                            <a href="{{ route('article') }}">All</a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="list-group-item">
                                <a
                                    href="{{ route('category', ['category' => $category->id]) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-9">
                    <ul class="list-group">
                        <li class="list-group-item">
                            @foreach ($posts as $post)
                                <div class="mb-5">
                                    <div class="row">
                                        <div class="col-md-5 d-flex justify-content-center">
                                            <div class="category-img">
                                                {{-- @foreach ($posts as $post) --}}
                                                {{-- <img src="assets/images/service_01.jpg" alt=""> --}}
                                                <img src="{{ asset('storage/' . $post->image) }}"
                                                    alt="{{ $post->title }}" width="200">
                                                {{-- @endforeach --}}
                                            </div>
                                        </div>
                                        <div class="col-md-7">

                                            <h6><small>{{ date('d M Y', strtotime($post->published_at)) }}</small></h6>
                                            {{-- <h3> --}}
                                            <a class="post-list" href="{{ route('article') }}/<?= $post->slug ?>">
                                                <h3>
                                                    {{ $post->title }}
                                                </h3>
                                            </a>

                                            {{-- </h3> --}}
                                            <p>{{ $post->excerpt }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            @endforeach
                        </li>
                        <div class="d-flex justify-content-end"></div>
                        {{ $posts->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
