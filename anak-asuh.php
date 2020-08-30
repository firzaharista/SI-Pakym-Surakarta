			<section class="no-padding sh-company-history">
				<div class="sub-header ">
					<!-- <span>ROCKET STARS WANTED</span> -->
					<h3>DATA ANAK ASUH</h3>
					<ol class="breadcrumb">
						<li>
							<a href="#"><i class="fa fa-home"></i>Anak Asuh</a>
						</li>
						<li class="active">Data Anak Asuh</li>
					</ol>
				</div>
			</section>

			<!-- /Why Us -->

			<section class="bg-case-h9">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-sm-offset-1">
							<div class="title-block title-contact">
								<h3>Data Anak Asuh</h3>
								<p>Data Anak Asuh PAKYM Surakarta</p>
								<span class="bottom-title"></span>
							</div>
							<div class="list-job-warp">
								<div class="table-warp">
									<div class="table-responsive">
										<table class="table table-hover table-reset">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama</th>
													<th>TTL</th>
													<th>Pendidikan Saat Ini</th>
													<th>Status</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												$sql = "SELECT * FROM anak_asuh,status WHERE anak_asuh.id_status = status.id_status order by id_anakasuh ASC";
												$run = mysqli_query($conn, $sql);
												while ($e = mysqli_fetch_array($run)) {
													$tgl = date("d-m-Y", strtotime($e['tanggal_lahir']));
													echo "
                                                    <tr align='center'>
                                                        <td>$no</td>
														<td>$e[nama_anakasuh]</td>
														<td>$e[tempat_lahir], $tgl</td>
														<td>$e[pendidikan]</td>
                                                        <td>$e[nama_status]</td>
                                                        <td>
                                                            <a href='?page=detail-anakasuh&detail=$e[id_anakasuh_en]'><button class='btn btn'>Detail</button></a>
                                                        </td>
                                                    </tr>";
													$no++;
												}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>