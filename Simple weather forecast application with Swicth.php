<!DOCTYPE html>
<html>
<head>
	<title>Latihan JavaScript</title>
	<script type="text/javascript">
		const select = document.querySelector('select');
		const para = document.querySelector('p');

		select.addEventListener('change',setWeather);

		function setWeather() {
			const choice = select.value;

			if (choice=='sunny') {
				para.textContent = 'It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream.';
			} else if (choice==='rainy') {
				para.textContent = 'Rain is falling outside; take a rain coat and an umbrella, and don\'t stay out for too long.';
			} else if (choice==='showing') {
				para.textContent = 'The snow is coming down — it is freezing! Best to stay in with a cup of hot chocolate, or go build a snowman.';
			} else if (choice==='overcast') {
				para.textContent = 'It isn\'t raining, but the sky is grey and gloomy; it could turn any minute, so take a rain coat just in case.';
			} else {
				para.textContent = '';
			}
		}
	</script>
</head>
<body>
	<!-- weather forecast application to use a switch statement instead: --> 
	<label for="weather">select the weather type today:</label>
	<select id="weather">
		<option value="">--Make a choice--</option>
		<option value="sunny">Sunny</option>
		<option value="rainy">Rainy</option>
		<option value="showing">Snowing</option>
		<option value="overcast">Overcast</option>
	</select>
	<br><br>
	<p></p>
	
	
</body>
</html>
