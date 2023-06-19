@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @include('navbarrr')

                <div class="card-body">
                <table width="20">
	<center>
		<h1><b><font color="#bdc65b">Playlist Hits</font></b></h1>
		<img src="{{ URL('img/cd_5_angle.jpg')}}" width="200" height="200">
	</center>

	<tr>
		<td>
		<strong><font size ="19">SONG HITS 2023</strong>
		</td>
		<td>
		<img src="{{ URL('img/cd_5_angle.jpg')}}" width="200px" height="200px">
		</td>
		<td align="center">
		<img src="{{ URL('img/ilustrasi-lagu.jpg')}}" width="200px" height="200px">
		</td>
	</tr>
	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
