@extends('layouts/layoutMaster')

@section('title', 'Create Carrier')

@section('content')
<div class="card p-4">
  <h2 class="text-center mb-4">Create Carrier</h2>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form method="POST" action="{{ route('carrier.store') }}">
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" name="address" id="address" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="contact_number">Contact Number:</label>
      <input type="text" name="contact_number" id="contact_number" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="website">Website:</label>
      <input type="url" name="website" id="website" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="type">Carrier Type:</label>
      <input type="text" name="type" id="type" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="status">Status:</label>
      <input type="text" name="status" id="status" class="form-control" required>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-primary">Create</button>
      <a href="{{ route('carrier.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
  </form>
</div>
@endsection