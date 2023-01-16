@extends('layout')
@section('content')
@include('component._navbar')
<div class="container">

    <h2 class="my-5 text-center">Top 3 Books in BukuNie</h2>
    <div class="slider-92911">
        <div class="owl-carousel slide-one-item">

            <div class="d-md-flex testimony-29101 align-items-stretch">
                <div class="image">
                    <img src="assets/img/covernya.jpg" alt="">
                </div>
                <div class="text">
                    <blockquote>
                        <p>&ldquo;Dilan : Dia Adalah Dilanku Tahun 1990” bercerita tentang kisah cinta dua remaja Bandung pada tahun 90an. Berawal dari seorang siswa bernama Dilan yang jatuh cinta dengan siswi pindahan dari SMA di Jakarta bernama Milea. Dilan memiliki beragam cara untuk mendekati dan mencuri perhatian Milea&rdquo;</p>

                        <div class="author">&mdash; Jean Stephen</div>
                    </blockquote>
                </div>
            </div> <!-- .item -->

            <div class="d-md-flex testimony-29101 align-items-stretch">
                <div class="image">
                    <img src="assets/img/milea.jpeg" alt="">
                </div>
                <div class="text">
                    <blockquote>
                        <p>&ldquo;Novel “Milea suara dari Dilan” temanya pun tentang percintaan namun dari sisi tokoh Dilannya, menceritakan dari awal bertemu hingga berpisah, dan mengklarifikasi kejadian yang di anggap buruk oleh Milea, pada novel pertama dan kedua.&rdquo;</p>

                        <div class="author">&mdash; Julia Smith</div>
                    </blockquote>
                </div>
            </div> <!-- .item -->

            <div class="d-md-flex testimony-29101 align-items-stretch">
                <div class="image">
                    <img src="assets/img/dilan1991.jpg" alt="">
                </div>
                <div class="text">
                    <blockquote>
                        <p>&ldquo;Novel Dilan 1991 mempunyai tema utama percintaan anak remaja SMA, harapan yang tidak sesuai kenyataan, dan hidup yang masih menjadi misteri. Karena Dilan dan Milea tidak berjodoh di masa depan.&rdquo;</p>

                        <div class="author">&mdash; Julia Smith</div>
                    </blockquote>
                </div>
            </div> <!-- .item -->
        </div>
        <div class="my-5 text-center">
            <ul class="thumbnail">
                <li><a href="#"><img src="assets/img/number-one.png" alt="Image" class="img-fluid"></a></li>
                <li><a href="#"><img src="assets/img/number-2.png" alt="Image" class="img-fluid"></a></li>
                <li><a href="#"><img src="assets/img/number-3.png" alt="Image" class="img-fluid"></a></li>
            </ul>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

</div>

@endsection