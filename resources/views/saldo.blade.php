@extends('layouts.navbar-saldo')

@section('content')
<div class="d-flex justify-content-between align-items-center py-2 border-bottom">
    <img src="/assets/back.png" alt="back" class="img-fluid" style="max-width: 20px">
    <span class="d-flex align-items-center" style="font-size: 24px; font-weight: 700;">
        <img src="/assets/wallet.png" alt="wallet" class="img-fluid" style="max-width: 24px; margin-right: 8px">
        Saldo
    </span>
    <img src="/assets/account.png" alt="account" class="img-fluid" style="max-width: 20px">
</div>

<div class="rounded mt-4" style="background-image: url('assets/background.png'); background-repeat: no-repeat; background-size: cover">
    <div class="d-flex justify-content-between mx-4">
        <div class="py-5">
            <h5 class="a" style="font-size: 24px; font-weight: 700">
                Rp. 234.000
            </h5>
            <span style="color: #377DFF; font-size: 20px; font-weight: 700">
                Isabella Finna
            </span>
        </div>
        <div class="pt-2">
            <div class="rounded-pill" style="background-color: #00C9A7; width: 50px">
                <p class="text-center" style="color: white; font-size: 12px;">
                    Aktif
                </p>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-between py-4">
    <div class="d-flex justify-content-between">
        <a href="#" class="btn btn-primary" style="background-color: #377DFF; font-size: 10px"><img src="/assets/arrow.png" class="w-auto" style="max-height: 12px; margin-right: 10px">Tarik Saldo</a>
    </div>
    <div class="d-flex justify-content-between">
        <a href="#" class="btn btn-outline-primary" style="font-size: 10px">
            <img src="/assets/wallet-blue.png" class="w-auto" style="max-height: 12px; margin-right: 10px">
            Cari job & tambah saldo
        </a>
    </div>
</div>

<div class="card">
    <div class="border-bottom">
        <div class="card-body">
            <span style="font-size: 18px; font-weight: 700">Akun Bank Kamu</span>
        </div>
    </div>
    <div class="card-body">
        <span style="font-size: 14px; color: #677788">
            Untuk melakukan penarikan saldo, bisa dilakukan menggunakan akun bank yang telah dimasukkan dalam akun Flooin kamu. 
        </span>
        <div class="mt-3 card-body border rounded">
            <div class="d-flex justify-content-between">
                <h5 style="font-weight: 700">
                    Isabella Finna
                </h5>
                <div class="rounded-pill" style="background-color: #377DFF; width: 80px; height: 24px">
                    <p class="text-center text-uppercase" style="color: white; font-size: 12px;">
                        Utama
                    </p>
                </div>
            </div>
            <div class="row row-cols-2 py-2">
                <div class="col-4">
                    <img src="/assets/mastercard.png" alt="" class="img-fluid" style="max-width: 72px">
                </div>
                <div class="col-8">
                    <span style="font-weight: 600">
                        Bank BCA **** 4242
                    </span>
                    <span style="color: #8C98A4; font-size: 10px">
                        Ditambahkan sekitar 2 bulan yang lalu
                    </span>
                    <div class="row row-cols-2 mx-1 mt-1">
                        <button type="button" class="btn btn-outline-secondary" style="width: 80px; font-size: 12px; margin-right: 8px">
                            Edit
                        </button>
                        <button type="button" class="btn btn-outline-secondary" style="width: 80px; font-size: 12px">
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body border rounded">
            <h5 style="font-weight: 700">
                Isabella Finna
            </h5>
            <div class="row row-cols-2 py-2">
                <div class="col-4">
                    <img src="/assets/visa.png" alt="" class="img-fluid" style="max-width: 72px">
                </div>
                <div class="col-8">
                    <span style="font-weight: 600">
                        Bank BRI **** 9016
                    </span>
                    <span style="color: #8C98A4; font-size: 10px">
                        Ditambahkan sekitar 2 bulan yang lalu
                    </span>
                    <div class="row row-cols-2 mx-1 mt-1">
                        <button type="button" class="btn btn-outline-secondary" style="width: 80px; font-size: 12px; margin-right: 8px">
                            Edit
                        </button>
                        <button type="button" class="btn btn-outline-secondary" style="width: 80px; font-size: 12px">
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h5 style="font-weight: 700" class="pt-4">
    Transaksi Terakhir
</h5>
<div class="card my-2">
    <div class="card-body d-flex justify-content-between">
        <div class="row row-cols-2">
            <div class="col-3">
                <img src="/assets/transaksi.png" alt="" class="img-fluid" style="max-width: 40px">
            </div>
            <div class="col-9">
                <h5 style="font-weight: 700; font-size: 18px">
                    Penarikan Saldo
                </h5>
                <span style="color: #8C98A4; font-size: 12px">Ke Rekening </span><span style="color: #8C98A4; font-weight: 600; font-size: 12px">Bank BCA</span>
                <p style="color: #8C98A4; font-size: 10px">2 November 2022 - 11.12</p>
            </div>
        </div>
        <div style="text-align: right">
            <h5 style="color: #ED4C78; font-weight: 600; font-size: 16px">
                - Rp. 100.000
            </h5>
            <span style="color: #00C9A7">
                Berhasil
            </span>
        </div>
    </div>
</div>
<div class="card my-2">
    <div class="card-body d-flex justify-content-between">
        <div class="row row-cols-2">
            <div class="col-3">
                <img src="/assets/transaksi.png" alt="" class="img-fluid" style="max-width: 40px">
            </div>
            <div class="col-9">
                <h5 style="font-weight: 700; font-size: 18px">
                    Job Terselesaikan
                </h5>
                <span style="color: #8C98A4; font-size: 12px">Dari Job </span><span style="color: #8C98A4; font-weight: 600; font-size: 12px">Labore</span>
                <p style="color: #8C98A4; font-size: 10px">2 November 2022 - 11.12</p>
            </div>
        </div>
        <div style="text-align: right">
            <h5 style="color: #00C9A7; font-weight: 600; font-size: 16px">
                + Rp. 100.000
            </h5>
            <span style="color: #00C9A7">
                Berhasil
            </span>
        </div>
    </div>
</div>
@endsection