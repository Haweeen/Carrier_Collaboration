@extends('layouts/layoutMaster')

@section('title', 'Edit Carrier')

@section('content')
<div class="card p-4">
  <h2 class="text-center mb-4">Edit Carrier</h2>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form method="POST" action="{{ route('carrier.update', $carrier->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ $carrier->name }}" required>
    </div>

    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" name="address" id="address" class="form-control" value="{{ $carrier->address }}" required>
    </div>

    <div class="form-group">
      <label for="contact_number">Contact Number:</label>
      <input type="text" name="contact_number" id="contact_number" class="form-control"
        value="{{ $carrier->contact_number }}" required>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" class="form-control" value="{{ $carrier->email }}" required>
    </div>

    <div class="form-group">
      <label for="website">Website:</label>
      <input type="url" name="website" id="website" class="form-control" value="{{ $carrier->website }}" required>
    </div>

    <div class="form-group">
      <label for="type">Carrier Type:</label>
      <input type="text" name="type" id="type" class="form-control" value="{{ $carrier->type }}" required>
    </div>

    <div class="form-group">
      <label for="status">Status:</label>
      <input type="text" name="status" id="status" class="form-control" value="{{ $carrier->status }}" required>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection