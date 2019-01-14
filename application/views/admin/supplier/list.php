<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
                                        <th>Supplier_id</th>
										<th>Supplier_name</th>
										<th>Supplier_address</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($supplier as $supplier): ?>
									<tr>
                                        <td width="150">
                                            <?php echo $supplier->supplier_id ?>
                                        </td>
										<td>
											<?php echo $supplier->supplier_name ?>
										</td>
										<td>
											<?php echo $supplier->supplier_address ?>
										</td>
										
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>