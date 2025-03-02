@extends('template') 
@section('content')
<div class="au-card recent-report">

  <div class="au-card-inner">
    <h3 class="title-5 m-b-35">Data Produk</h3>
    <div class="table-data__tool">
      <div class="table-data__tool-left"></div>
      <div class="table-data__tool-right">

        <a href="{{ site_url('admin/produk/add') }}">

          <button class="au-btn au-btn-icon au-btn--green au-btn--small">
            <i class="zmdi zmdi-plus"></i>Tambah Produk</button></a>

      </div>
    </div>
    <div class="table-responsive table-responsive-data2">
      <table id="example4" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga Produk</th>
            <th>Stok Produk</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($produk as $row): ?>
          <tr>
            <td> {{$row->nama_produk }} </td>
            <td> {{$row->nama_kategori }} </td>
            <td> {{$row->harga_produk }} </td>
            <td> {{$row->stok_produk }} </td>
            <td>
              <a href="{{ site_url('admin/produk/edit/'.$row->id_produk)}}"><button class="btn btn-info btn-sm">Edit</button></a>
              <a href="{{ site_url('admin/produk/hapus/'.$row->id_produk)}}" onclick="return confirm('Anda Yakin Ingin Menghapus ?')"><button
                  class="btn btn-danger btn-sm">Hapus</button></a>
            </td>
          </tr>
          <?php endforeach ?>

        </tbody>
      </table>
    </div>
    <!-- END DATA TABLE -->
  </div>
</div>
@endsection
 
@section('js')
<script type="text/javascript">
  $(document).ready(function () {
    $('#example4').DataTable();
  });

</script>
@endsection