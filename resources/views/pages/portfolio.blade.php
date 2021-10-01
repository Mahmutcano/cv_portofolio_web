@extends('layouts.front')
@section('title')
   KİŞİSEL
@endsection

@section('css')
@endsection

@section('content')
    <section class="portfolio-section">
        <h2 class="section-title">KİŞİSEL</h2>

        <div class="portfolio-wrapper">
            @foreach($portfolio as $item)
                <figure class="portfolio-item hover-box">
                    <a href="{{ route('portfolio.detail', ['id' => $item->id]) }}">
                        <img src="{{ asset('storage/portfolio/'.$item->featuredImage->image)  }}"
                             alt="{{ $item->title }}"
                             class="portfolio-item-img">
                    </a>
                    <figcaption class="portfolio-item-details overlay">
                        <h5 class="portfolio-item-title">{{ $item->title }}</h5>
                        <p class="portfolio-item-description">{{ $item->tags }}</p>
                        
                    </figcaption>
                </figure>
            @endforeach
          
        </div>

    </section>
@endsection

@section('js')
@endsection
