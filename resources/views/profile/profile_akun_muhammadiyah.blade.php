@extends('layouts.layout')

@section('content')
<section id="search">
    <div class="row">
        @if (Auth::user() != null && Auth::user()->isRegistered())
        <div class="col-9 col-md-10 align-item-center">
            <div class="search">
                <input type="text" class="search-input" placeholder="Search..." id="searchInput">
                <a href="#" class="search-icon">
                    <img src="assets\img\icon\search-icon.svg">
                </a>
            </div>
        </div>
        <div class="col-3 col-md-2">
            <a href="{{ route('kajian.create') }}">
                <div class="btn btn-light unggah-kajian">
                    <img src="assets\img\icon\unggah.svg">Unggah Kajian
                </div>
            </a>
        </div>
        @else
        <div class="search pb-3">
            <input type="text" class="search-input" placeholder="Search..." id="searchInput">
            <a href="#" class="search-icon">
                <img src="assets\img\icon\search-icon.svg">
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
                <div class="col-12 text-center mb-4 border_active">
                    <p class="heading4">Kajian Muhammadiyah</p>
                </div>
            </div>
            @if (isset($kajian))
                <div class="row" id="kajianMuhammadiyahProfile">
                    @foreach ($kajian as $item)
                        @include('kajian.components.card_kajian', ['item' => $item, 'showDelete' => true])
                    @endforeach
                </div>
                <div class="d-flex justify-content-center paginationKajianTerkini">
                    {!! $kajian->appends(request()->except('page'))->links('pagination.custom') !!}
                </div>
            @endif
        </div>
    </section>
</div>

<div class="container">
    <div id="noResults" class="d-none text-center mt-3">
        Tidak ada hasil ditemukan
    </div>
</div>
@endsection

