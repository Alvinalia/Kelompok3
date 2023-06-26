@include('navbarrr')

<h1>Edit Data </h1>

<div class="mt-5 ml-5 col-5 m-auto">
    <form action="/Label/{{$listLabel->id}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="id">id</label>
            <input type="text" class="form-control" id="id" name="id" value="{{$listLabel->id}}" required>
        </div>
        <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$listLabel->nama}}" required>
        </div>

        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{$listLabel->alamat}}" required>
        </div>

        <div class="mb-3">
            <label for="penyanyi_id">Penyanyi_id</label>
            <input type="text" class="form-control" id="penyanyi_id" name="Id_Genre" value="{{$listLabel->penyanyi_id}}" required>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div>