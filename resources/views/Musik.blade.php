@include('navbarrr')
@section('content')
<h2>Daftar Musik Hits</h2>
<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>id </th>
            <th>nama </th>
            <th>Label Id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listMusik as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->label_id}}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>