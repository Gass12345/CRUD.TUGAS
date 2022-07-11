@extends('components.layouts')
    <div class="row justify-content-center">
  
        <div class="col-lg-4">
          <main class="form-registration w-100 m-auto mt-5">
            <form action="/register" method="post">
              @csrf
              
              <h1 class="h3 mb-3 fw-normal">Form Daftar</h1>
          
              <div class="form-floating">
                <input type="text" name="namapenerima" class="form-control rounded-top" id="namapenerima" placeholder="namapenerima">
                <label for="namapenerima">Nama Penerima</label>
              </div>
              <div class="form-floating">
                <input type="text" name="jenisbarang" class="form-control" id="jenisbarang" placeholder="jenisbarang">
                <label for="jenisbarang">Jenis Barang</label>
              </div>
              <div class="form-floating">
                <input type="nohp" name="nomorbarang" class="form-control" id="nomorbarang" placeholder="nomorbarang">
                <label for="nomorbarang">Nomor Barang</label>
              </div>
              <div class="form-floating">
                <select class="form-select" name="banyakbarang" aria-label="Default select example">
                  <option selected >Pilih Banyak Barang</option>
                  <option value="100buah">100 buah </option>
                  <option value="1000buah">1000 buah</option>
                  
                </select>
              </div>
              
          
             
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
              
            </form>
      
            
            <a class="d-block text-center mt-3" href="/list">Sudah Mendaftar? Lihat Peserta disini</a>
          
          </main>
        </div>
    </div>