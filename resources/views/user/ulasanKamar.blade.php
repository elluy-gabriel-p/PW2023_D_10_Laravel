@extends('user/navbar')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
            margin: 8px 8px;
            padding: 8px 8px;
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem
        }

        .card-title {
            float: left;
            font-size: 1.1rem;
            font-weight: 400;
            margin: 0;
            margin-bottom: .75rem;
        }

        .review-box {
            /* background: rgba(0, 0, 0, 0.3); */
            margin: 10px 10px;
            padding: 10px;
            border-radius: .25rem;
        }

        .review-content {
            padding: 12px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            flex-direction: column;
            gap: 16px;
        }

        .stars {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            flex-direction: row;
            gap: 4px;
            margin-bottom: 8px
        }

        .click {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin: 24px 0;
        }

        .btn-review {
            padding: 8px 12px;
            color: white;
            background-color: #3469c2;
            border-radius: 8px;
            text-decoration: none;
            font-size: 24px;
            transition: border-color 0.15s ease-in-out, color 0.15s ease-in-out, background-color 0.15s ease-in-out;
        }

        .btn-review:hover {
            background-color: #5c96e2;
            color: white;
        }

        .checked {
            color: orange;
        }

        .edit-delete-buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 16px;
        }

        .btn-edit,
        .btn-delete {
            color: #555;
            font-size: 18px;
            margin: 0 8px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-edit:hover,
        .btn-delete:hover {
            color: #3469c2;
        }
    </style>

    <div class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>REVIEW</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 card">
                    <h2 class="text-center">President Room</h2>
                    <img src="{{ asset('img/room1.png') }}" alt="Image Description">
                    <h4 class="text-center">Welcome to the Presidential Room, Where Luxury Meets Elegance. Our Most
                        Exclusive
                        Accommodation Offers Impeccable Comfort and Unparalleled Opulence. Experience the Epitome of
                        Grandeur and Unwind in Style in the Presidential Room.</h5>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-12">
                    <h2 class="text-center">REVIEW</h2>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 card">
                        <div class="review-box">
                            <div class="review-content text-center">
                                <p style="font-size: 24px">Rizki Dikta Hermanto</p>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p style="font-size: 16px">Pertama-tama, letaknya sangat strategis. Hotel ini terletak
                                    di
                                    kawasan yang teduh dan dekat dengan berbagai objek wisata terkenal. Saya sangat
                                    menghargai kemudahan akses ke tempat-tempat menarik di sekitarnya, sehingga saya
                                    bisa
                                    menghabiskan waktu dengan lebih efisien dan mendapatkan pengalaman penuh dalam
                                    perjalanan saya. Saya baru-baru ini menginap di sebuah hotel bintang 7 yang luar
                                    biasa
                                    dan saya sangat terkesan dengan pengalaman menginap saya di sana. Dari awal hingga
                                    akhir, hotel ini memenuhi semua harapan saya dan bahkan melampaui ekspektasi.
                                    Kamar yang saya tempati sangatlah nyaman dan luas. Dekorasinya modern dan elegan,
                                    menciptakan suasana yang menyenangkan dan relaksasi. Tempat tidur yang empuk dan
                                    fasilitas lainnya, seperti televisi layar datar dan akses Wi-Fi gratis, membuat saya
                                    betah berada di kamar selama berjam-jam</p>
                                <div class="edit-delete-buttons">
                                    <a href="/ubahUlasan" class="btn-edit" title="Edit Review"><i class="fa fa-pencil"></i>
                                        Edit</a>
                                    <a href="#" class="btn-delete" title="Delete Review"><i class="fa fa-trash"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 card">
                        <div class="review-box">
                            <div class="review-content text-center">
                                <p style="font-size: 24px">Alvin Dwiwasdani</p>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p style="font-size: 16px">Tempat yang nyaman dan strategis, hotel yang sangat luas di
                                    pusat
                                    kota jogja, mau kemana mana dekat, pelayanan yang ramah dan memuaskan, dan kita
                                    dapat
                                    highfloor room yang pool viwe sesuai pesanan. untuk sarapannya cukup variatif
                                    standar
                                    hotel bintang 5. Ada kegiatan anak juga di sekitar kolam renang, membuat anak2
                                    tambah
                                    gembira dengan pembawa acara yang atraktif, dan komunikatif dgn anak2 menambah
                                    pengalaman anak cara membuat kue mochi yg berasal dari jepang dan di populerkan di
                                    china. Kolam renang nya besarrr dan ada kolam renang anak yang dilengkapi permainan
                                    prosotan balon juga, sangat menyenangkan dan recomend utk staycation di
                                    jogja.pokoknya
                                    seru dan menyenangkan, ga cukup 1 malam utk menjelajahi hotel ini secara
                                    keseluruhan,
                                    next time ke sini lg..</p>
                                <div class="edit-delete-buttons">
                                    <a href="/ubahUlasan" class="btn-edit" title="Edit Review"><i class="fa fa-pencil"></i>
                                        Edit</a>
                                    <a href="#" class="btn-delete" title="Delete Review"><i class="fa fa-trash"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 card">
                        <div class="review-box">
                            <div class="review-content text-center">
                                <p style="font-size: 24px">Fadilah Ana</p>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p style="font-size: 16px">2 hari menginap di hotel Borobudur. Hotel legendaris, nuansa
                                    Indonesia yang sudah modern. Staff nya ramah, makanannya enak, kamarpun bersih, ada
                                    wahana untuk anak bermain dan berenang, jogging track nya juga nyaman dan asri
                                    ditengah
                                    kota Jogja.!</p>
                                <div class="edit-delete-buttons">
                                    <a href="/ubahUlasan" class="btn-edit" title="Edit Review"><i class="fa fa-pencil"></i>
                                        Edit</a>
                                    <a href="#" class="btn-delete" title="Delete Review"><i class="fa fa-trash"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 card">
                        <div class="review-box">
                            <div class="review-content text-center">
                                <p style="font-size: 24px">Purbiantoro Ipung</p>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p style="font-size: 16px">
                                    Rasanya spt di dunia Dongeng..kamarnya berkelas banget,Pelayanannya sangat ramah
                                    dan
                                    cepat tanggap…jd benar2 kita di sambut…spt Tamu kehormatan..pokoknya Borobudur
                                    Hotel..Yes!! Lokasinya strategis.</p>
                                <div class="edit-delete-buttons">
                                    <a href="/ubahUlasan" class="btn-edit" title="Edit Review"><i class="fa fa-pencil"></i>
                                        Edit</a>
                                    <a href="#" class="btn-delete" title="Delete Review"><i class="fa fa-trash"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="click">
                        <a href="/buatUlasan" class="btn-review">BUAT ULASAN</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
