@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>{{ $project->title }}</h2>
        <ul>

            <li class="mt-5 fs-5">
                <span class="fw-bold ">Type: </span>{{ $project->type ? $project->type->name : 'No category for this project' }}
            </li>

            <li class="mt-2 fs-5">
                <span class="fw-bold ">Description: </span> {{ $project->description }}
            </li>

            <li class="mt-2 fs-5">
                <span class="fw-bold">Added: </span> {{ date('d-m-Y', strtotime($project->created_at)) }}
            </li>
        </ul>


        <a href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}" class="btn btn-warning">Edit You
            Project</a>

    </div>
@endsection
