@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Carrier Registration')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
  <div class="card p-4">
    <h2 class="text-center mb-4">Carrier Registration</h2>
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
        <label for="type">Carrier aType:</label>
        <input type="text" name="type" id="type" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="status">Status:</label>
        <input type="text" name="status" id="status" class="form-control" required>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary">Register</button>
        <a href="{{ " /" }}" class="btn btn-secondary">Back</a>
      </div>
    </form>

    @if ($carriers->isNotEmpty())
    <div class="mt-4">
      <h4>Registered Carriers:</h4>
      <ul>
        @foreach ($carriers as $carrier)
        <li>
          <a href="{{ route('carrier.show', $carrier->id) }}">{{ $carrier->name }}</a> <!-- Show button -->
        </li>
        @endforeach
      </ul>
    </div>
    @endif

  </div>
</div>

@endsection