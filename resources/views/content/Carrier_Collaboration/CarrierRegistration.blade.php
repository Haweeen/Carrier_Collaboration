@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'CarrierRegistration')

@section('content')
<h4>CARRIER REGISTRATION</h4>
<form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  @csrf
  <div class="card">
    <div class="card-col-span">
      <div class="row">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus class="form-control">
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required class="form-control">
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required class="form-control">
            @error('phone')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <!-- Add more input fields as needed -->

          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
