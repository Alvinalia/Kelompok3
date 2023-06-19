@include('navbarrr')
@section('content')
<h2>Daftar Genre 2023 Slebew</h2>
<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>id</th>
            <th>nama</th>
            <th>Genre Musik</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listGenre as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->id}}</td>

    
        </tr>
        @endforeach
    </tbody>
</table>