<form action="{{ route('komentar.store') }}" method="post">
    @csrf
    <label for="">Berita ID</label>
    <select name="berita_id" id="">
        @foreach($beritas as $berita)
        <option value="{{ $berita->id }}">{{ $berita->nama }}</option>
        @endforeach
    </select>

    <label for="">Komentar</label>
    <input type="text" name="komenan">

    <button type="submit" value="Komentar">Submit</button>
</form>
