@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Carrier Registration')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
  <div class="card p-4">
    <h2 class="text-center mb-4">Carrier Registration</h2>
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($carriers->isEmpty())
    <div class="alert alert-info">No carriers found.</div>
    @else
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Address</th>
          <th>Contact Number</th>
          <th>Email</th>
          <th>Website</th>
          <th>Type</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($carriers as $carrier)
        <tr>
          <td>{{ $carrier->name }}</td>
          <td>{{ $carrier->address }}</td>
          <td>{{ $carrier->contact_number }}</td>
          <td>{{ $carrier->email }}</td>
          <td>{{ $carrier->website }}</td>
          <td>{{ $carrier->type }}</td>
          <td>{{ $carrier->status }}</td>
          <td>
            <a href="{{ route('carrier.edit', $carrier->id) }}" class="btn btn-sm btn-primary">Edit</a>
            <form action="{{ route('carrier.destroy', $carrier->id) }}" method="POST" style="display: inline-block;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger"
                onclick="return confirm('Are you sure you want to delete this carrier?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @endif

    <form method="POST" action="{{ route('carrier.register') }}">
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
        <label for="type">Type:</label>
        <input type="text" name="type" id="type" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="status">Status:</label>
        <input type="text" name="status" id="status" class="form-control" required>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary">Register</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
      </div>
    </form>
  </div>
</div>

@endsection