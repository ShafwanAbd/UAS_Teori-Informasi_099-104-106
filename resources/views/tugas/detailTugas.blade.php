@extends('layouts.layoutRPL_main')

@section('head')
@endsection

@section('content')
    <div class="container-detailTugas">
        @if(Session::has('success'))
            <p class="alert alert-success" id="sixSeconds">{{ Session::get('success') }}</p>
        @endif
        <div class="row">
            <div class="col left-side">
            @if ( strlen($model->photo) > 0)
                <img src="{{ asset('./photoTugas/'.$model->photo) }}">
            @elseif ( $model->jurusan  == "Pendidikan Masyarakat")
                <img src="{{ asset('img/jurusan/pendidikanMasyarakat.jpg') }}">
            @elseif ( $model->jurusan  == "Pendidikan Bahasa Indonesia")
                <img src="{{ asset('img/jurusan/pendidikanBahasaIndonesia.jpg')}}">
            @elseif ( $model->jurusan  == "Pendidikan Bahasa Inggris")
                <img src="{{ asset('./img/jurusan/pendidikanBahasaInggris.jpg')}}">
            @elseif ( $model->jurusan  == "Pendidikan Matematika")
                <img src="{{ asset('./img/jurusan/pendidikanMatematika.jpg')}}">
            @elseif ( $model->jurusan  == "Pendidikan Biologi")
                <img src="{{ asset('./img/jurusan/pendidikanBiologi.jpg')}}">
            @elseif ( $model->jurusan  == "Kesehatan Masyarakat")
                <img src="{{ asset('./img/jurusan/kesehatanMasyarakat.jpg')}}">
            @elseif ( $model->jurusan  == "Gizi")
                <img src="{{ asset('./img/jurusan/gizi.jpg')}}">
            @elseif ( $model->jurusan  == "Ilmu Politik")
                <img src="{{ asset('./img/jurusan/ilmuPolitik.jpg')}}">
            @elseif ( $model->jurusan  == "Agribisnis")
                <img src="{{ asset('./img/jurusan/agribisnis.jpg')}}">
            @elseif ( $model->jurusan  == "Agroteknologi")
                <img src="{{ asset('./img/jurusan/agroteknologi.jpg')}}">
            @elseif ( $model->jurusan  == "Ekonomi Pembangunan")
                <img src="{{ asset('./img/jurusan/ekonomiPembangunan.jpg')}}">
            @elseif ( $model->jurusan  == "Ekonomi Manajemen")
                <img src="{{ asset('./img/jurusan/ekonomiManajemen.jpg')}}">
            @elseif ( $model->jurusan  == "Ekonomi Akuntansi")
                <img src="{{ asset('./img/jurusan/ekonomiAkuntansi.jpg')}}">
            @elseif ( $model->jurusan  == "Ekonomi Keuangan Dan Perbankan")
                <img src="{{ asset('./img/jurusan/ekonomiKeuanganDanPerbankan.jpg')}}">
            @elseif ( $model->jurusan  == "Teknik Sipil")
                <img src="{{ asset('./img/jurusan/teknikSipil.jpg')}}">
            @elseif ( $model->jurusan  == "Teknik Elektro")
                <img src="{{ asset('./img/jurusan/teknikElektro.jpg')}}">
            @elseif ( $model->jurusan  == "Informatika")
                <img src="{{ asset('./img/jurusan/informatika.jpg')}}">
            @else
                <img src=" {{ asset('./img/book1.png') }}">
            @endif
            </div>
            <div class="col right-side">
                <div class="q"> 
                    <h1>{{ $model->kelas }}</h1>
                    <h4>{{ $model->kategori }}</h4>
                    <h5>{{ $model->owner }}</h5>
                </div>
                <div class="w">
                    <p>{{ $model->deskripsi }}</p>
                </div>
                <div class="e">
                    <p class="harga">Bayaran: {{ @money($model->harga) }}</p>
                    <p class="harga small-top-margin">Deadline: {{ $model->deadline }}</p>
                </div>
                @if($model->owner == $user->name)
                    <div class="user-on">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary button-hapus" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Hapus
                        </button>
                        <a class="btn" href="{{ url('tugas/'.$model->id.'/edit') }}">Edit</a>
                        <a class="btn" href="{{ url('konfirmasi/'.$model->id) }}">Konfirmasi</a>
                    </div>
                @else
                    @if(Auth::user()->name == "ADMIN")
                        <button type="button" class="btn btn-primary button-hapus" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Hapus Tugas
                        </button>
                    @else
                    <div class="r2">
                        @if ($konfirmasi_value == 1)
                            <a class="btn disabled">Menunggu Konfirmasi</a>
                            @if ($konfirmasi->done == 1)
                                <a class="btn done" data-bs-toggle="modal" data-bs-target="#exampleModal2">Done <img src="{{ asset('img/list 1 white.png') }} "></a>
                            @endif
                        @elseif ($konfirmasi_value == 2)
                            <a class="btn" href="{{ url('kirimTugas/'.$konfirmasi->id.'/edit') }}">Kirim Tugas</a>
                            @if ($konfirmasi->done == 1)
                                <a class="btn done" data-bs-toggle="modal" data-bs-target="#exampleModal2">Done <img src="{{ asset('img/list 1 white.png') }} "></a>
                            @endif
                        @elseif ($konfirmasi_value == 3)
                            <a class="btn disabled">Menunggu Bayaran</a>
                            @if ($konfirmasi->done == 1)
                                <a class="btn done" data-bs-toggle="modal" data-bs-target="#exampleModal2">Done <img src="{{ asset('img/list 1 white.png') }} "></a>
                            @endif
                        @else
                            <a class="btn" href="{{ url('konfirmasi/'.$model->id.'/edit') }}">Kerjakan</a>
                            @if(isset($konfirmasi->done) ? true : false)
                                @if ($konfirmasi->done == 1)
                                    <a class="btn done" data-bs-toggle="modal" data-bs-target="#exampleModal2">Done <img src="{{ asset('img/list 1 white.png') }} "></a>
                                @endif
                            @endif
                        @endif
                    </div>
                    @endif
                @endif
            </div>
        </div>
        <div class="contact">
            <h1>Contact Owner</h1>
            <div class="contact-isi">
                <div class="left">
                    @if ($owner)
                        @if (strlen($owner->photo) > 0)
                            <img src="{{ asset('./photoUser/'.$owner->photo) }}">
                        @else
                            <img src="{{ asset('./img/profile.png')}}">
                        @endif
                    @else
                        <img src="{{ asset('./img/profile.png')}}">
                    @endif
                </div>
                <div class="middle">
                    @if ($owner)
                        <a href="{{ url('user/'.$owner->id) }}"><h1>{{ $model->owner }}</h1></a>
                    @else
                        <a href="#"><h1>{{ $model->owner }}</h1></a>
                    @endif
                    <h3>{{ $model->fakultas }}</h3>
                    <h3>{{ $model->jurusan }}</h3>
                </div>
                <div class="right">
                    @if($model->whatsapp)
                    <a href="{{ 'https://wa.me/+'.$model->whatsapp }}">
                        <div class="pot first">
                            <img src="{{ asset('./img/whatsapp.png')}}">
                        </div>
                    </a>
                    @else
                    <div>
                        <div class="pot disabled first">
                            <img src="{{ asset('./img/whatsapp.png')}}">
                        </div>
                    </div>
                    @endif
                    @if($model->instagram)
                    <a href="{{ 'https://www.instagram.com/'.$model->instagram.'/' }}">
                        <div class="pot">
                            <img src="{{ asset('./img/instagram.png')}}">
                        </div>
                    </a>
                    @else
                    <div>
                        <div class="pot disabled">
                            <img src="{{ asset('./img/instagram.png')}}">
                        </div>
                    </div>
                    @endif
                    @if($model->email)
                    <a href="{{ 'https://mail.google.com/mail/u/0/#search/'.$model->email }}">
                        <div class="pot">
                            <img src="{{ asset('./img/email.png')}}">
                        </div>
                    </a>
                    @else
                    <div>
                        <div class="pot disabled" >
                            <img src="{{ asset('./img/email.png')}}">
                        </div>
                    </div>
                    @endif
                    
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">CAUTION</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Untuk Menghapus Tugas?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn tidak" data-bs-dismiss="modal">Tidak</button>
                        <form method="POST" action="{{ url('tugas/'.$model->id) }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn yakin" type="submit" href="{{ url('tugas/'.$model->id) }}">Yakin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel2">Selamat</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Silahkan Tunggu Sampai Admin Membayar Bayaran Anda, Happy Joki :)
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn tidak">Hubungi Admin</a>
                        <button type="button" class="btn yakin" data-bs-dismiss="modal">Oke</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection