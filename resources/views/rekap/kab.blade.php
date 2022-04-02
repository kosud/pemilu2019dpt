@extends('layouts.app')

@section('title','RDPP 2019 KABKOTA '.$wilayah->namaKab)

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
                            <li class="breadcrumb-item"><a href="{{ route('rekap.index')}}">{{$wilayah->namaPro}}</a>
                            </li><li class="breadcrumb-item"><a href="{{ route('rekap.pro',$wilayah->idPro)}}">{{$wilayah->namaKab}}</a></li>

                        </ul>
                    </center>
                    <table class="table table-bordered tabel">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>KECAMATAN</th>
                            <th>KELURAHAN</th>
                            <th>TPS</th>
                            <th>LAKI-LAKI</th>
                            <th>PEREMPUAN</th>
                            <th>TOTAL PEMILIH</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $dt)
                            <tr>
                                <td class="text-center" style="min-width: 20px;">{{$key+1}}</td>
                                <td>
                                    <a href="{{ route('rekap.kec',[$dt->idPro,$dt->idKab,$dt->idKec])}}">
                                        {{$dt->namaWilayah}}
                                    </a>
                                </td>
                                <td class="text-right">{{numberFormat($dt->jmlKel)}}</td>
                                <td class="text-right">{{numberFormat($dt->jmlTps)}}</td>
                                <td class="text-right">{{numberFormat($dt->jmlPL)}}</td>
                                <td class="text-right">{{numberFormat($dt->jmlPP)}}</td>
                                <td class="text-right">{{numberFormat($dt->jmlTP)}}</td>
                            </tr>
                            @endforeach                             
                        </tbody>
                    </table>
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