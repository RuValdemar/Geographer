<?php
	require 'vendor/autoload.php';
	use MenaraSolutions\Geographer\Earth;
	use MenaraSolutions\Geographer\Country;

	$earth = new Earth();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Geographer</title>

	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script>

	
</head>
<body>
	<div class="container">
	<br>
		<div class="row">
			<div class="col-sm-6">
				<form action="">
					<div class="form-group">
						<label>Seleccione un Pais</label>
						<select class="form-control" id="countries">
							<option value="">Seleccione un pais</option>
							<?php foreach ($earth->getCountries()->toArray() as $country): ?>
								<option value="<?php echo $country['code']; ?>"><?php echo $country['name']; ?></option>
								
							<?php endforeach?>
						</select>
					</div>

					<div class="form-group">
						<label>Seleccione un Estado</label>
						<select class="form-control" id="states">
							<option value="">Seleccione un estado</option>
						</select>
					</div>

					<div class="form-group">
						<label>Seleccionhe una Ciudad</label>
						<select class="form-control" id="cities">
							<option value="">Seleccione una ciudad</option>
						</select>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/main.js"></script>
</body>
</html>