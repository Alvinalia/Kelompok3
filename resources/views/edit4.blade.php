@include('navbarrr')

<h1>Edit Data </h1>

<div class="mt-5 ml-5 col-5 m-auto">
    <form action="/Penyanyi/{{$listPenyanyi->id}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="ID">ID</label>
            <input type="text" class="form-control" id="ID" name="name" value="{{$listPenyanyi->id}}" required>
        </div>
        <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$listPenyanyi->nama}}" required>
        </div>

        
        <div class="mb-3">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$listPenyanyi->tanggal_lahir}}" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{$listPenyanyi->jenis_kelamin}}" required>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div>