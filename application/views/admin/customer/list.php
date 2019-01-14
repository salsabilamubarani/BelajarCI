<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Address</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($customer as $customer): ?>
									<tr>
										<td width="150">
											<?php echo $customer->name ?>
										</td>
										<td>
											<?php echo $customer->address ?>
										</td>
										
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>