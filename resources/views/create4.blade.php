@include('navbarrr')

<h1>Tambah Data</h1>
@if($errors->any())
    <div class="alert-danger">
        Perbaiki Kesalahan Berikut Sebelum Melanjutkan
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>

@endif


<div class="mt-5 ml-5 col-5">
    <form action="Penyanyi" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" required>
        </div>

        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        
        <div class="mb-3">
            <label for="tanggal_lahir">Tanggal_Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin">Jenis_Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
        </div>
        
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div>