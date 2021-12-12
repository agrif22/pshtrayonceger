@extends('layouts.front')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Gallery Details</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Gallery Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= gallery Details Section ======= -->
    <section id="gallery-details" class="gallery-details">
      <div class="container" data-aos="fade-up">
        <div class="gallery-details-container">

          <div class="owl-carousel gallery-details-carousel">
            <img src="{{ asset('storage/'.$gallery->cover) }}" class="img-fluid" alt="">
          </div>

          <div class="gallery-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>:  {{ $gallery->gallerycategory->name }}</li>
              <li><strong>Client</strong>: {{ $gallery->client }}</li>
              <li><strong>Project date</strong>: {{ Carbon\Carbon::parse($gallery->date)->format("d F, Y") }}</li>
            </ul>
          </div>

        </div>

        <div class="gallery-description">
          <h2>{{ $gallery->name }}</h2>
          <p>
            {!! $gallery->desc !!}
          </p>
        </div>

      </div>
    </section><!-- End gallery Details Section -->

  </main><!-- End #main -->
@endsection