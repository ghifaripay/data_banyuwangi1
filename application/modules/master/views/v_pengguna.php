<div class="content-body">
	<div class="container-fluid">
		<div class="form-head align-items-center d-flex mb-sm-4 mb-3">
						<div class="mr-auto">
							<h2 class="text-black font-w600">Daftar Pengguna</h2>
							<p class="mb-0">Tabel Pengguna</p>
						</div>
						<div>
							<!-- <a href="javascript:void(0)" class="btn btn-primary mr-3">+ Tambah</a> -->
							<a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#tambahpengguna">+ Tambah</a>
							<!-- <a href="index.html" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Filter Date</a> -->
						</div>
			</div>
				<?=$this->session->flashdata('notif')?>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<!-- <div class="card-header">
						<h4 class="card-title">Profile Datatable</h4>
					</div> -->

					<div class="card-body">
						<div class="table-responsive">
							<table id="example3" class="display min-w850">
								<thead>
									<tr>
										<th>No</th>
										<th>Username</th>
										<th>Nama Instansi</th>
										<th>Email</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$no=0;
									 foreach ($users as $value):
										$no++;
										  ?>
										<tr>
											<td class="text-center" ><?php echo $no ; ?></td>
											<td><?php echo $value["username"]; ?></td>
											<td><?php echo $value["full_name"]; ?></td>
											<td><?php echo $value["email"]; ?></td>
											<td><?php if ($value["active"] == 1 ): ?>
												<span class="badge badge-info light"><i class="fa fa-circle text-info mr-1"></i>Active</span>
												<?php endif; ?>
											</td>
											<td>
													<div class="d-flex">
														<a href="javascript:;"
															 data-id="<?php echo $value['id'] ?>"
															 data-username="<?php echo $value['username'] ?>"
															 data-full_name="<?php echo $value['full_name'] ?>"
															 data-email="<?php echo $value['email'] ?>"
															 data-toggle="modal" data-target="#edit-data"
															 class="btn btn-primary shadow btn-xs sharp mr-1">
															 <i class="fa fa-pencil"></i>
														</a>
													  <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
												</div>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Modal Tambah -->
<div class="modal fade" id="tambahpengguna">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Pengguna</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
			</div>
			<div class="modal-body">
				<form class="comment-form" action="<?php echo base_url('master/pengguna/tambah')?>" method="post" enctype="multipart/form-data" role="form">
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label class="text-black font-w600">Username</label>
								<input type="text" class="form-control" value="" name="Username" placeholder="Username" required>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label class="text-black font-w600">Nama Instansi</label>
								<input type="text" class="form-control" value="" placeholder="Nama" name="Nama" required>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label class="text-black font-w600">Email </label>
								<input type="text" class="form-control" value="" placeholder="Email" name="Email" required>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<input type="submit" value="Tambah" class="submit btn btn-primary" name="submit">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



<!-- Modal Ubah -->
<div id="edit-data" class="modal fade">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
							<h5 class="modal-title">Ubah Pengguna</h5>
              	<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>

             <div class="modal-body">
							   <form class="form-horizontal" action="<?php echo base_url('master/pengguna/ubah')?>" method="post" enctype="multipart/form-data" role="form">
									 <div class="row">
										 <div class="col-lg-12">
											 <div class="form-group">
												  <label class="text-black font-w600">Username</label>
												 		<input type="hidden" id="id" name="id">
														<input type="text" class="form-control" id="username" name="username" placeholder="Username" required></input>
											 	</div>
										 </div>
										  <div class="col-lg-12">
												<div class="form-group">
														<label class="text-black font-w600">Nama</label>
														 <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Nama Lengkap" required></input>
												</div>
											</div>

											 <div class="col-lg-12">
												  <div class="form-group">
													<label class="text-black font-w600">Email</label>
													  <input type="text" class="form-control" id="email" name="email" placeholder="Email" required></input>
													</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<input type="submit" value="Simpan" class="submit btn btn-primary" name="submit">
												</div>
											</div>
										</div>
                 </div>


            </div>
        </div>
    </div>


<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#username').attr("value",div.data('username'));
            modal.find('#full_name').html(div.data('full_name'));
            modal.find('#email').attr("value",div.data('email'));
        });
    });
</script>
