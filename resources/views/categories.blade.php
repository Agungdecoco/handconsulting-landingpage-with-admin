@extends('layouts.main')

@section('wrapper')
    <h1 class="m-0">Category</h1>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('post.create') }}" class="btn btn-success">Add New Post</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th class="text-center" scope="col">Name</th>
                            <th style="width: 40px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">#</th>
                                        <th class="text-center" scope="col">Nama</th>
                                    </tr>
                                </thead>
                                <tbody> --}}
                        @php
                            $num = 1;
                        @endphp
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $num++ }}</td>
                                <td>{{ $category->name }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('category.destroy', $category->id) }}" method="POST">
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
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <div class="col-md-6">
        {{-- <div class="card">
            <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body"> --}}
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Title
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {{-- <input type="text" name="" id=""> --}}
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror "
                            placeholder="Enter category's name..">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">SAVE</button>
                    </div>
                </div>
            </div>
        </form>
        {{-- </div>
        </div> --}}
        <!-- /.card -->
    </div>
@endsection
