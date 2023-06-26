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
    <form action="Label" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="id">id</label>
            <input type="text" class="form-control" id="id" name="id" required>
        </div>

        <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        
        <div class="mb-3">
            <label for="penyanyi_id">Penyanyi_Id</label>
            <input type="text" class="form-control" id="penyanyi_id" name="penyanyi_id" required>
        </div>

        
        
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div>