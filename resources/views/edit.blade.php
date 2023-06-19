@include('navbarrr')

<h1>Edit Data </h1>

<div class="mt-5 ml-5 col-5 m-auto">
    <form action="/User/{{$listuser->id}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$listuser->name}}" required>
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$listuser->email}}" required>
        </div>

        
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="{{$listuser->password}}" required>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div>