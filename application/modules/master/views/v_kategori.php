<div class="content-body">
	<div class="container-fluid">
		<div class="form-head align-items-center d-flex mb-sm-4 mb-3">
						<div class="mr-auto">
							<h2 class="text-black font-w600">Daftar Kategori</h2>
							<p class="mb-0">Tabel Kategori</p>
						</div>
						<div>
							<a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+ Tambah</a>
							<!-- <a href="index.html" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Filter Date</a> -->
						</div>
					</div>
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
										<th>Nama Kategori</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$no=0;
									 foreach ($kategori as $value):
										$no++;
										  ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $value["KATEGORI"]; ?></td>
											<!-- <td class="text-center"><a href="#"><strong><?php echo $value["active"]; ?></strong></a></td> -->
											<td>
												<div class="d-flex">	<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
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
