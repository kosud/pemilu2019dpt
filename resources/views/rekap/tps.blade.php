@extends('layouts.app')

@section('title','RDPP 2019 KELURAHAN '.$wilayah->namaKel.' - TPS '.$wilayah->namaTps)

@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <!-- general form elements -->
            <div class="box box-warning">
                <div class="box-header with-border">
                    <center>
                        <h3>REKAPITULASI DAFTAR PEMILIH PEMILU 2019</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('rekap.index')}}">{{$wilayah->namaPro}}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('rekap.pro',$wilayah->idPro)}}">{{$wilayah->namaKab}}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('rekap.kab',[$wilayah->idPro,$wilayah->idKab])}}">{{$wilayah->namaKec}}</a></li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('rekap.kec',[$wilayah->idPro,$wilayah->idKab,$wilayah->idKec])}}">
                                    {{$wilayah->namaKel}}
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('rekap.kel',[$wilayah->idPro,$wilayah->idKab,$wilayah->idKec,$wilayah->idKel])}}">
                                    {{$wilayah->namaTps}}
                                </a>
                            </li>

                        </ul>

                    </center>
                    <table class="table table-bordered tabel">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>NIK</th>
                            <th>TEMPAT LAHIR</th>
                            <th>JENIS KELAMIN</th>
                            <th>LAPOR</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $dt)
                                <tr>
                                    <td class="text-center" style="min-width: 20px;">{{$key+1}}</td>
                                    <td>{{$dt->nama}}</td>
                                    <td>{{$dt->nik}}</td>
                                    <td>{{$dt->tempatLahir}}</td>
                                    <td>{{$dt->jenisKelamin}}</td>
                                    <td>#</td>
                                </tr>
                                @endforeach                            
                        </tbody>
                    </table>
                    <div class="alert alert-info" role="alert">
                        <p>Jika Terdapat Pemilih yang sudah Meninggal, Pindah Alamat (Tidak Memenuhi Syarat) silahkan lapor </p>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-1">
        </div>
    </div>

@endsection

@section('js')
@endsection

@section('script')

@endsection