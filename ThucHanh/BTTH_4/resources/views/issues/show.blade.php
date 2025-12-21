@extends('layouts.app')

@section('title', 'Item Details')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">Item Details</h2>
            <a href="{{ route('exams.index') }}" class="btn btn-secondary mb-3">Back to List</a>

            <table class="table table-bordered">
                <tr>
                    <th class="bg-light" style="width: 200px">ID</th>
                    <td>{{ $item->id ?? 1 }}</td>
                </tr>
                <tr>
                    <th class="bg-light">Name / Title</th>
                    <td>{{ $item->title ?? 'Example Title' }}</td>
                </tr>
                <tr>
                    <th class="bg-light">Email</th>
                    <td>test@example.com</td>
                </tr>
                <tr>
                    <th class="bg-light">Number / Age</th>
                    <td>{{ $item->age ?? 25 }}</td>
                </tr>
                <tr>
                    <th class="bg-light">Start Date</th>
                    <td>{{ $item->start_date ?? '2023-01-01' }}</td>
                </tr>
                <tr>
                    <th class="bg-light">Category</th>
                    <td>Category A</td>
                </tr>
                <tr>
                    <th class="bg-light">Status</th>
                    <td>Active</td>
                </tr>
                <tr>
                    <th class="bg-light">Tags</th>
                    <td>
                        <span class="badge bg-secondary">PHP</span>
                        <span class="badge bg-secondary">Laravel</span>
                    </td>
                </tr>
                <tr>
                    <th class="bg-light">Description</th>
                    <td>This is a sample description of the item.</td>
                </tr>
                <tr>
                    <th class="bg-light">Image</th>
                    <td>
                        <img src="https://via.placeholder.com/150" alt="Img" class="img-thumbnail" style="max-width: 150px">
                    </td>
                </tr>
            </table>

            <div class="mt-3">
                <a href="{{ route('exams.edit', $item->id ?? 1) }}" class="btn btn-warning text-dark me-2">Edit</a>
                <form action="{{ route('exams.destroy', $item->id ?? 1) }}" method="POST" class="d-inline"
                      onsubmit="return confirm('Confirm delete?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
