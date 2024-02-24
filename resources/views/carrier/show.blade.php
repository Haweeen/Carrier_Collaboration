@extends('layouts/layoutMaster')

@section('title', 'Carrier Details')

@section('content')
<div class="card p-4">
  <h2 class="text-center mb-4">Carrier Details</h2>
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $carrier->name }}" readonly>
  </div>

  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" name="address" id="address" class="form-control" value="{{ $carrier->address }}" readonly>
  </div>

  <div class="form-group">
    <label for="contact_number">Contact Number:</label>
    <input type="text" name="contact_number" id="contact_number" class="form-control"
      value="{{ $carrier->contact_number }}" readonly>
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ $carrier->email }}" readonly>
  </div>

  <div class="form-group">
    <label for="website">Website:</label>
    <input type="url" name="website" id="website" class="form-control" value="{{ $carrier->website }}" readonly>
  </div>

  <div class="form-group">
    <label for="type">Type:</label>
    <input type="text" name="type" id="type" class="form-control" value="{{ $carrier->type }}" readonly>
  </div>

  <div class="form-group">
    <label for="status">Status:</label>
    <input type="text" name="status" id="status" class="form-control" value="{{ $carrier->status }}" readonly>
  </div>

  <div class="text-center">
    <a href="{{ route('carrier.edit', $carrier->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('carrier.index') }}" class="btn btn-secondary">Back</a>
    <p>hehe</p>
  </div>
</div>
@endsection