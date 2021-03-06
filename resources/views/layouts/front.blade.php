<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendors/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/live-resume.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    @yield('css')
</head>

<body>
@include('layouts.menu')

<div class="content-wrapper">
    <aside>
        <div class="profile-img-wrapper">
            <img src="{{ asset('storage/'.$personal->image) }}" alt="{{ $personal->full_name }}">
        </div>
        <h1 class="profile-name">{{ $personal->full_name }}</h1>
        <div class="text-center">
            <span class="badge badge-white badge-pill profile-designation"><b>{!! $personal->task_name !!}</b></span>
        </div>
        <nav class="social-links">
            @foreach($socialMediaData as $item)
                <a href="{{ $item->link ? $item->link : 'javascript:void(0)'}}" target="_blank" class="social-link"
                   title="{{ $item->name }}">
                    {!! $item->icon !!}
                </a>
            @endforeach
        </nav>
        <div class="widget">
            <h5 class="widget-title">KİŞİSEL BİLGİLER</h5>
            <div class="widget-content">
                <p><i class="fas fa-birthday-cake"></i>  Doğum Tarihi : {{ $personal->birthday }}</p>
                <p><i class="fas fa-globe-europe"></i>  WEBSITE : {{ $personal->website }}</p>
                <p><i class="fas fa-phone-volume"></i>  Telefon : {{ $personal->phone }}</p>
                <p><i class="fas fa-envelope-square"></i>  Mail : {{ $personal->mail }}</p>
                <p><i class="fas fa-map-marker-alt"></i>  Adres : {{ $personal->address }}</p>
                <a href="{{ asset('storage/'. $personal->cv) }}" target="_blank" class="btn btn-download-cv btn-primary rounded-pill">
                    <img src="{{ asset('assets/images/download.svg') }}" alt="download" class="btn-img">Özgeçmişi İndir
                </a>
            </div>
        </div>
        <div class="widget card">
            <div class="card-body">
                <div class="widget-content">
                    <h5 class="widget-title card-title"><i class="fas fa-language"></i> DİLLER</h5>
                    {!! $personal->languages !!}
                </div>
            </div>
        </div>
        <div class="widget card">
            <div class="card-body">
                <div class="widget-content">
                    <h5 class="widget-title card-title"><i class="fas fa-hiking"></i> HOBİLER</h5>
                    {!! $personal->interests !!}
                </div>
            </div>
        </div>
    </aside>

    <main>

        @yield('content')

        <footer>Tüm Hakkı @ <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer">Mahmut Can Özgan </a>.Türkiye/Ankara</footer>
    </main>
</div>
<script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/@popperjs/core/dist/umd/popper-base.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/live-resume.js') }}"></script>
@yield('js')

</body>

</html>
