@include('navbarrr')

<h1>Edit Data </h1>

<div class="mt-5 ml-5 col-5 m-auto">
    <form action="/Musik/{{$listMusik->id}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="id">id</label>
            <input type="text" class="form-control" id="id" name="id" value="{{$listMusik->id}}" required>
        </div>
        <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$listMusik->nama}}" required>
        </div>

        
        <div class="mb-3">
            <label for="label_id">Label_Id</label>
            <input type="text" class="form-control" id="label_id" name="label_id" value="{{$listMusik->label_id}}" required>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div>