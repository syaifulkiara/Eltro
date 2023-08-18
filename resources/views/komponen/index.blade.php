@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"><h2><b><i class="fab fa-asymmetrik"></i> LIST KOMPONEN ELEKTRO</b></h2>
    </div>
    <div class="mb-3">  
    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"></i>
    Input Data</button>
    <button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-print"></i></button>
    <div class="float-right">
      <form class="d-flex">
        <input class="form-control me-2" type="Cari" placeholder="Cari" aria-label="Cari">
        <button class="btn btn-outline-dark btn-sm" type="submit">Cari</button>
      </form>
    </div>
    </div>
    <table class="table table-bordered " border="1" style="font-size: 10px; font-family: Arial" width="100%">
        <tr class="bg-success">
            <th width="5px">#</th>
            <th>Part Name</th>
            <th width="80px">Stock Awal</th>
            <th width="80px">Stock Akhir</th>
            <th width="80px">Pembelian</th>
            <th width="20px">Aksi</th>
        </tr>
        <tr>  
            <td>22</td>
            <td>test</td>
            <td>22</td>
            <td>test</td>
            <td>22</td>
            <td>test</td>
        </tr>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Komponen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection