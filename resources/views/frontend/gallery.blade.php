@extends('layouts.front')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portolio</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Portolio</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="gallery-flters">
              {{-- <li data-filter="*" class="filter-active">All</li>
              @foreach ($gallerycategory as $category)
              <li data-filter=".{{ $category->id }}">{{ $category->name }}</li>
              @endforeach --}}
            </ul>
          </div>
        </div>

        <div class="row gallery-container" data-aos="fade-up">

          @foreach ($gallery as $gallery)
          <div class="col-lg-4 col-md-6 gallery-item {{ $gallery->gallerycategory_id }}">
            <img src="{{ asset('storage/'.$gallery->cover) }}" class="img-fluid" alt="">
            <div class="gallery-info">
              <h4>{{ $gallery->name }}</h4>
              {{-- <p>{{ $gallery->gallerycategory->name }}</p> --}}
              <a href="{{ asset('storage/'.$gallery->cover) }}" data-gall="portofolioGallery" class="venobox preview-link" title="{{ $gallery->name }}"><i class="bx bx-plus"></i></a>
              <a href="{{ route('galleryshow',$gallery->slug) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End gallery Section -->

  </main><!-- End #main -->
@endsection