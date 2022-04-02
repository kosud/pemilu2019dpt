<?php

use Carbon\Carbon;

function createCode()
{
	$code = rand(11111111111111, 99999999999999);
	return $code;
}

function objArraySearch($array, $val)
{
	if(!is_null($array)){
		
	    foreach ($array as $row => $value) {
	        if ($row == $val) {
	            return $value;
	        }
	    }
	}
	return null;
}

function numberFormat($data)
{
	if(is_numeric($data)){
		return  number_format($data, 0, '.', ',');
	}
}

function hashScript()
{
	return sha1(time());
}

function namePartai($id)
{
	$data = \App\Partai::where('id',$id)->first();
	if($data){
			return $data->nama;
	}
}

function nameLevel($id)
{	
	$data = \App\UserLevel::where('id',$id)->first();
	if($data){
			return $data->nama;
	}
}
	

function nameJabatan($id)
{	
	$data = \App\UserJabatan::where('id',$id)->first();
	if($data){
			return $data->nama;
	}
}

function namePekerjaan($id)
{	
	$data = \App\UserPekerjaan::where('id',$id)->first();
	if($data){
			return $data->nama;
	}
}
		
function age($date)
{
	$dateOfBirth = $date;
	if($dateOfBirth){
		$years = Carbon::parse($dateOfBirth)->age;
		$years = Carbon::parse($dateOfBirth)->diff(Carbon::now())->format('%y tahun, %m bulan and %d hari');;
		return $years;
	}
}
		
function tp3uAge($from,$to)
{
	$from = Carbon::today()->subYears($from)->format('Y-m-d');
    $to = Carbon::today()->subYears($to)->format('Y-m-d');

    $age = \App\Tppp::whereBetween('tanggal_lahir', [$from, $to])->get();

    if($age){
    	return $age->count();
    }
}
		
function ageYear($date)
{
	$dateOfBirth = $date;
	if($dateOfBirth){
		$years = Carbon::parse($dateOfBirth)->age;
		$years = Carbon::parse($dateOfBirth)->diff(Carbon::now())->format('%y');;
		return $years;
	}
}

function noHp($id)
{
	return preg_replace("/[^0-9]/", "",$id);
}