<header>
    <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto">
        <img src="{{ asset('assets/images/share.svg') }}" alt="share" class="btn-img">
        <a href="http://www.facebook.com/share.php?u={{ request()->url() }}&amp;title=Başlık Buraya"><i class="fab fa-facebook"></i> Facebook Paylaş</a>

    </button>
    <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto">
        <img src="{{ asset('assets/images/share.svg') }}" alt="share" class="btn-img">
        <a href="http://twitter.com/intent/tweet?status=Başlık Buraya+{{ request()->url() }}"><i class="fab fa-twitter"></i> Twitter Paylaş</a>

    </button>
    <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto">
        <img src="{{ asset('assets/images/share.svg') }}" alt="share" class="btn-img">
        <a href="http://www.linkedin.com/shareArticle?url=https://www.linkedin.com/in/mahmut-can-%C3%B6zgan-8a08501b0/"><i class="fab fa-linkedin"></i> LinkedIn Paylaş</a>
    </button>
    <nav class="collapsible-nav" id="collapsible-nav">
        <a href="{{ route('index') }}" class="nav-link {{ Route::is('index') ? 'active' : '' }}">ANASAYFA</a>
        <a href="{{ route('resume') }}" class="nav-link {{ Route::is('resume') ? 'active' : '' }}">ALANLAR</a>
        <a href="{{ route('portfolio') }}" class="nav-link {{ Route::is('portfolio') ? 'active' : '' }}">KİŞİSEL</a>
        <a href="{{ route('contact') }}" class="nav-link {{ Route::is('contact') ? 'active' : '' }}">İLETİŞİM</a>
        <a href="{{ route('login') }}" class="nav-link {{ Route::is('login') ? 'active' : '' }}">PANEL</a>
    </nav>
    <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="{{ asset('assets/images/hamburger.svg') }}" alt="hamburger"></button>
</header>
