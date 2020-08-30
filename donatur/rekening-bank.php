<section class="bg-quote-h2">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="callback-warp cbw-h2">
					<div class="title-block title-on-dark text-center title-pd">
						<span class="top-title "></span>
						<h2>Rekening Bank</h2>
						<p class="sub-title">
							Daftar Rekening Bank dari PAKYM Surakarta
						</p>
						<span class="bottom-title"></span> <br> <br>
						<div class="list-job-warp">
							<div class="table-warp">
								<div class="table-responsive">
									<table class="table table-hover table-reset">
										<thead>
											<tr>
												<th>No.</th>
												<th>Nama Bank</th>
												<th>No. Rekening</th>
												<th>Atas Nama</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 1;
											$sql = "SELECT * FROM bank_tujuan order by id_banktujuan ASC";
											$run = mysqli_query($conn, $sql);
											while ($e = mysqli_fetch_array($run)) {
												// $tgl = date("d-m-Y", strtotime($e['tanggal_lahir']));
												echo "
                                            <tr align='center'>
                                                <td>$no</td>
                                                <td>$e[nama_bank]</td>
                                                <td>$e[no_rek]</td>
                                                <td>$e[atas_nama]</td>
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
		</div>
	</div>
</section>