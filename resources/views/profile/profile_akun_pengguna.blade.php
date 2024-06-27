@extends('layouts.layout')

@section('content')
    <section id="search">
        <div class="row">
            @if (Auth::check() && Auth::user()->isRegistered())
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
                            <img src="\assets\img\icon\unggah.svg">Unggah Kajian
                        </div>
                    </a>
                </div>
            @else
                <div class="col-12">
                    <div class="search pb-3">
                        <input type="text" class="search-input" placeholder="Search..." name="">
                        <a href="#" class="search-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21.7505 20.6895L16.0865 15.0255C17.4475 13.3914 18.1263 11.2956 17.9815 9.17389C17.8366 7.05219 16.8794 5.06801 15.3089 3.6341C13.7384 2.2002 11.6755 1.42697 9.54942 1.47528C7.42333 1.52359 5.39772 2.38971 3.89396 3.89347C2.3902 5.39723 1.52408 7.42284 1.47577 9.54893C1.42746 11.675 2.20068 13.7379 3.63459 15.3084C5.0685 16.8789 7.05268 17.8361 9.17438 17.981C11.2961 18.1258 13.3919 17.4471 15.026 16.086L20.69 21.75L21.7505 20.6895ZM3.00045 9.74996C3.00045 8.41494 3.39633 7.1099 4.13803 5.99987C4.87973 4.88983 5.93394 4.02467 7.16734 3.51378C8.40074 3.00289 9.75794 2.86921 11.0673 3.12966C12.3767 3.39011 13.5794 4.03299 14.5234 4.97699C15.4674 5.921 16.1103 7.12373 16.3708 8.4331C16.6312 9.74248 16.4975 11.0997 15.9866 12.3331C15.4757 13.5665 14.6106 14.6207 13.5006 15.3624C12.3905 16.1041 11.0855 16.5 9.75045 16.5C7.96085 16.498 6.24512 15.7862 4.97967 14.5207C3.71423 13.2553 3.00244 11.5396 3.00045 9.74996Z" fill="#4A5A67" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <div class="container mt-5">
        <div class="kajian-profile-user d-flex">
            @if($user->foto_profile != null)
                <img src="{{ asset('storage/' . $user->foto_profile) }}" alt="profile_picture" class="img-fluid profile-image">
            @else
                <img src="/assets/img/foto_default.png" alt="profile_picture" class="img-fluid profile-image">
            @endif
            <div>
                <div class="heading2 mt-4">{{ $user->username }}</div>
                <div class="heading4">{{ $user->nama }}</div>
                <div class="heading5">{{ $kajianCount }} Unggahan</div>
            </div>
        </div>

        <section id="kajian-home">
            <div class="container mt-4">
                <div class="row">
                    <ul class="nav nav-tabs" id="TabProfile" role="tablist">
                        <li class="col-md-6 nav-item tab-profile mb-4 text-center">
                            <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">UNGGAHAN ASLI</a>
                        </li>
                        <li class="col-md-6 nav-item tab-profile mb-4 text-center">
                            <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">UNGGAHAN KOLABORASI</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="TabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="container">
                            <div class="row">
                                @foreach ($originalKajian as $item)
                                    @include('kajian.components.card_kajian', ['item' => $item])
                                @endforeach
                            </div>
                            <div class="d-flex justify-content-center">
                                {!! $originalKajian->links('pagination.custom') !!}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade mt-4" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <div class="row">
                            @foreach ($collaborativeKajian as $item)
                                @include('kajian.components.card_kajian', ['item' => $item, 'showDelete' => true])
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-center">
                            {!! $collaborativeKajian->links('pagination.custom') !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

