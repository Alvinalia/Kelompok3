@extends("layout-2")

@section("konten")

@include("menu")

<h1> Katalog Slebew </h1>

<ol>
    @forelse($ger as $index => $genre)
         <li>{{ $genre->nama }}</li>
    @empty
        Data Tidak Ditemukan
</ol>
<ol>
    @forelse($grm as $index => $genremusik)
         <li>{{ $genremusik->id_genre }}</li>
    @empty
        Data Tidak Ditemukan
</ol>
<ol>
    @forelse($lb as $index => $label)
         <li>{{ $label->penyanyi_id }}</li>
    @empty
        Data Tidak Ditemukan
</ol>
<ol>
    @forelse($pnyy as $index => $penyanyi)
         <li>{{ $penyanyi->nama }}</li>
    @empty
        Data Tidak Ditemukan
</ol>
<ol>
    @forelse($usr as $index => $user)
         <li>{{ $user->username }}</li>
    @empty
        Data Tidak Ditemukan
</ol>

@endsection