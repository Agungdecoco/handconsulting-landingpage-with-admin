@extends('layouts.main')

@section('wrapper')
    <h1 class="m-0">Create New Post</h1>
@endsection

@section('content')
    <div class="col-md-12">
        @if (!$errors->isEmpty())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        @foreach ($posts as $post)
            <form action="{{ route('post.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <input type="text" name="id" value="{{ $post->id }}" hidden>
                </div>
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Title
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="height: 90px">
                        {{-- <input type="text" name="" id=""> --}}
                        <div class="form-group">
                            <input type="text" name="title" id="title"
                                class="form-control @error('title') is-invalid @enderror" placeholder="Enter your title.."
                                required autofocus value="{{ $post->title }}">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Category
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="height: 90px">
                                <div class="form-group">
                                    <input class="form-control" type="text" id="category_id" name="category_id"
                                        value="{{ $post->category->name }}" disabled>
                                    {{-- <select class="form-select" aria-label="Default select example" id="category_id"
                                        name="category_id">
                                        @foreach ($categories as $category)
                                            @if (old('category_id') === $category->id)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}
                                                </option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Image
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="height: 90px">
                                <div class="form-group">
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                                        name="image" required>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Body
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <textarea class="form-control @error('body') is-invalid @enderror" id="summernote" name="body"
                                rows="3">{!! $post->body !!}</textarea>
                            @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Body
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <textarea class="form-control @error('body') is-invalid @enderror" id="summernote" name="body"
                                rows="3">{!! $post->body !!}</textarea>
                            @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div> --}}
                <div class="d-flex justify-content-center mb-3">
                    <button type="submit" class="btn btn-success"> SAVE POST</button>
                </div>
            </form>
        @endforeach
    </div>
@endsection
