@extends('layouts.layoutRPL_main')

@section('content')
    <div class="home_main">
        @if(Session::has('success'))
        <p class="alert alert-success" id="sixSeconds">{{ Session::get('success') }}</p>
        @endif
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/imgslide1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/imgslide2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/imgslide3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> 
        </div>

        <h1>No Worries to Overload Work Anymore!</h1>
            
        <h2 class="title-jurusan">Kelas</h2>
        <div class="jurusanTugas">
            <div class="row">
                <a class="item" href="{{ url('tugas?keywordFakultas=Grafis dan Desain') }}">
                        <div class="q">
                            <img src="./img/fakultas/fkip.jpg">
                        </div>
                        <h4>Grafis dan Desain</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordFakultas=Penulisan dan Penerjemahan') }}">
                        <div class="q">
                            <img src="./img/fakultas/kesehatan.jpg">
                        </div>
                        <h4>Penulisan dan Penerjemahan</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordFakultas=Web dan Pemrograman') }}">
                        <div class="q">
                            <img src="./img/fakultas/ilpol.jpg">
                        </div>
                        <h4>Web dan Pemrograman</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordFakultas=Visual dan Audio') }}">
                        <div class="q">
                            <img src="./img/fakultas/pertanian.jpg">
                        </div>
                        <h4>Visual dan Audio</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordFakultas=Pemasaran dan Periklanan') }}">
                        <div class="q">
                            <img src="./img/fakultas/ekonomi.jpg">
                        </div>
                        <h4>Pemasaran dan Periklanan</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordFakultas=Jasa Konsultasi') }}">
                        <div class="q">
                            <img src="./img/fakultas/teknik.jpg">
                        </div>
                        <h4>Jasa Konsultasi</h4>
                </a>
            </div>
        </div>

        <h2 class="title-jurusan">Kategori</h2>
        <div class="jurusanTugas">
            <div class="row">
                <a class="item" href="{{ url('tugas?keywordJurusan=Logo') }}">
                        <div class="q">
                            <img src="./img/jurusan/pendidikanMasyarakat.jpg">
                        </div>
                        <h4>Logo</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Desain Web') }}">
                        <div class="q">
                            <img src="./img/jurusan/pendidikanBahasaIndonesia.jpg">
                        </div>
                        <h4>Desain Web</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Banner') }}">
                        <div class="q">
                            <img src="./img/jurusan/pendidikanBahasaInggris.jpg">
                        </div>
                        <h4>Banner</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Penulis Konten') }}">
                        <div class="q">
                            <img src="./img/jurusan/pendidikanMatematika.jpg">
                        </div>
                        <h4>Penulis Konten</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Entry Data') }}">
                        <div class="q">
                            <img src="./img/jurusan/pendidikanBiologi.jpg">
                        </div>
                        <h4>Entry Data</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Aplikasi Ponsel') }}">
                        <div class="q">
                            <img src="./img/jurusan/kesehatanMasyarakat.jpg">
                        </div>
                        <h4>Aplikasi Ponsel</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Web Development') }}">
                        <div class="q">
                            <img src="./img/jurusan/gizi.jpg">
                        </div>
                        <h4>Web Development</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Pembuatan Game') }}">
                        <div class="q">
                            <img src="./img/jurusan/ilmuPolitik.jpg">
                        </div>
                        <h4>Pembuatan Game</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Fotografi') }}">
                        <div class="q">
                            <img src="./img/jurusan/agribisnis.jpg">
                        </div>
                        <h4>Fotografi</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Video Editing') }}">
                        <div class="q">
                            <img src="./img/jurusan/agroteknologi.jpg">
                        </div>
                        <h4>Video Editing</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Produksi Video') }}">
                        <div class="q">
                            <img src="./img/jurusan/ekonomiPembangunan.jpg">
                        </div>
                        <h4>Produksi Video</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Blogger') }}">
                        <div class="q">
                            <img src="./img/jurusan/ekonomiManajemen.jpg">
                        </div>
                        <h4>Blogger</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Digital Marketing') }}">
                        <div class="q">
                            <img src="./img/jurusan/ekonomiAkuntansi.jpg">
                        </div>
                        <h4>Digital Marketing</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Riset Pemasaran') }}">
                        <div class="q">
                            <img src="./img/jurusan/ekonomiKeuanganDanPerbankan.jpg">
                        </div>
                        <h4>Riset Pemasaran</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Mulai Bisnis') }}">
                        <div class="q">
                            <img src="./img/jurusan/teknikSipil.jpg">
                        </div>
                        <h4>Mulai Bisnis</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Hukum') }}">
                        <div class="q">
                            <img src="./img/jurusan/teknikElektro.jpg">
                        </div>
                        <h4>Hukum</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=Analisis Data') }}">
                        <div class="q">
                            <img src="./img/jurusan/informatika.jpg">
                        </div>
                        <h4>Analisis Data</h4>
                </a>
            </div>
        </div>

    </div>
    
<footer>
    <div class="isi">
        <a href="https://www.freepik.com/free-vector/qa-engineers-concept-illustration_7119020.htm#query=technic&position=0&from_view=author">Image by storyset</a> on Freepik
        <p>Created by Muhammad Shafwan Abdullah & Zulfan Syahidan Alfarra</p>
    </div>
</footer>
    
@endsection