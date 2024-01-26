@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-5">List of Type </h2>

        @if (Session::has('message'))
            <div class="alert alert-success w-50 mx-auto">
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="w-100">
            <div class="w-50 list-type-section">
                @if (count($types) > 0)
                <table class="table table-striped mt-5 w-100">
                    <thead>
                        <tr>
                            <th scope="col" class="type-name-column">Name</th>
                            <th scope="col" class="type-action-column">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="w-100">
                        @foreach ($types as $type)
                            <tr>
                                <td scope="row">{{ $type->name }}</td>
                                <td>
                                    <a class="btn btn-success"
                                        href="">
                                        Details
                                    </a>
        
                                    <form action=""
                                        class="d-inline-block" method="POST">
        
                                        @csrf
                                        @method('DELETE')
        
                                        <button class="btn btn-danger btn-delete" type="submit" data-title="{{ $type->name }}">
                                            Delete
                                        </button>
        
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                    
                @else
                    <div class="alert alert-warning w-50 mx-auto text-center">
                        There's nothing here yet. Add your first type of project.
                    </div>
                @endif
            </div>

            <div class="add-type-section w-50">


            </div>

        </div>
    </div>

    @include('partials.delete-modal')
@endsection
