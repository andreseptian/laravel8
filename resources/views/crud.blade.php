<form action="/simpan" method="POST">
    @csrf @method('put')
<button type="submit">Submit {{ $nama }}</button>
</form>

<a href="{{route('master-data.data-karyawan')}}">Ke Halaman data karyawan</a> <br>
<a href="{{route('master-data.data-kerja')}}">Ke Halaman kerja edit</a>
