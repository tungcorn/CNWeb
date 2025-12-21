@extends('layouts.app')

@section('title', 'Create New Item')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">Create New Item</h2>
            <a href="{{ route('issues.index') }}" class="btn btn-secondary mb-3">Back to List</a>

            {{-- Form Start --}}
            <form action="{{ route('issues.store') }}" method="POST" onsubmit="this.submitBtn.disabled = true;">
                @csrf

                {{-- Text Field --}}
{{--                <div class="mb-3">--}}
{{--                    <label for="computer_id" class="form-label">Ma may tinh <span class="text-danger">*</span></label>--}}
{{--                    <input type="text" class="form-control @error('computer_id') is-invalid @enderror"--}}
{{--                           id="computer_id" name="computer_id" value="{{ old('computer_id') }}" placeholder="Enter Computer Id"--}}
{{--                           required>--}}
{{--                    @error('computer_id')--}}
{{--                    <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}

                <div class="mb-3">
                    <label for="computer_id" class="form-label">Ma may tinh <span class="text-danger">*</span></label>
                    <select type="text" class="form-control @error('computer_id') is-invalid @enderror"
                           id="computer_id" name="computer_id"
                           >
                        <option value="" selected disabled>Select a Computer Name</option>
                        @if(isset($computers))
                            @foreach($computers as $computer)
                                <option value="{{ $computer->id }}"
                                        {{ old('computer_id') == $computer->id ? 'selected' : '' }}>
                                {{ $computer->computer_name }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                    @error('computer_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="reported_by" class="form-label">Reported by</label>
                        <input type="text" class="form-control @error('reported_by') is-invalid @enderror"
                               id="reported_by" name="reported_by" value="{{ old('reported_by') }}"
                               placeholder="Nguyen Van A">
                        @error('reported_by')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="reported_date" class="form-label">Reported Date  <span class="text-danger">*</span></label>
                        <input type="datetime-local" class="form-control @error('reported_date') is-invalid @enderror"
                               id="reported_date" name="reported_date" value="{{ old('reported_date') }}" >
                        @error('reported_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('description') is-invalid @enderror"
                              id="description" name="description" rows="5" >{{ old('description') }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="urgency" class="form-label">Urgency</label>
                        <select class="form-select @error('urgency') is-invalid @enderror"
                                id="urgency" name="urgency" >
                            <option value="" selected disabled>Select a Urgency <span class="text-danger">*</span></option>
                            <option value="Low" {{ old('urgency') == 'Low' ? 'selected' : '' }}>Low
                            </option>
                            <option value="Medium" {{ old('urgency') == 'Medium' ? 'selected' : '' }}>Medium
                            </option>
                            <option value="High" {{ old('urgency') == 'High' ? 'selected' : '' }}>High
                            </option>
                        </select>
                        @error('urgency')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                        <select class="form-select @error('status') is-invalid @enderror"
                                id="status" name="status" >
                            <option value="" selected disabled>Select a category</option>
                            <option value="Open" {{ old('status') == 'Open' ? 'selected' : '' }}>Open
                            </option>
                            <option value="In Progress" {{ old('status') == 'In Progress' ? 'selected' : '' }}>In Progress
                            </option>
                            <option value="Resolved" {{ old('status') == 'Resolved' ? 'selected' : '' }}>Resolved
                            </option>
                        </select>
                        @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Submit Buttons --}}
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="reset" class="btn btn-secondary me-md-2">Reset</button>
                            <button type="submit" id="submitBtn" class="btn btn-primary">
                                <i class="bi bi-save"></i> Save
                            </button>
                        </div>
            </form>
        </div>
    </div>
@endsection

