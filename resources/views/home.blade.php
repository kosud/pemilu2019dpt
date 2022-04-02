@extends('layouts.app')

@section('title','Home')

@section('content')

  <div class="row">
    <!-- left column -->
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
      
        <div class="box box-warning">
            <div class="box-header with-border">
                <center>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><h3>Dashboard</h3></li>

                    </ul>

                </center>
            </div>
            <!-- /.box-header -->
            <div class="box-body with-border center">
                
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center">Rekap DPT PEMILU 2019</h1>
            </div>
        </div>
    </div>
    <div class="col-md-3">
    </div>        
  </div>  
@endsection

@section('js')
@endsection

@section('script')

<script type="text/javascript">

    $(document).ready(function () {

//select the POPUP DIV and show it
$("#popup").hide().fadeIn(1000);

//close the POPUP buuton  if the button with id="close" is clicked
$("#close").on("click", function (e) {
    e.preventDefault();
    $("#popup").fadeOut(1000);
});

});

    $("#tampil").hide();
    $("#daftar").hide();
    $("#gagal").hide();

    $(document).ready(function() {

        $('#btn_id').click(function(){



            var number=/^[0-9]+$/;
            var nik = $('#nik').val();
            var nama = $('#nama').val();
            var respon = $('#g-recaptcha-response').val();



            var pemilih = {nik :nik,nama:nama};


            $('#load').html('<img src="{{ asset("assets/img/ajax-loader.gif")}}"/>');
            $.ajax({
                type: "POST",
                url: "https://web.archive.org/web/20190417130106/https://lindungihakpilihmu.kpu.go.id/index.php/dpt/proses_ceknik",
                data : {nik :nik,nama:nama,respon:respon},
                dataType: "json",
                success: function(res)
                {
                    var json = JSON.parse(JSON.stringify(res));

//var json = JSON.parse(obj);



if (json.message === 'success') {
    var pemilih = JSON.parse(JSON.stringify(json.data));



    $('#saring').hide();
    $('#load').html('');
    $('#gagal').html('');
    $('#dNama').show();
    $('#dTps').show();
    $('#dPro').show();
    $('#dKabko').show();
    $('#dKec').show();
    $('#dKel').show();
    $('#dJk').show();
    $('#vNama').html(pemilih.nama);
    $('#vTps').html(pemilih.tps);
    $('#vPro').html(pemilih.namaPropinsi);
    $('#vKabko').html(pemilih.namaKabKota);
    $('#vKec').html(pemilih.namaKecamatan);
    $('#vKel').html(pemilih.namaKelurahan);
    $('#vJk').html(pemilih.jenis_kelamin);  

    $("#tampil").show();
    $("#daftar").hide();
    grecaptcha.reset();
}
else
{
    $("#load").html('');
    $("#gagal").show();
    $("#daftar").show();
    $("#tampil").hide();
    $('#ket').html(json.data);
    grecaptcha.reset();
}
},
error: function(errorThrown)
{

    $("#load").html('');
    $("#gagal").show();
    $("#daftar").show();
    $("#tampil").hide();
    $('#ket').html('Mohoon Maaf Terjadi Kesalahan, Silahkan Cobalah Beberapa Saat Lagi');
    grecaptcha.reset();

}

});



        });

    });
</script>   
@endsection