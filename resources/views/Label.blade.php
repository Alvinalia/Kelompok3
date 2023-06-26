@include('navbarrr')
@section('content')

<h2>Label Musik Ter Hits</h2>

<div class="my-3">
    <a href="create3" class= "btn btn-dark ml-5">Add Data</a>
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
            <th>alamat</th>
            <th>Penyanyi Id</th>
            <th>nama penyanyi</th>
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
            <td>{{$data->penyanyi?->nama}}</td>
           
            <td>
            <a href="edit3/{{$data->id}}" class="btn btn-warning">Edit</a>
            
            <form class="d-inline" action="/Label/{{$data->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('mau dii apuss nii??')">Delete</button>
                </form>
                <a href="login/{{$data->id}}" class="btn btn-info">Detail</a>
    
        </tr>
        @endforeach
    </tbody>
</table>
