<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Scoped CSS Variables and JS</title>
</head>
<body>
	<br><br>
	<h2>Update CSS Variable with <span class="h1">JS</span></h2>

	<div class="controls">
		<label for="spacing">Spacing : </label>
		<input id="spacing" type="range" name="spacing" min="10" max="200" value="10" data-sizing="px">

		<label for="base">Base Color</label>
		<input id="base" type="Color" name="base" value="#ffc600">
	</div>

	<img src="https://source.unsplash.com/7bwQXzbF6KE/800x500">

	<!-- CSS --> 
	<style type="text/css">
		:root {
			--base: $ffc600;
			--spacing:10px;
			--blur:10px;
		}

		img {
			padding: var(--spacing);
			background: var(--base);
			filter: blur(var(--blur));
		}

		.h1 {
			color: var(--base);
		}

		body {
			text-align: center;
			background: #193549;
			color: white;
			font-family: 'helvetica neue', sans-serif;
			font-weight: 100;
			font-size: 50px;
		}

		.controls {
			margin-bottom: 50px;
		}

		input {
			width: 100px;
		}
	</style>

	<script type="text/javascript">
				const inputs = document.querySelectorAll('.controls input');

		function handleUpdate() {
			const suffix = this.dataset.sizing || '';
			document.documentElement.style.setProperty(`--${this.name}`, this.value + suffix);
		}

		inputs.forEach(input => input.addEventListener('change',handleUpdate));
		inputs.forEach(input => input.addEventListener('mousemove',handleUpdate))
	</script>

</body>
</html>