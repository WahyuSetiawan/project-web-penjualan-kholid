
@extends('template')


@section("content")
<div class="au-card recent-report">

<div class="au-card-inner">
 <h3 class="title-5 m-b-35">Data Konsumen</h3>
 <div class="table-data__tool">
 </div>
 <div class="table-responsive table-responsive-data2">
  <table id="example4" class="display" style="width:100%">
   <thead>
    <tr>
     <th>Nama Konsumen</th>
     <th>Email konsumen</th>
     <th>No hp Konsumen</th>
     <th>Aksi</th>
   </tr>
 </thead>
 <tbody>
  <?php foreach ($konsumen as $row): ?>
    <tr>
      <td><?php echo $row->nama_konsumen ?></td>
      <td><?php echo $row->email_konsumen ?></td>
      <td><?php echo $row->no_hp_konsumen ?></td>
      <td>
        <a href="<?php echo site_url('admin/konsumen/hapus/'.$row->id_konsumen) ?>" onclick="return confirm('Anda Yakin Ingin Menghapus ?')"><button class="btn btn-danger btn-sm">Hapus</button></a>
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


@section("js")


<script type="text/javascript">
 $(document).ready(function() {
  $('#example4').DataTable();
} );
</script>

@endsection