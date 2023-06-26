@include('navbarrr')
@section('content')

<h2>Daftar Genre 2023 Slebew</h2>
@if(Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif
<div class="my-3">
    <a href="create5" class= "btn btn-dark ml-5">Add Data</a>
</div>
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
            <td>
            <a href="/edit5/{{$data->id}}" class="btn btn-warning">Edit</a>
            
            <form class="d-inline" action="/Genre/{{$data->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('mau dii apuss nii??')">Delete</button>
                </form>
                <a href="login/{{$data->id}}" class="btn btn-info">Detail</a>

    
        </tr>
        @endforeach
    </tbody>
</table>
