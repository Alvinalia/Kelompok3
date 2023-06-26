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
    <form action="GenreMusik" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" required>
        </div>

        <div class="mb-3">
            <label for="id_musik">ID Musik</label>
            <select name="id_musik" id="id_musik" class="form-control" name="id_musik" required>
                <option value="">--pilih--</option>
                @foreach ($Musik as $index)
                <option value="{{$index->id}}">{{$index->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_genre">ID Genre</label>
            <select name="id_genre" id="id_genre" class="form-control" name="id_genre" required>
                <option value="">--pilih--</option>
                @foreach ($Genre as $index)
                <option value="{{$index->id}}">{{$index->nama}}</option>
                @endforeach
            </select>
        </div>
        
        
        
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div>