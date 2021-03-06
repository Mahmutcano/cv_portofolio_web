@extends('layouts.front')

@section('title')
 RESUME
@endsection

@section('css')
@endsection

@section('content')

    <section class="clients-section">
        <h6 class="section-subtitle">Ne Yapıyorum</h6>
        <h2 class="section-title">Alanlar</h2>
        <div class="client-logos-wrapper">
            <div class="client-logo"><a href="https://www.amazon.com/amazonprime/146-5825583-2775669?_encoding=UTF8&%2AVersion%2A=1&%2Aentries%2A=0"></a><img src="assets/images/Clients_1.svg" alt="logo" class="w-100"></div>
            <div class="client-logo"><a href="#!"></a><img src="assets/images/Netflix.svg" alt="logo" class="w-150"></div>
            <div class="client-logo"><a href="#!"></a><img src="assets/images/Clients_3.svg" alt="logo" class="w-100"></div>
            <div class="client-logo"><a href="#!"></a><img src="assets/images/Spotify.svg" alt="logo" class="w-150"></div>
        </div>
    </section>
    <section class="services-section">
        <h6 class="section-subtitle">Ne Yapıyorum</h6>
        <h2 class="section-title">Hizmetler</h2>
        <div class="row">
            <div class="media service-card col-lg-6">
                <div class="service-icon">
                    <img src="assets/images/001-target.svg" alt="target">
                </div>
                <div class="media-body">
                    <h5 class="service-title">Web Designing</h5>
                    <p class="service-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
                        sed
                        tortor.</p>
                </div>
            </div>
            <div class="media service-card col-lg-6">
                <div class="service-icon">
                    <img src="assets/images/003-idea.svg" alt="bulb">
                </div>
                <div class="media-body">
                    <h5 class="service-title">Graphic design</h5>
                    <p class="service-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
                        sed
                        tortor.
                    </p>
                </div>
            </div>
            <div class="media service-card col-lg-6">
                <div class="service-icon">
                    <img src="assets/images/002-development.svg" alt="development">
                </div>
                <div class="media-body">
                    <h5 class="service-title">Development</h5>
                    <p class="service-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
                        sed
                        tortor.
                    </p>
                </div>
            </div>
            <div class="media service-card col-lg-6">
                <div class="service-icon">
                    <img src="assets/images/004-smartphone.svg" alt="smartphone">
                </div>
                <div class="media-body">
                    <h5 class="service-title">Mobile design</h5>
                    <p class="service-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
                        sed
                        tortor.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')

@endsection
