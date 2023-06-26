@include('navbarrr')

<h1>Edit Data </h1>

<div class="mt-5 ml-5 col-5 m-auto">
    <form action="/Genre/{{$listGenre->id}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="id">id</label>
            <input type="text" class="form-control" id="id" name="id" value="{{$listGenre->id}}" required>
        </div>
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="name" name="nama" value="{{$listGenre->nama}}" required>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div>