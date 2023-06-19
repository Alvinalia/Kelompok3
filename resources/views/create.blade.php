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
    <form action="User" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" required>
        </div>

        



        

        
        
        
       
        
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div>