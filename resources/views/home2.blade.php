@extends('master')

@section('konten')
  <h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->role}}</b>.</h4>
@endsection

<!DOCTYPE html>
<html>
	<head>
		<title>Playlist Music</title>
	</head>

<body>
	<table width="20">
	<center>
		<h1><b><font color="#bdc65b">Playlist Hits</font></b></h1>
		<img src="{{ URL('img/cd_5_angle.jpg')}}" width="200" height="200">
	</center>

	@include('navbarrr')
	<tr>
		<td>
		<strong><font size ="19">SONG HIT 2023</strong>
		</td>
		<td>
		<img src="{{ URL('img/cd_5_angle.jpg')}}" width="200px" height="200px">
		</td>
		<td align="center">
		<img src="{{ URL('img/ilustrasi-lagu.jpg')}}" width="200px" height="200px">
		</td>
	</tr>
	</table>
</body>
</html>