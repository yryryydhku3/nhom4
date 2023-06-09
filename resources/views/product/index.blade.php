@extends('product.layout.index')

@section('content')

<section class="page-section portfolio" id="music">
<base href="{{asset('')}}">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">PLAY LIST</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    @foreach($products as $key => $product)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1" >
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" >
                                <a class="portfolio-item-caption-content text-center text-white" href="{{ route('products.show',$product->id) }}"><i class="fa-solid fa-play fa-2xl"></i></a>
                            </div>
                            <img class="img-fluid" src="{{ asset('image/product/'.$product->image) }}" alt="" class="song-img">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

@endsection