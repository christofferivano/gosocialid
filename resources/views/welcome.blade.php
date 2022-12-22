@extends('layouts.navbar')

@section('content')
<div class="py-4" style="background-color: #ebf2ff">
    <div class="card mb-3 mx-4" style="">
        <div class="row row-cols-3 align-items-center border-bottom mx-2">
            <div class="col-3">
                <img src="/assets/user.png" alt="user" class="mx-auto d-block img-fluid py-2">
            </div>
            <div class="col-6">
                <div class="card-body">
                    <h5 class="card-title">Isabella Fina</h5>
                    <p class="card-text" style="font-size: 12px"><img src="/assets/location.png" class="" style="max-width: 14px; margin-right: 5px">Surabaya</p>
                </div>
            </div>
            <div class="col-3 justify-content-center px-2">
                <button type="button " class="btn" style="background-color: #ebf2ff; max-height: 40px;">
                    <p class="font-weight-bolder" style="color: #377DFF; font-weight: bold; font-size: 14px">
                        Booster
                    </p>
                </button>
            </div>
        </div>
        <div class="row row-cols-2 align-items-center m-2">
            <div class="col-7">
                <p style="padding-bottom: 0">Saldo kamu</p>
                <h3 style="color: #377DFF; font-weight: bold;"><img src="/assets/wallet-blue.png" class="w-auto" style="max-height: 18px; margin-right: 10px">Rp. 234.000</h2>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <a href="#" class="btn btn-primary" style="background-color: #377DFF; font-size: 10px"><img src="/assets/arrow.png" class="w-auto" style="max-height: 12px; margin-right: 10px">Tarik Saldo</a>
            </div>
        </div>
    </div>
</div>

<div class="m-4">
    <h5 class="info" style="font-weight: 700">
        Lengkapi informasi akun kamu
    </h5>
    <div class="container">   
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="card swiper-slide" style="width: 18rem; background-color: #21325B">
                    <div class="card-body">
                        <div class="row row-cols-2 align-items-center">
                            <div class="col-8" style="color: #ffffff">
                                <img src="/assets/instagram-white.png" class="phone w-auto" style="margin-left: 6px">
                                <p class="akun" style="">
                                    Akun Media Sosial
                                </p>
                            </div>
                            <div class="col-4">
                                <img src="/assets/progress.png" class="w-auto" style="max-height: 40px; margin-left: 6px">
                            </div>
                        </div>
                        <p class="card-text" style="color: #ffffff;">
                            Isi nama akun media sosial kamu atau hubungkan dengan Flooin
                        </p>
                    </div>
                </div>
                <div class="card swiper-slide" style="width: 18rem; background-color: #21325B">
                    <div class="card-body">
                        <div class="row row-cols-2 align-items-center">
                            <div class="col-8" style="color: #ffffff">
                                <img src="/assets/phone.png" class="phone w-auto" style="margin-left: 6px">
                                <p class="akun" style="">
                                    Akun Flooin
                                </p>
                            </div>
                            <div class="col-4">
                                <img src="/assets/progress.png" class="w-auto" style="max-height: 40px; margin-left: 6px">
                            </div>
                        </div>
                        <p class="card-text" style="color: #ffffff;">
                            Isi data email dan nomor HP kamu agar akun lebih aman
                        </p>
                    </div>
                </div>
                <div class="card swiper-slide" style="width: 18rem; background-color: #21325B">
                    <div class="card-body">
                        <div class="row row-cols-2 align-items-center">
                            <div class="col-8" style="color: #ffffff">
                                <img src="/assets/phone.png" class="phone w-auto" style="margin-left: 6px">
                                <p class="akun" style="">
                                    Kategori Akun
                                </p>
                            </div>
                            <div class="col-4">
                                <img src="/assets/progress.png" class="w-auto" style="max-height: 40px; margin-left: 6px">
                            </div>
                        </div>
                        <p class="card-text" style="color: #ffffff;">
                            Isi kategori untuk terhubung lebih mudah dengan brand
                        </p>
                    </div>
                </div>
                <div class="card swiper-slide" style="width: 18rem; background-color: #21325B">
                    <div class="card-body">
                        <div class="row row-cols-2 align-items-center">
                            <div class="col-8" style="color: #ffffff">
                                <img src="/assets/phone.png" class="phone w-auto" style="margin-left: 6px">
                                <p class="akun" style="">
                                    Rekening Bank
                                </p>
                            </div>
                            <div class="col-4">
                                <img src="/assets/progress.png" class="w-auto" style="max-height: 40px; margin-left: 6px">
                            </div>
                        </div>
                        <p class="card-text" style="color: #ffffff;">
                            Isi nomor rekening kamu untuk melakukan penarikan saldo
                        </p>
                    </div>
                </div>
                <div class="card swiper-slide" style="width: 18rem; background-color: #21325B">
                    <div class="card-body">
                        <div class="row row-cols-2 align-items-center">
                            <div class="col-8" style="color: #ffffff">
                                <img src="/assets/phone.png" class="phone w-auto" style="margin-left: 6px">
                                <p class="akun" style="">
                                    Tipe Akun
                                </p>
                            </div>
                            <div class="col-4">
                                <img src="/assets/progress.png" class="w-auto" style="max-height: 40px; margin-left: 6px">
                            </div>
                        </div>
                        <p class="card-text" style="color: #ffffff;">
                            Lihat dan lengkapi data tipe akun untuk naik level
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>

<div class="card mx-4" style="width: full;">
    <div class="border-bottom">
        <img src="/assets/job.png" class="job card-img-top mx-auto d-block img-fluid mt-4" alt="job" style="max-width: 40%">
        <div class="card-body">
            <h5 class="card-title text-center" style="font-size: 28px; font-weight: 600;">
                Hallo Isabella, selamat atas progress kamu ya!!
            </h5>
            <p class="card-text text-center">
                Profil kamu mulai berkembang. Terus ambil Job dan dapatkan saldo dan peningkatan kategori influencer!   
            </p>
        </div>
        <h5 class="text-center" style="font-size: 14px; font-weight: 700; color: #8C98A4">BRAND YANG KAMU BANTU</h5>
        <img src="/assets/brands.png" class="brands card-img-top mx-auto d-block img-fluid mb-4" alt="brands" style="max-width: 40%">
    </div>
    <div class="row row-cols-3 align-items-center">
        <div class="col text-center">
            <p style="color: #377DFF; font-size:28px; font-weight:600">7</p>
            <h5 style="color: #677788; font-size: 12px">Job</h5>
        </div>
        <div class="text-center border border-top-0 border-bottom-0">
            <p style="color: #09A5BE; font-size:28px; font-weight:600">7</p>
            <h5 style="color: #677788; font-size: 12px">Job Berlangsung</h5>
        </div>
        <div class="text-center">
            <p style="color: #00C9A7; font-size:28px; font-weight:600">7</p>
            <h5 style="color: #677788; font-size: 12px">Job Selesai</h5>
        </div>
    </div>
</div>

<h4 class="mx-4 mt-4" style="font-weight: 700">
    Pilihan Job yang lagi trending
</h4>
<div class="card mx-4 mb-4 mt-2" style="width: full;">
    <img src="/assets/trending-job.png" class="card-img-top" alt="trending-job">
    <div class="card-body">
        <div class="row row-cols-2 align-items-center mb-4">
            <div class="col-2">
                <img src="/assets/labore.png" class="img-fluid" alt="labore">
            </div>
            <div class="col-10">
                <h5 class="labore m-0" style="color: #377DFF; font-weight: 600">
                    Labore New Campaign
                </h5>
                <p style="color: #8C98A4">
                    Job dipost 1 jam yang lalu oleh <span style="font-weight: 600">Labore</span>
                </p>
            </div>
        </div>
        <div class="row row-cols-3 align-items-center pb-4 border-bottom">
            <div class="col-6">
                <h5 class="m-0 mt-2 text-uppercase" style="color: #8C98A4; font-weight: 600; font-size: 10px">
                    Penghasilan hingga
                </h5>
                <p class="" style="color: #000000; font-size: 20px; font-weight: 600">
                    Rp. 1.000
                </p>
            </div>
            <div class="col-3">
                <h5 class="m-0 text-uppercase" style="color: #8C98A4; font-weight: 600; font-size: 10px">
                    Tugas
                </h5>
                <p href="#" class="" style="font-size: 14px; font-weight: 600;"><img src="/assets/like.png" class="w-auto" style="max-height: 14px; margin-right: 6px">Like</p>
            </div>
            <div class="col-3">
                <h5 class="m-0 text-uppercase" style="color: #8C98A4; font-weight: 600; font-size: 10px">
                    Kuota
                </h5>
                <p class="" style="color: #8C98A4; font-weight: 600; font-size: 14px;">
                    <span style="color: #00C9A7">10</span> / 100
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <div class="row align-items-center">
                <p href="#" class="" style="font-size: 14px; font-weight: 600;">Channel<img src="/assets/instagram.png" class="w-auto" style="max-height: 14px; margin-left: 6px"></p>
            </div>
            <a href="" style="text-decoration: none">Selengkapnya</a>
        </div>
    </div>
</div>
@endsection
