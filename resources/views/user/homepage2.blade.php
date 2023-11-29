@extends('user.layout2')

@section('content')
<section id="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide
            2"></button> <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/Slide1.png" class="img-carousel" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/img/Slide1.png" class="img-carousel" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/img/Slide1.png" class="img-carousel" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


<section id="about">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-6 order-md-2">
                <h1>Nama Tokoh</h1>
                <p class="subtitle">
                    Deskripsi tokoh : Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nobis provident
                    sit et beatae totam ab labore? Voluptate, laborum blanditiis qui numquam quam odit rerum facilis
                    cum corporis sapiente assumenda pariatur quia, ducimus magnam. Optio sed qui incidunt ea, totam
                    dolores itaque eligendi nemo recusandae accusantium eaque soluta dicta quaerat quia, velit
                    cupiditate. Totam incidunt deserunt culpa quam. Sequi assumenda explicabo quibusdam tempora
                    possimus, illo numquam aliquam exercitationem officiis et odit, sunt animi dignissimos
                    repellendus sapiente, temporibus non ea tenetur eum accusamus officia nostrum! Eaque, dicta,
                    libero, ducimus beatae possimus exercitationem quam est quod fugit vitae reiciendis ut delectus
                    eveniet?
                </p>
            </div>
            <div class="col-md-6 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                        dy=".3em">500x500</text>
                </svg>
            </div>
        </div>
    </div>
</section>

<section id="kajian-home">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body">
                        <div class="card-title">Judul Kajian</div>
                        <p class="card-text">Deskripsi Kajian : Tafsir <br> Muhammadiyah</p>
                        <button class="btn btn-primary">View More ...</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body">
                        <div class="card-title">Judul Kajian</div>
                        <p class="card-text">Deskripsi Kajian : Kalender <br> Islam Global</p>
                        <button class="btn btn-primary">View More ...</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body">
                        <div class="card-title">Judul Kajian</div>
                        <p class="card-text">Deskripsi Kajian : Taubat Dalam <br> Tinjauan Kitab</p>
                        <button class="btn btn-primary">View More ...</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection