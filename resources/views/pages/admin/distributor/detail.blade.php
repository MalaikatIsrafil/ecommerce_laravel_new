@extends('layouts.admin.main')
@section('title', 'Admin Detail Distributor')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Distributor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.distributor') }}">Distributor</a></div>
                <div class="breadcrumb-item">Detail Distributor</div>
            </div>
        </div>

        <a href="{{ route('admin.distributor') }}" class="btn btn-icon icon-left btn-warning">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>


        <div class="row mt-4">
            <div class="col-12 col-md-6 col-lg-8 m-auto">
                <article class="article article-style-c">

               <!--     <div class="article-header">
                        <div class="article-image" data-background="{{ asset('images/' . $distributor->image) }}">
                        </div>
                    </div>

-->

                    <div class="article-details">
                        <div class="article-category">
                            <a href="#">Nama: {{ $distributor->nama_distributor }}</a>
                        </div>
                        <div class="article-title">
                            <h2><a href="#">Kota: {{ $distributor->kota }}</a></h2>
                        </div>
                        <hr>
                        <p>Provinsi: {{ $distributor->provinsi }}</p>
                        <p>Kontak: {{ $distributor->kontak }}</p>
                        <p>Email: {{ $distributor->email }}</p>
                        <p>Status: {{ $distributor->status ? 'Aktif' : 'Non-Aktif' }}</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
</div>
@endsection