@extends('layout')
@section('content')
    <div class="row m-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-message">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h1 class="text-center">Task Add</h1>
        <form action="{{ route('task_add') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputusername" class="form-label">Select User</label>
                <select class="form-select" aria-label="Default select example" name="userid" required>
                    <option value="" style="display: none">Select option</option>
                    @if ($userdata && $userdata->count() > 0)
                        @foreach ($userdata as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputtaskdetail" class="form-label">Task Detail</label>
                <input type="text" class="form-control" id="exampleInputtaskdetail" aria-describedby="emailHelp"
                    name="task_detail" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputtasktype" class="form-label">Task Type</label>
                <select class="form-select" aria-label="Default select example" name="task_type" required>
                    <option value="" style="display: none">Select option</option>
                    <option value="pending">pending</option>
                    <option value="done">done</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
