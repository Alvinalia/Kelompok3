@include('navbarrr')
@section('content')
<h2>Daftar Lagu 2023 Slebew</h2>
<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>id </th>
            <th>nama </th>
            <th>alamat</th>
            <th>id_penyanyi</th>
            <th>id_musik</th>
            <th>Penyanyi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listLabel as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->penyanyi_id}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->penyanyi['id']}}</td>
    
        </tr>
        @endforeach
    </tbody>
</table>