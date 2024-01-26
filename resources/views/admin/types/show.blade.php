@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-1 mt-3 mb-4">Type: {{ $type->name }}</h2>

        <hr>

        <a class="btn btn-success" href="{{ route('admin.types.edit', ['type' => $type->slug]) }}">
            Edit Your Type
        </a>

        @if (count($type->projects) > 0)
            <table class="table table-striped mt-5 w-100">
                <thead>
                    <tr>
                        <th scope="col" class="title-column fs-5">Title</th>
                        <th scope="col" class="description-column fs-5">Description</th>
                        <th scope="col" class="action-column fs-5">Actions</th>
                    </tr>
                </thead>
                <tbody class="w-100">
                    @foreach ($type->projects as $project)
                        <tr>
                            <td scope="row">{{ $project->title }}</td>
                            <td>{{ $project->description }}</td>
                            <td>
                                <a class="btn btn-success"
                                    href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">
                                    Details
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning w-50 mx-auto">
                There's no project of this type
            </div>
        @endif
    </div>

@endsection
