<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
<thead>
									<tr>
                                        <th>Karyawan_id</th>
										<th>Karyawan_name</th>
                                        <th>Karyawan_address</th>
                                        <th>Karyawan_telp</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($karyawan as $karyawan): ?>
									<tr>
                                        <td width="150">
                                            <?php echo $karyawan->karyawan_id ?>
                                        </td>
										<td>
											<?php echo $karyawan->karyawan_name ?>
										</td>
										<td>
											<?php echo $karyawan->karyawan_address ?>
                                        </td>
                                        <td>
                                            <?php echo $karyawan->karyawan_telp ?>
                                        </td>
										
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>