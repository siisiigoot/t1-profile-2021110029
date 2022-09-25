    <!-- NAVIGASI KIRI -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <a class="navbar-brand mx-lg-auto mb-lg-4" href="/">
                <span class="h3 fw-bold d-block d-lg-none">SIGIT PURNOMO</span>
                <img src="./images/_MG_1518.jpg" class="d-none d-lg-block rounded-circle" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-column text-lg-left">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Beranda' ? 'active' : '' }}" href="/">
                            <i class="bi bi-house"></i>
                            Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Keluarga' ? 'active' : '' }}" href="/keluarga">
                            <i class="bi bi-person-hearts"></i>
                            Keluarga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Pendidikan' ? 'active' : '' }}" href="/pendidikan">
                            <i class="bi bi-mortarboard"></i>
                            Pendidikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Pekerjaan' ? 'active' : '' }}" href="/pekerjaan">
                            <i class="bi bi-building"></i>
                            Pekerjaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Kutipan' ? 'active' : '' }}" href="/kutipan">
                            <i class="bi bi-chat-quote"></i>
                            Kutipan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Hubungi Saya' ? 'active' : '' }}" href="/hubungi">
                            <i class="bi bi-telephone"></i>
                            Hubungi Saya</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- //NAVIGASI KIRI -->