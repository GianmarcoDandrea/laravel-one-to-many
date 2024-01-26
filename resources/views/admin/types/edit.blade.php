@extends('layouts.admin')

@section('content')
    <div class="container mt-5 w-50">
        <h2 class="text-center">Edit Your Type</h2>


        <form class="mt-5" action="{{ route('admin.types.update', ['type' => $type->slug]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3 has-validation">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $type->name) }}">

                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-success" type="submit">Save</button>

        </form>
    </div>
@endsection
