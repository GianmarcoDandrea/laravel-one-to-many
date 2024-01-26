@extends('layouts.admin')

@section('content')
    <div class="container mt-5 w-50">
        <h2 class="text-center">Edit Your Project</h2>


        <form class="mt-5" action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3 has-validation">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $project->title) }}">

                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 has-validation">
                <label class="description-box" for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3"
                    name="description">{{ old('description', $project->description) }}</textarea>

                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 has-validation">
                <label for="type">Select type of your project:</label>
                <select class="form-select @error('type') is-invalid @enderror" name="type_id" id="type">
                    <option @selected(!old('type_id', $project->type_id)) value="">No type</option>
                    @foreach ($types as $type)
                        <option @selected(old('type_id', $project->type_id) == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>


                @error('type_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-success" type="submit">Save</button>

        </form>
    </div>
@endsection
