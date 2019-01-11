<?php
include('include/header.php');
?>
<div class="container-fluid bg-no-overlay">
    <div class="row text-center">
		<h1 style="margin-top: 90px;">Order History</h1>
		<p><span><a href="index.php">Home <i class='fa fa-angle-right'></i></a></span> 
		<span>Order History</span></p>
        
	</div>
</div>

<div class="container" style="margin-top: 50px; background-color: #8080802b; margin-bottom: 20px;">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:35%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:18%" class="text-center">Subtotal</th>
							<th style="width:15%"class="text-center">Date</th>
							<th style="width:18%"class="text-center">Status</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Product 1</h4>
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</td>
							<td data-th="Price">$1.99</td>
							<td data-th="Quantity">1</td>
							<td data-th="Subtotal" class="text-center">1.99</td>
							<td data-th="Date"class="text-center">1/1/2019</td>
							<td data-th="Status"class="text-center">Delivered</td>
						</tr>
							<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Product 1</h4>
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</td>
							<td data-th="Price">$1.99</td>
							<td data-th="Quantity">1</td>
							<td data-th="Subtotal" class="text-center">1.99</td>
							<td data-th="Date"class="text-center">1/1/2019</td>
							<td data-th="Status"class="text-center">Delivered</td>
							
						</tr>
							<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Product 1</h4>
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</td>
							<td data-th="Price">$1.99</td>
							<td data-th="Quantity">1</td>
							<td data-th="Subtotal" class="text-center">1.99</td>
							<td data-th="Date"class="text-center">1/1/2019</td>
							<td data-th="Status"class="text-center">Delivered</td>
							
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
							
						</tr>
					</tfoot>
				</table>
</div>

<?php
include('include/footer.php');
?>

