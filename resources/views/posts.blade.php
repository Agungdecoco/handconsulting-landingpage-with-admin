@extends('layouts.main')

@section('wrapper')
    <h1 class="m-0">Posts</h1>
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('post.create') }}" class="btn btn-success">Create New Post</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col" style="width: 50px">#</th>
                            <th class="text-center" scope="col" style="width: 380px">Title</th>
                            <th class="text-center" scope="col">Category</th>
                            <th class="text-center" scope="col" style="width: 250px">Image</th>
                            <th class="text-center" scope="col" style="width: 100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $num = 1;
                        @endphp
                        @foreach ($posts as $post)
                            <tr>
                                <td class="text-center" scope="col">{{ $post->id }}</td>
                                <td class="text-center" scope="col">{{ $post->title }}</td>
                                <td class="text-center" scope="col">{{ $post->category->name }}</td>
                                <td class="text-center" scope="col">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                        width="100">
                                </td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('post.destroy', $post->id) }}" method="POST">
                                        <a class="btn btn-sm" style="background-color: #1C1A30; color: #FDE4D0"
                                            scope="col" href="{{ route('post.edit', $post->id) }}">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="btn" class="btn btn-sm"
                                            style="background-color: #DCD6F7">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
