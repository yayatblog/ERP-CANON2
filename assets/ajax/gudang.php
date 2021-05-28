<?php
require '../../application/controllers/gudang.php';
// base_url('../application/controller/gudang.php');
$keyword = $_GET["keyword"];
$query = "SELECT * FROM gudang WHERE
                nama LIKE '%$keyword%' OR
                lokasi LIKE '%$keyword%'
                ";

// $query = $keyword = $this->input->post('keyword',true);
// $this->db->like('nama',$keyword);
// $this->db->or_like('kode',$keyword);
// return $this->db->get('produk')->result_array();
$gudang = query($query);
// var_dump($gudang);
// echo "Selamat Datang";

?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
    <td>No</td>
    <td class="center">Nama</td>
    <td class="center">Lokasi</td>
    <td class="center">Alamat</td>
    <td class="center">Aksi</td>
</tr>
</thead>
<tbody>
<tr>
    <?php $i=1;?>
    <?php foreach ($gudang as $dsn) :?>
    <td><?=$i;?></td>
    <td><?=$dsn['nama'];?></td>    
    <td><?=$dsn['lokasi'];?></td>    
    <td><?=$dsn['alamat'];?></td>         
    <td>
        <a href="<?=base_url();?>gudang/hapus/<?=$dsn['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus');">Hapus</a>
        <a href="<?=base_url();?>gudang/edit/<?=$dsn['id'];?>" class="btn btn-info">Edit</a>
    </td>
</tr>
<?php $i++;?>
    <?php endforeach;?>
</tbody>
</table>
