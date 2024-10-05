@extends('layouts.app')

@section('title')
    Konsumsi
@endsection

@section('content')
<!-- Recent Posts Section -->
     <section id="recent-posts" class="recent-posts section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up"> 
          <p>Konsumsi</p>
      </div><!-- End Section Title -->

      <div class="container">
          <div class="row gy-5">
              @foreach ($items as $item)
              <div class="col-xl-4 col-md-6">
                  <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
                      <div class="post-img position-relative overflow-hidden">
                          <img src="{{ asset('storage/'. $item->image) }}" class="img-fluid" alt="{{ $item->name }}">
                          <span class="post-date">Rp {{ number_format($item->price, 2, ',', '.') }}</span>
                      </div>

                      <div class="post-content d-flex flex-column">
                          <h3 class="post-title">{{ $item->name }}</h3>
                          <p data-aos="fade-up" data-aos-delay="100">{!! $item->description !!}</p>
                          <div class="meta d-flex align-items-center">
                              <div class="d-flex align-items-center">
                              </div>
                          </div>
                          <hr>
                          <a href="https://wa.me/62895612454668?text=Halo%20min,%20saya%20ingin%20memesan%20{{ urlencode($item->name) }}" class="readmore stretched-link"><span>Pesan</span><i class="bi bi-cart4"></i></a>
                      </div>
                  </div>
              </div><!-- End post item -->
              @endforeach
          </div>
      </div>
    </section><!-- /Recent Posts Section -->
@endsection