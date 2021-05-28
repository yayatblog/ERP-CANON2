<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; laporan.xlsx");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>

<tr>

                <th>No.</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Manager</th>
                <th>Gudang</th>
                <th>QTY</th>
                <th>Unit Bagus</th>
                <th>Unit Rusak</th>
                <th>HPP</th>
                <th>Harga Sebelum Pajak</th>
                <th>PPN</th>
                <th>Harga Setelah Pajak</th>
                <th>Harga Setoran</th>
                <th>Jumlah Modal</th>

 </tr>

</thead>

<tbody>

<?php $i=1;?>
            <?php foreach ($produk as $erp): ?>
            <tr>
                <td style="text-align:center;">
                    <?php echo $i;?>
                </td>
                <td>
                    <?php echo $erp['kode'] ?>
                </td>
                <td width="">
                    <?php echo $erp['nama'] ?>
                </td>
                <td>
                    <?php echo $erp['name'] ?>
                </td>
                <td>
                    <?php echo $erp['manager'] ?>
                </td>
                <td>
                    <?php echo $erp['gudang'] ?>
                </td>
                <td style="text-align:center;">
                    <?php echo $erp['qty']?>
                </td>
                <td style="text-align:center;">
                    <?php echo $erp['unitbagus']?>
                </td>
                <td style="text-align:center;">
                    <?php echo $erp['unitrusak']?>
                </td>
                <td class="">
                    <?php echo $erp['hpp']?>
                </td>
                <td class="">
                    <?php echo $erp['sebelumpajak']?>
                </td>
                <td style="text-align:center;">
                    <?php echo $erp['ppn']?>
                </td>
                <td class="">
                    <?php echo $erp['setelahpajak']?>
                </td>
                <td class="">
                    <?php echo $erp['hargasetoran']?>
                </td>
                <td class="">
                    <?php echo $erp['jumlah']?>
                </td>
               
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>
</tbody>

</table>