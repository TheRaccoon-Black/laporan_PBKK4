@extends('main')

@section('content')
<section>
<div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Pencatatan Keuangan Sederhana</h1>
                <a href="{{url('create')}}" class="btn btn-primary">Tambah data</a>
            </div>
        </div>
        <div class="col-lg-8 mt-5">
            <table class="table-bordered">
                <tr>
                    <th>NO</th>
                    <th>Id</th>
                    <th>Keterangan</th> 
                    <th>Debit/Kredit</th>
                    <th>Jumlah(Rp)</th>
                    <th>Aksi</th>    
                </tr>
                @php
                    $no = 1; // Inisialisasi variabel nomor
                @endphp
                @foreach ($data as $dataAkun)
                <tr> 
                    <td>{{ $no++ }}</td>
                    <td>{{ $dataAkun->id }}</td>
                    <td>{{ $dataAkun->keterangan }}</td>
                    <td>{{ $dataAkun->dk }}</td>
                    <td>{{ $dataAkun->jumlah }}</td>
                    <td>
                    <a href="{{ url('/show/'.$dataAkun->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ url('/destroy/'.$dataAkun->id) }}" class="btn btn-danger">Hapus</a>    
                    </td>    
                </tr>
                @endforeach
            </table>
        </div>
</div>
</section>
@endsection