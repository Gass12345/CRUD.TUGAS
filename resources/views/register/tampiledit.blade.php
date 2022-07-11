@extends('components.layouts')
    <div class="row justify-content-center">
  
        <div class="col-lg-4">
          <main class="form-registration w-100 m-auto mt-5">
            <form action="/editdata/{{ $data->id }}" method="post">
              @csrf
              
              <h1 class="h3 mb-3 fw-normal">Edit Data</h1>
          
              <div class="form-floating">
                <input type="text" name="namapenerima" class="form-control rounded-top" id="namapenerima" placeholder="namapenerima" value="{{ $data->namapenerima }}">
                <label for="namapenerima" >Nama Penerima</label>
              </div>
              <div class="form-floating">
                <input type="text" name="jenisbarang" class="form-control" id="jenisbarang" placeholder="jenisbarang" value="{{ $data->jenisbarang }}">
                <label for="jenisbarang" >Jenis Barang</label>
              </div>
              <div class="form-floating">
                <input type="nohp" name="nomorbarang" class="form-control" id="nomorbarang" placeholder="nomorbarang" value="{{ $data->nomorbarang }}">
                <label for="nomorbarang" >Nomor Barang</label>
              </div>
              <div class="form-floating">
                <select class="form-select" name="banyakbarang" aria-label="Default select example">
                  <option selected >{{ $data->banyakbarang }}</option>
                  <option value="100buah">100 buah </option>
                  <option value="1000buah">1000 buah</option>
                  
                </select>
              </div>
              
          
             
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Edit</button>
              
            </form>
      
            
           
          
          </main>
        </div>
    </div>