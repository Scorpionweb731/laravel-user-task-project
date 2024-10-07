@extends('layout')

@section('content')
<div class="row m-4">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-message">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1 class="text-center">User Add</h1>
    <form action="{{ route('user_add') }}" method="POST" id="userform" onsubmit="return validateEmail()">
        @csrf
        <div class="mb-3">
            <label for="exampleInputUsername" class="form-label">User Name</label>
            <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" name="username" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputMobile" class="form-label">Mobile</label>
            <input type="number" class="form-control" id="exampleInputMobile" name="mobile" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
    function validateEmail() {
        const emailInput = document.getElementById('exampleInputEmail1').value;
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; 
        
        if (!emailPattern.test(emailInput)) {
            alert('Please enter a valid email address.'); 
            return false; 
        }
        return true; 
    }
</script>
@endsection
