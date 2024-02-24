@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')

<div class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <h1 class="display-4">Welcome to Logistics Carrier Collaboration🚀</h1>
    <p class="lead">Collaborate with carriers seamlessly for efficient logistics management.</p>
  </div>
</div>

<div class="container">
  <h1 class="pt-5">To make the most of it:</h1>
  <hr />
  <div class="row features text-center mb-5">
    <div class="col-lg-4 col-md-6 mb-5">
      <a class="card card-link border-top border-top-lg border-primary h-100 lift" href="carrier">
        <div class="card-body p-5">
          <div class="icon-stack icon-stack-lg bg-primary text-primary mb-4"><i data-feather="clock"></i></div>
          <h6>CARRIER REGISTRATION</h6>
          <p>Process for carriers to register their services with Bbox Express.</p>
        </div>
        <div class="card-footer bg-transparent pt-0 pb-5">
          <div class="badge badge-pill badge-light font-weight-normal px-3 py-2"></div>
        </div>
      </a>
    </div>

    <!-- Repeat the above structure for the remaining feature cards -->

  </div>
</div>

<!-- Page Content -->
<div class="container mt-5">
  <div class="jumbotron">
    <h1 class="display-4">About Us</h1>
    <p>Welcome to Logistics Carrier Collaboration, your go-to platform for facilitating collaboration among logistics
      carriers. Our platform aims to streamline communication, optimize routes, and enhance efficiency in the logistics
      industry.</p>
    <p>At Logistics Carrier Collaboration, we understand the importance of seamless coordination between carriers to
      ensure timely delivery and customer satisfaction. Whether you're a small carrier or a large logistics company, our
      platform provides the tools you need to connect with other carriers, share resources, and improve operational
      efficiency.</p>
    <p>With a user-friendly interface and powerful features, Logistics Carrier Collaboration empowers carriers to work
      together effectively, minimize empty miles, reduce costs, and ultimately deliver better service to customers.</p>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h2>Our Mission</h2>
      <p>We strive to provide a comprehensive platform that fosters efficient collaboration among logistics companies
        and carriers, streamlining transportation processes and enhancing overall industry efficiency.</p>
    </div>
    <div class="col-md-6">
      <h2>Our Vision</h2>
      <p>Our vision is to become the leading platform for logistics carrier collaboration, empowering businesses to
        achieve greater operational efficiency, cost savings, and customer satisfaction through seamless integration and
        collaboration.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-12">
      <h2>Our Team</h2>
      <p>We are a team of dedicated professionals with extensive experience in logistics, technology, and business
        development. Together, we are committed to driving innovation and delivering exceptional solutions to our
        clients.</p>
      <p>Join us in revolutionizing the logistics industry through collaboration!</p>
    </div>
  </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection