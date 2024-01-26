@extends('layouts.admin')

@section('content')
    <div class="container mt-5 w-50">
        <h2 class="text-center">Add New Project</h2>

        @if ($errors->any())
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form class="mt-5" action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>

            <div class="mb-3">
                <label class="description-box" for="content" class="form-label">Description</label>
                <textarea class="form-control" id="content" rows="3" name="description">{{ old('description') }}</textarea>
            </div>

            <button class="btn btn-success" type="submit">Save</button>

        </form>
    </div>
@endsection
