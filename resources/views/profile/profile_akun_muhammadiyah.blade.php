@extends('layouts.layout')

@section('content')
<section id="search">
    <div class="row">
        @if (Auth::check() && Auth::user()->role == 'registered')
            <div class="col-9 col-md-10 align-item-center">
                <div class="search">
                    <input type="text" class="search-input" placeholder="Search..." name="">
                    <a href="#" class="search-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M21.7505 20.6895L16.0865 15.0255C17.4475 13.3914 18.1263 11.2956 17.9815 9.17389C17.8366 7.05219 16.8794 5.06801 15.3089 3.6341C13.7384 2.2002 11.6755 1.42697 9.54942 1.47528C7.42333 1.52359 5.39772 2.38971 3.89396 3.89347C2.3902 5.39723 1.52408 7.42284 1.47577 9.54893C1.42746 11.675 2.20068 13.7379 3.63459 15.3084C5.0685 16.8789 7.05268 17.8361 9.17438 17.981C11.2961 18.1258 13.3919 17.4471 15.026 16.086L20.69 21.75L21.7505 20.6895ZM3.00045 9.74996C3.00045 8.41494 3.39633 7.1099 4.13803 5.99987C4.87973 4.88983 5.93394 4.02467 7.16734 3.51378C8.40074 3.00289 9.75794 2.86921 11.0673 3.12966C12.3767 3.39011 13.5794 4.03299 14.5234 4.97699C15.4674 5.921 16.1103 7.12373 16.3708 8.4331C16.6312 9.74248 16.4975 11.0997 15.9866 12.3331C15.4757 13.5665 14.6106 14.6207 13.5006 15.3624C12.3905 16.1041 11.0855 16.5 9.75045 16.5C7.96085 16.498 6.24512 15.7862 4.97967 14.5207C3.71423 13.2553 3.00244 11.5396 3.00045 9.74996Z" fill="#4A5A67" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-3 col-md-2">
                <a href="{{ route('kajian.create') }}">
                    <div class="btn btn-light unggah-kajian">
                        <img src="assets/img/icon/unggah.svg"> Unggah Kajian
                    </div>
                </a>
            </div>
        @else
            <div class="search pb-3">
                <input type="text" class="search-input" placeholder="Search..." name="">
                <a href="#" class="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.7505 20.6895L16.0865 15.0255C17.4475 13.3914 18.1263 11.2956 17.9815 9.17389C17.8366 7.05219 16.8794 5.06801 15.3089 3.6341C13.7384 2.2002 11.6755 1.42697 9.54942 1.47528C7.42333 1.52359 5.39772 2.38971 3.89396 3.89347C2.3902 5.39723 1.52408 7.42284 1.47577 9.54893C1.42746 11.675 2.20068 13.7379 3.63459 15.3084C5.0685 16.8789 7.05268 17.8361 9.17438 17.981C11.2961 18.1258 13.3919 17.4471 15.026 16.086L20.69 21.75L21.7505 20.6895ZM3.00045 9.74996C3.00045 8.41494 3.39633 7.1099 4.13803 5.99987C4.87973 4.88983 5.93394 4.02467 7.16734 3.51378C8.40074 3.00289 9.75794 2.86921 11.0673 3.12966C12.3767 3.39011 13.5794 4.03299 14.5234 4.97699C15.4674 5.921 16.1103 7.12373 16.3708 8.4331C16.6312 9.74248 16.4975 11.0997 15.9866 12.3331C15.4757 13.5665 14.6106 14.6207 13.5006 15.3624C12.3905 16.1041 11.0855 16.5 9.75045 16.5C7.96085 16.498 6.24512 15.7862 4.97967 14.5207C3.71423 13.2553 3.00244 11.5396 3.00045 9.74996Z" fill="#4A5A67" />
                    </svg>
                </a>
            </div>
        @endif
    </div>
</section>

<div class="container">
    <div class="mt-5">
        <div class="kajian-profile-user d-flex">
            <img src="/assets/img/muhammadiyah-profile.png" class="img-fluid profile-image">
            <div>
                <div class="heading2 mt-4">officialmuhammadiyah</div>
                <div class="heading4">Muhammadiyah</div>
                <div class="heading5">48 Unggahan</div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <section id="kajian-home">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <p class="active_akun heading4">Unggahan Kajian Muhammadiyah</p>
                </div>
            </div>
            <div class="row">
                @if (isset($kajian))
                    @foreach ($kajian as $item)
                        <div class="col-md-4 mb-5">
                            <div class="card box-shadow">
                                <img src="{{ $item->foto_kajian }}" class="img-fluid img-kajian">
                                <div class="card-body">
                                    <div class="card-title mt-3">{{ $item->judul_kajian }}</div>
                                    <p class="card-text">{{ $item->pemateri }}</p>
                                    <div class="card-title" style="color: #04454D;">{{ $item->deskripsi_kajian }}</div>
                                    <a href="{{ route('kajian.show', ['kajian' => $item->slug]) }}" class="btn btn-view mt-2">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
</div>
@endsection

