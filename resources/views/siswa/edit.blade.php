<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Laravel-DataSiswa</title>
</head>

<body>

  <div class="container">
        <h1>Edit Data Siswa</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
          {{session('sukses')}}
  </div>
        @endif

    <!--Form-->
    <form action="/siswa/{{$siswa->id}}/edit" method="POST">
        {{csrf_field()}}

          <div class="form-group">
            <label for="exampleInputEmail1">Nama Depan</label>
            <input value="{{$siswa->nama_depan}}" name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Nama Belakang</label>
            <input value="{{$siswa->nama_belakang}}" name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
          </div>

          <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                <option value="L" @if($siswa == 'L') selected @endif >Laki-Laki</option>
                <option value="2" @if($siswa == 'P') selected @endif >Perempuan</option>
              </select>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Agama</label>
            <input value="{{$siswa->agama}}" name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
          </div>

          <button type="submit" class="btn btn-warning">Edit data</button>

        </form>
        
            


<!-- Modal Bootsrap -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
