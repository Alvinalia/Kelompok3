@include('navbarrr')
@section('content')
<h2>Genre kalangan Musik</h2>
<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>id</th>
            <th>id_musik</th>
            <th>id_genre</th>
            <th>Musik id</th>
            <th>Genre id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listGenreMusik as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->id_musik}}</td><br>
            <td>{{$data->id_genre}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->id}}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>