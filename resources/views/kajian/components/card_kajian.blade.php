<div class="col-md-4 mb-5 kajian-item">
    <div class="card box-shadow card-hover"
        data-title="{{ $item->judul_kajian }}"
        data-pemateri="{{ $item->pemateri }}"
        data-deskripsi="{{ strip_tags($item->deskripsi_kajian) }}"
        data-kategori="{{ $item->kategori }}">
        <img src="{{ asset('storage/' . $item->foto_kajian) }}" class="img-fluid img-card-kajian">
        <div class="card-kajian-body">
            <div class="card-kajian-title mt-3">{{ $item->judul_kajian }}</div>
            <p class="card-kajian-text">
                {{ Str::words(strip_tags($item->deskripsi_kajian), 12, '...') }}
            </p>
            <div class="card-kajian-category">
                ##
                @isset($item->topikKajians)
                    @forelse($item->topikKajians as $topik)
                        {{ $topik->nama }}
                    @empty
                        Umum
                    @endforelse
                @else
                    Umum
                @endisset
            </div>
            <a href="{{ route('kajian.show', ['kajian' => $item->slug]) }}" class="btn btn-view mt-2">Lihat Selengkapnya</a>
            @isset($showDelete)
                <a href="{{ route('kajian.destroy', ['kajian' => $item->id]) }}" class="btn btn-danger mt-2">
                    <i class="fa fa-trash"></i>
                </a>
            @endisset
        </div>
    </div>
</div>
