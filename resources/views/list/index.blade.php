@extends('components.layouts')
@if($message = Session::get('success'))
    <div class="row">
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif
<div class="row justify-content-center mt-5">
  
  <div class="col-10">
    
      <div class="card">
     
  </div>
          <div class="card-header" >

          <p style="padding: 5px ; background-color: grey; center;" >Data all users</p>
          </div>
          <div class="card-body">
              <table class="table" style="background-color: grey">
                  <thead>
                    <tr>
                      <th scope="col">NO</th>
                      <th scope="col">Nama Penerima </th>
                      <th scope="col">Jenis Barang </th>
                      <th scope="col">Nomor Barang </th>
                      <th scope="col">Banyak Barang </th>
                      <th scope="col">AKSI</th>
                      
                      
                      {{-- <th scope="col">Aksi</th> --}}
                    </tr>                 
                  </thead>

                  <tbody>
                  @foreach ($users as $row )
                    <tr>
                      <th scope="row">{{ $row->id }}</th>
                     <td>{{  $row->namapenerima }}</td>
                     <td>{{  $row->jenisbarang }}</td>
                     <td>{{  $row->nomorbarang }}</td>
                     <td>{{  $row->banyakbarang }}</td>
                     <td>
                      <a href="/tampilkandata/{{ $row->id }}"  class="btn btn-primary">EDIT</a>
                      <a href="/hapusdata/{{ $row->id }}" type="button" class="btn btn-danger">HAPUS</a>
                    </td>
                    </tr>   
                  @endforeach
                  </tbody>         
                </table>{{ $users->onEachSide(5)->links() }}                        
          </div>
      </div>
  </div>
</div>
<a class="btn btn-primary d-block text-center justify-content-center mt-2" href="/register">Not Registered? Register Now</a>