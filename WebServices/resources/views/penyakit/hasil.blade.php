@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
        <div class="jumbotron">
            <h1 class="display-4">Hasil Perhitungan</h1>
            <p class="lead">Anda terkena penyakit <strong>{{$hasil->penyakit->nama}}</strong></p>
            <hr class="my-4">
            <p class="text">Berdasarkan Kaidah Produksi : </p>
            <p class="text">Jika ada gejala 
                @foreach(Auth::user()->pilihan[0]->detailPilihan as $ax => $ex)
                <strong>{{$ex->gejala->nama}}</strong>
                @if(!$loop->last)
                dan
                @endif  
                @endforeach
            maka penyakitnya adalah 
            <span class="text-primary" style="cursor: pointer">{{$hasil->penyakit->nama}}</span>
            </p>
            <p class="lead mt-4">
                <a class="btn btn-primary" href="#" role="button">Hitung Lagi</a>
            </p>
            </div>
        </div>
        <!-- Anda Terkena penyakit : {{$hasil->penyakit}} -->
        <div class="col-md-5">
        <div class="card">
            <div class="card-header text-center">
            Gejala Yang Anda Dialami
            </div>
                <div class="card-body">
                    <table class="table table-bordered table-stripped table-hover text-center text-capitalize">
                        <thead>
                            <th width="10%">No</th>
                            <th>Gejala</th>
                        </thead>
                        <tbody>
                            @foreach(Auth::user()->pilihan[0]->detailPilihan as $index => $res)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$res->gejala->nama}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        
    </div>
</div>
@endsection
