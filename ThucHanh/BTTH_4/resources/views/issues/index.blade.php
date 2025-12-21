@extends('layouts.app')

@section('title', 'List Items')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>List Items</h2>
        <div class="d-flex gap-2">
            <form action="{{ route('issues.search') }}" method="GET" class="d-flex">
                <input type="text" name="query" class="form-control me-2" placeholder="Search..." value="{{ request('query') }}">
                <button type="submit" class="btn btn-outline-success">Search</button>
            </form>
            <a href="{{ route('issues.create') }}" class="btn btn-primary">Add New</a>
        </div>

    </div>

{{--    @if(session('success'))--}}
{{--        <div class="alert alert-success">{{ session('success') }}</div>--}}
{{--    @endif--}}

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Ma van de</th>
                <th>Ten may tinh</th>
                <th>Ten phien ban</th>
                <th>Nguoi bao cao su co</th>
                <th>Thoi gian bao cao</th>
                <th>Muc do su co</th>
                <th>Trang thai hien tai</th>
                <th class="text-end">Actions</th>
            </tr>
            </thead>
            <tbody>
{{--            @if(isset($items) && count($items) > 0)--}}
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->id ?? '-'}}</td>
                        <td>{{ $item->computer->computer_name ?? 'Example Item Title' }}</td>
                        <td>{{ $item->computer->model ?? '' }}</td>
                        <td>{{ $item->reported_by ?? '' }}</td>
                        <td>{{ $item->reported_date ?? '' }}</td>
                        <td><span class="badge bg-secondary">{{ $item->urgency }}</span></td>
                        <td>{{ $item->status ?? '' }}</td>
{{--                        <td><span class="badge bg-success">{{ $item->status ?? 'Active' }}</span></td>--}}
                        <td class="text-nowrap">
                            <div class="d-flex gap-2">
                                <a href="{{ route('issues.edit', $item ) }}" class="btn btn-sm btn-warning text-dark">Edit</a>
                                <form action="{{ route('issues.destroy', $item ) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Confirm delete?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
{{--            @else--}}
{{--                <tr>--}}
{{--                    <td colspan="7" class="text-center">No data available</td>--}}
{{--                </tr>--}}
{{--            @endif--}}
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-3">
         {{ $items->links() }}
    </div>
@endsection

