{{-- @extends('layout.default')

@section('content') --}}
@extends('main')
@section('title', 'Input Data Transaksi')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <h1>Input Data Transaksi</h1>
            <div class="col-lg-8 mt-5">
                <form action="{{ url('/store')}}" method="POST">
                    <div class="form-group">
                        <label for="keterangan">Nama Transaksi</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <!-- Input untuk dk dan jumlah -->
                    <div class="form-group">
                        <label for="dk">Debit/Kredit</label>
                        <input type="text" name="dk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah transaksi(Rp)</label>
                        <input type="number" name="jumlah_detail" class="form-control">
                    </div>

                    <!-- Input untuk detail transaksi -->
                    <div class="form-group">
                        <label for="details">Detail Transaksi</label>
                        <input type="text" name="keterangan_detail" class="form-control">
                    </div>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                    <div class="form-group mt-2">
                        <a href="{{url('/')}}"> Kembali ke Dashboard</a>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
