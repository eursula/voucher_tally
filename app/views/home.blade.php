{{-- home.blade.php --}}
@extends('layouts.main')

@section('content')

	<div class="container">
		<header class="flex flex-row flex-j-between">
			<h1>Voucher Tracking Database</h1>
			<img src="assets/img/takapunaB&W.jpg" width="100" alt="logo">
		</header>

		<div class="voucher-buttons flex flex-j-center">
			<button class="give" data-modal-target="give"><i class="fa fa-plus"></i>Give Vouchers</button>
			<button class="redeem" data-modal-target="redeem"><i class="fa fa-check"></i>Redeem Vouchers</button>
			<button class="edit" data-modal-target="edit"><i class="fa fa-pencil"></i>Edit Vouchers</button>
		</div>

		<div class="modal" data-modal-name="give">
			<h1>Give Vouchers</h1>
			<form class="form" id="form" action="">
				<div class="main-form flex flex-j-between">
					<div class="left flex flex-column flex-end">
						<label for="name">Team/Company Name:</label>
						<select name="name" id="name">
							<option value="one">North Shore Rugby Club</option>
							<option value="two">Takapuna Rugby Club</option>
						</select>
						<label for="voucher">Voucher Type:</label>
						<select name="voucher" id="voucher">
							<option value="one">Player of the Day - Kids</option>
							<option value="two">Player of the Day - Adults</option>
							<option value="three">Random Act of Kindness</option>
							<option value="four">Hot Rod Promo</option>
							<option value="five">Free Loaf</option>
							<option value="six">T-Shirts</option>
							<option value="seven">Worker of the Month</option>
							<option value="eight">Outstanding effort</option>
						</select>
					</div>
					<div class="right">
						<label for="amount">Amount:</label>
						<input type="number" id="amount">

						<label for="date">Date:</label>
						<input type="date" id="date">
					</div>
				</div>
				<input type="submit" id="submit" value="Submit">
			</form>
		</div>
		
		<div class="modal" data-modal-name="redeem">
			<h1>Redeem Vouchers</h1>
			<form class="form flex flex-j-between" id="form" action="">
				<div class="left">
					<label for="name">Team/Company Name:</label>
					<select name="name" id="name">
						<option value="one">North Shore Rugby Club</option>
						<option value="two">Takapuna Rugby Club</option>
					</select>
					<label for="voucher">Voucher Type:</label>
					<select name="voucher" id="voucher">
						<option value="one">Player of the Day - Kids</option>
						<option value="two">Player of the Day - Adults</option>
						<option value="three">Random Act of Kindness</option>
						<option value="four">Hot Rod Promo</option>
						<option value="five">Free Loaf</option>
						<option value="six">Worker of the Month</option>
						<option value="seven">Outstanding effort</option>
					</select>
				</div>
				<div class="right">
					<label for="amount">Amount:</label>
					<input type="number" id="amount">

					<label for="date">Date:</label>
					<input type="date" id="date">

					<input type="submit" id="submit" value="Submit">
				</div>
			</form>
		</div>
		<div class="modal" data-modal-name="edit">
			<h1>Add-Edit-Delete Vouchers</h1>
			<form class="form" id="form" action="">
				<label for="name">Voucher Name:</label>
				<input type="text" id="name">

				<input type="submit" id="submit" value="Submit">
			</form>
		</div>

		<div class="modal-bg" data-modal-close></div>
		
		<div class="teams">
	        <table class="table">
	        	<tr>
		        	<th width="400">Company/Team</th>
		        	<th width="200">Code</th>
		        	<th width="150">Total Given</th>
		        	<th width="150">Total Redeemed</th>
		        	<th width="50">Percentage Returned</th>
		        </tr>
		        <tr data-href="teams">
		        	<td width="400">North Shore Rugby Club</td>
		        	<td width="200">NSRC</td>
		        	<td width="150">50</td>
		        	<td width="150">15</td>
		        	<td width="50">15%</td>
		        </tr>

		        <tr data-href="teams">
		            <td width="400">Takapuna Rugby Club</td>
		            <td width="200">TRC</td>
		            <td width="150">70</td>
		            <td width="150">20</td>
		            <td width="50">18%</td>
		        </tr>
		        <tr data-href="teams">
		            <td width="400">North Shore Cricket Club</td>
		            <td width="200">NSCC</td>
		            <td width="150">124</td>
		            <td width="150">20</td>
		            <td width="50">18%</td>
		        </tr>
		        <tr data-href="teams">
		            <td width="400">North Shore Softball Club</td>
		            <td width="200">TRC</td>
		            <td width="150">70</td>
		            <td width="150">20</td>
		            <td width="50">18%</td>
		        </tr>   
	        </table>
      	</div>
    </div>

@stop
