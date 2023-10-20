@extends('layout.default')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <h1>Input data transaksi</h1>
            <div class="col-lg-8 mt-5">
                <form action="{{ url('/store')}}" method="POST">
                    <div class="form-group">
                        <label for="keterangan">Nama transaksi</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="dk">Debit/Kredit</label>
                        <input type="text" name="dk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah transaksi(Rp)</label>
                        <input type="number" name="jumlah" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                    <div class="form-group mt-2">
                        <a href="{{url('/')}}"> Kembali ke dashboard</a>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</section>
@endsection