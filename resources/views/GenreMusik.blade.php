@include('navbarrr')
@section('content')
<h2>Genre kalangan Musik</h2>
@if(Session::has('status'))
<div class="alert alert-success" role="alert">
    {{Session::get('message')}}
</div>
@endif
<table class="table">
    <thead>
        <div class="my-3">
            <a href="create1" class= "btn btn-dark ml-5">Add Data</a>
        </div>
        <tr>
            <th>No. </th>
            <th>id</th>
            <th>id_musik</th>
            <th>id_genre</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listGenreMusik as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->id_musik}}</td>
            <td>{{$data->id_genre}}</td>
            <td>
            
            <form class="d-inline" action="/GenreMusik/{{$data->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('mau dii apuss nii??')">Delete</button>
                </form>
               
            
        </tr>
        @endforeach
    </tbody>
</table>
