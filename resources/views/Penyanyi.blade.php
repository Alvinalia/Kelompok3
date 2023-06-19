@include('navbarrr')
@section('content')
<h2>Daftar Penyanyi Hits Slebew</h2>
<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>id </th>
            <th>nama </th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Penyanyi_id </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listPenyanyi as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->tanggal_lahir}}</td>
            <td>{{$data->jenis_kelamin}}</td> 
            <td>{{ $data->id}}</td>
        </tr> 
        @endforeach
    </tbody>
</table>

