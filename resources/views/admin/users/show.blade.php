@extends('admin.layout')

@section('content')
    <div class="container">
        <h1>User Details</h1>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <a href="{{ route('users.index') }}" class="btn btn-primary">Back to Users</a>
    </div>
@endsection
