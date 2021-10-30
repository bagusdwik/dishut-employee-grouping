@extends('layouts.menu')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="page-title">Form Edit Pegawai PTT-PK</h2>
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Edit data</strong>
                </div>
                <form action="{{ url('pttpkupdate/'.$pttpk->id_pttpk) }}" method="POST">
                  @csrf
                <div class="card-body">
                  @if (session('Pesan'))
                    <div class="alert alert-success">
                        {{ session('Pesan') }}
                    </div>
                  @endif
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="{{ $pttpk->nama }}">
                      </div>
                      <div class="form-group mb-3">
                        <label for="nipttpk">NIPTT-PK</label>
                        <input type="text" id="nipttpk" name="nipttpk" class="form-control" value="{{ $pttpk->nipttpk }}">
                      </div>
                      <div class="form-group mb-3">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" id="jabatan" name="jabatan" class="form-control" value="{{ $pttpk->jabatan }}">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="pendidikan">Pendidikan</label>
                          <select class="custom-select" id="pendidikan" name="pendidikan" >
                            <option value="{{ $pttpk->pendidikan }}">{{ $pttpk->pendidikan }}</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SLTP">SLTP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMEA">SMEA</option>
                            <option value="MA">MA</option>
                            <option value="SMU">SMU</option>
                            <option value="SMK">SMK</option>
                            <option value="STM">STM</option>
                            <option value="D1">D1</option>
                            <option value="D III">D III</option>
                            <option value="S1">S1</option>
                            <option value="PAKET A">PAKET A</option>
                            <option value="PAKET C">PAKET C</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="jurusan">Jurusan</label>
                          <input type="text" id="jurusan" name="jurusan" class="form-control" value="{{ $pttpk->jurusan }}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="tempat">Tempat</label>
                          <input type="text" id="tempat" name="tempat" class="form-control" value="{{ $pttpk->tempat }}" >
                        </div>
                        <div class="form-group col-md-6">
                          <label for="tanggal">Tanggal lahir</label>
                          <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ $pttpk->tanggallahir }}">
                        </div>
                      </div>
                      
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="L" class="custom-control-input" {{$pttpk->jenis_kelamin == 'L'? 'checked' : ''}}>
                          <label class="custom-control-label" for="jenis_kelamin">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="P" class="custom-control-input" {{$pttpk->jenis_kelamin == 'P'? 'checked' : ''}}>
                          <label class="custom-control-label" for="jenis_kelamin">Perempuan</label>
                        </div>
                      </div>
                      <div class="form-group mb-3">
                        <label for="upt">Bagian/Bidang/UPT</label>
                        <select class="custom-select" id="upt" name="upt">
                          <option value="{{ $pttpk->upt }}">{{ $pttpk->upt }}</option>
                          <option value="UPT Pelayanan Pengelolaan Hasil Hutan">UPT Pelayanan Pengelolaan Hasil Hutan</option>
                          <option value="UPT Tahura Raden Soerjo">UPT Tahura Raden Soerjo</option>
                          <option value="UPT Perbenihan Tanaman Hutan">UPT Perbenihan Tanaman Hutan</option>
                        </select>
                      </div>
                      <div class="form-group mb-3">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="4">{{ $pttpk->keterangan }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="float-right">      
                    <button type="submit" class="btn mb-2 btn-primary">Edit</button>
                    <a class="btn btn-danger mb-2" href="{{ route('tabelpttpk') }}">Batal</a>
                  </div>
                </div>
                </form>
              </div>
            </div>    
          </div>
        </div>
    </main>
@endsection