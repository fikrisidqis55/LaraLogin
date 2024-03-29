@include('layouts.app')
<div class="container">
<div class="row">'
  <div class="col-md-6">

    <form method="POST" action="{{ url('/insert')}}">
      {{csrf_field()}}
  <fieldset>
    <legend>Buku Baru</legend>
    @if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}
    </div>
    @endforeach
    @endif
    <div class="form-group">
      <label for="exampleInputEmail1">Judul Buku</label>
      <input type="text" class="form-control" name="judul" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Penerbit</label>
      <input type="text" class="form-control" name="penerbit" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Tahun Terbit</label>
      <input type="text" class="form-control" name="tahun_terbit" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Pengarang Buku</label>
      <input type="text" class="form-control" name="pengarang" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary" value="">Simpan</button>
    <a href="{{ url('/home') }}" class="btn btn-secondary">Back</a>
  </fieldset>
</form>

  </div>

</div>
</div>

