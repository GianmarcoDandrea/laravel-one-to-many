@extends('layouts.admin')

@section('content')
    <div class="container mt-5 w-50">
        <h2 class="text-center">Add New Project</h2>

        <form class="mt-5" action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3 has-validation">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 has-validation">
                <label class="description-box" for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3" name="description">{{ old('description') }}</textarea>
                
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 has-validation">
			    <label for="category">Select type of your project:</label>
			    <select class="form-select @error('type') is-invalid @enderror" name="category_id" id="type">
			        <option @selected(!old('type_id')) value="">No type</option>

			        @foreach ($types as $type)
			            <option value="{{$type->id}}">{{$type->name}}</option>
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
