@extends('layouts.app')

@section('title','Siapa Pemilih')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <center>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><h3>SIAPA PEMILIH</h3></li>

                    </ul>

                </center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <h4>
                <ol type="1">
                    <li>Warga Negara Indonesia yang berusia 17 tahun atau lebih atau sudah/pernah kawin.
                    </li>
                    <br>
                    <li>Terdaftar sebagai pemilih.</li>
                    <br>

                    <li>Bukan anggota TNI/Polri.</li>
                    <br>
                    <li>Tidak sedang dicabut hak pilihnya berdasarkan putusan pengadilan yang mempunyai kekuatan hukum tetap.</li>
                    <br>
                    <li>Terdaftar di dalam Daftar Pemilih(DPT/DPTb/DPK).</li>
                    <br>

                </ol>
            </h4>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection

@section('script')
@endsection