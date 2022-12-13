<form action="{{ route('berita.store') }}" method="post">
    @csrf
    <label for="">Nama Berita</label>
    <input type="text" name="nama">

    <button type="submit" value="Submit">Submit</button>
</form>
