@include('navbarrr')
@section('content')
<div class="my-3">
    <a href="create" class= "btn btn-dark ml-5">Add Data</a>
</div>
<h2>Daftar Lagu 2023 Slebew</h2>
@if(Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>ID</th>
            <th>Nama </th>
            <th>email</th>
            <th>password</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listUser as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->password}}</td>
            <td>
            <a href="edit/{{$data->id}}" class="btn btn-warning">Edit</a>
            
            <form class="d-inline" action="/User/{{$data->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('mau dii apuss nii??')">Delete</button>
                </form>
                <a href="login/{{$data->id}}" class="btn btn-info">Detail</a>
            
        </tr>
        @endforeach
    </tbody>
</table>