<!-- <script src="<?php 
//base_url('assets/jquery/jquery.min.js');?>"></script> -->
<!-- <a href="http://"></a> -->
<div id="content-wrapper">

			<div class="container-fluid">

                <?php
                //$this->load->view("admin/_partials/breadcrumb.php") ?>
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                <?php foreach ($this->uri->segments as $segment): ?>
                    <?php 
                        $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
                        $is_active =  $url == $this->uri->uri_string;
                    ?>


                    <li class="breadcrumb-item <?php echo $is_active ? 'active': '' ?>">
                        <?php if($is_active): ?>
                            <?php echo ucfirst($segment) ?>
                        <?php else: ?>
                            <a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?></a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
                </ol>
				
				<?php if($this->session->flashdata('flash')) :?>
				<div class="row mt-3">
					<div class="col md-6">
						<div class="alert alert-success alert-dismissible fade show" role="alert">Data Product <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
						<button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
					</div>    
				</div>
				<?php endif;?>
				
				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('products/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Produk</th>
										<th>Kode Produk</th>
										<th>Kategori</th>
										<th>Harga Jual</th>
										<th>Harga Beli</th>
                                        <th>Detail</th>
										<th>Gambar</th>
                                        <th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($erpcanon as $erp): ?>
									<tr>
										<td width="150">
											<?php echo $erp->nama ?>
										</td>
                                        <td>
											<?php echo $erp->kode ?>
										</td>
										<td>
											<?php echo $erp->name ?>
										</td>
                                        <td>
											<?php echo $erp->hargajual ?>
										</td>
                                        <td>
											<?php echo $erp->hargabeli ?>
										</td>
										<td class="small">
											<?php echo $erp->detail?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/product/'.$erp->image) ?>" width="100" style="border-radius: 5px;" />
										</td>
										<td>
											<a href="<?php echo site_url('products/edit/'.$erp->product_id) ?>"
											 class="btn btn-primary small"><i class="fas fa-edit"></i></a>
											<a onclick="deleteConfirm('<?php echo site_url('products/delete/'.$erp->product_id) ?>')"
											 href="#!" class="btn btn-danger small"><i class="fas fa-trash"></i></a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
							
						</div>
					</div>
				</div>
				<?php $this->load->view("product/modal.php") ?>
				<?php $this->load->view("product/js.php") ?>
				
				<script>
					function deleteConfirm(url){
						$('#btn-delete').attr('href',url);
						$('#deleteModal').modal();
					}
				</script>