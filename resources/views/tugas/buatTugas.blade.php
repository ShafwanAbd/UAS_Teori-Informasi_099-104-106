@extends('layouts.layoutRPL_main')

@section('content')
    <div class="buatTugas signup">
        <h1>Buat Jobs</h1>
            <form action="{{ url('tugas') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col">
                        <h3>Kelas</h3>
                    </div>
                    <div class="col"> 
                        <input type="text" name="kelas" list="datakelas" class="form-control" placeholder="Write Your Kategori ...">
                        <datalist id="datakelas">
                            <option value="Grafis dan Desain">Grafis dan Desain</option>
                            <option value="Penulisan dan Penerjemahan">Penulisan dan Penerjemahan</option>
                            <option value="Web dan Pemrograman">Web dan Pemrograman</option>
                            <option value="Visual dan Audio">Visual dan Audio</option>
                            <option value="Pemasaran dan Periklanan">Pemasaran dan Periklanan</option>
                            <option value="Jasa Konsultasi">Jasa Konsultasi</option>
                        </datalist>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <h3>Kategori</h3>
                    </div>
                    <div class="col">
                        <input type="text" name="kategori" list="datakategori" class="form-control" placeholder="Write Your Kategori ...">
                        <datalist id="datakategori">
                            <option value="Logo">Logo</option>
                            <option value="Desain Web">Desain Web</option>
                            <option value="Banner">Banner</option>
                            <option value="Penerjemahan">Penerjemahan</option>
                            <option value="Penulis Konten">Penulis Konten</option>
                            <option value="Entry Data">Entry Data</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Aplikasi Ponsel">Aplikasi Ponsel</option>
                            <option value="Pembuatan Game">Pembuatan Game</option>
                            <option value="Fotografi">Fotografi</option>
                            <option value="Video Editing">Video Editing</option>
                            <option value="Produksi Video">Produksi Video</option>
                            <option value="Blogger">Blogger</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Riset Pemasaran">Riset Pemasaran</option>
                            <option value="Mulai Bisnis">Mulai Bisnis</option>
                            <option value="Hukum">Hukum</option>
                            <option value="Analisis Data">Analisis Data</option>
                        </datalist>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <h3>Deskripsi</h3>
                    </div>
                    <div class="col">
                        <input type="text" name="deskripsi" class="form-control" placeholder="Write Your Deskripsi ...">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <h3>Deadline</h3>
                    </div>
                    <div class="col">
                        <input type="text" name="deadline" class="form-control" placeholder="Write Your Deadline ...">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <h3>Bayaran</h3>
                    </div>
                    <div class="col">
                        <input type="text" name="harga" class="form-control" placeholder="Write Your Harga ...">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <h3>Photo Tugas</h3>
                    </div>
                    <div class="col">
                        <input type="file" name="photo" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
@endsection