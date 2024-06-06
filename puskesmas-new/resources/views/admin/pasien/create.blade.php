<x-layout>
    <x-slot name="page_name">Halaman Pasien / Create</x-slot>
    <x-slot name="page_content">
    <form class="forms-sample" action="{{ url('dashboard/pasien/store') }}" method="post">
          @csrf
          <div class="form-group row">
              <label for="kode" class="col-sm-4 col-form-label">Kode</label>
              <div class="col-sm-8">
                  <input type="string" class="form-control" id="kode" name="kode"
                      placeholder="Masukkan Kode">
              </div>
          </div>

          <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label">Nama</label>
              <div class="col-sm-8">
                  <input type="string" class="form-control" id="nama" name="nama"
                      placeholder="Masukkan Nama">
              </div>
          </div>

          <div class="form-group row">
              <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-8">
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                      placeholder="Masukkan Tanggal Lahir">
              </div>
          </div>

          <div class="form-group row">
              <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
              <div class="col-sm-8">
                  <input type="string" class="form-control" id="tmp_lahir" name="tmp_lahir"
                      placeholder="Masukkan Tempat Lahir">
              </div>
          </div>

          <div class="form-group row">
              <label for="gender" class="col-sm-4 col-form-label">Gender</label>
              <div class="col-sm-8">
                  <input type="enum" class="form-control" id="gender" name="gender"
                      placeholder="Masukkan Gender">
              </div>
          </div>

          <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">Email</label>
              <div class="col-sm-8">
                  <input type="string" class="form-control" id="email" name="email"
                      placeholder="Masukkan Email">
              </div>
          </div>

          <div class="form-group row">
              <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="alamat" name="alamat"
                      placeholder="Masukkan Alamat">
              </div>
          </div>

          <div class="form-group row">
              <label for="kel_nama" class="col-sm-4 col-form-label">Kelurahan</label>
              <div class="col-sm-8">
                  <input type="string" class="form-control" id="kel_nama" name="kel_nama"
                      placeholder="Masukkan Kelurahan">
              </div>
          </div>

          <div class="form-group row">
              <div class="col-sm-4"></div>
              <div class="col-sm-8">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
              </div>
          </div>

      </form>
    </x-slot>
</x-layout>