@extends('admin.layout')

@section('content')
<form action="{{ route('update.exchange.rate') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="usd_to_vnd">USD to VND:</label>
        <input type="text" id="usd_to_vnd" name="usd_to_vnd" value="{{ $usd_to_vnd }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
