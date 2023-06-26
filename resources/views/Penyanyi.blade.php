@include('navbarrr')
@section('content')

<h2>Daftar Penyanyi Hits Slebew</h2>
<div class="my-3">
    <a href="create4" class= "btn btn-dark ml-5">Add Data</a>
</div>
@if(Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>id </th>
            <th>nama </th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th></th>
            
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
            <td></td>
            
            <td>
            <a href="edit4/{{$data->id}}" class="btn btn-warning">Edit</a>
            
            <form class="d-inline" action="/Penyanyi/{{$data->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('mau dii apuss nii??')">Delete</button>
                </form>
                <a href="login/{{$data->id}}" class="btn btn-info">Detail</a>
        </tr> 
        @endforeach
    </tbody>
</table>
