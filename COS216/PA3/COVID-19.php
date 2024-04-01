<!-- Paul Nhlapo u18108378 -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scable=no ">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
	<link rel="stylesheet" href="./css/covid-19.css">
	<title>COVID-19</title>
</head>

<body class="background">
	<div class="loader"> <img src="img/load-gif.gif" alt=""> </div>
	<div class="nav">
		<div class="container flex">
			<nav>
				<ul>
					<li><a href="./Today.html">HOME</a></li>
					<li><a href="./World.html">World</a></li>
					<li><a href="./Calendar.html">Calendar</a></li>
					<li><img src="./img/myWebsitelogo/black.png" alt=""></li>
					<li>
						<div class="Search-bar flex">
							<form class="btnSearch" style="margin:auto;max-width:300px">
								<input type="text" placeholder="Search.." name="search2">
								<button type="submit"><i class="fa fa-search"></i></button> <strong class="SearchLabel">Search by fields:</strong>
								<div class="items">
									<input type="checkbox" id="Tags" name="Tags" value="Bike">
									<label for="Tags"> Tags</label>
									<input type="checkbox" id="Aurthor" name="Aurthor" value="Aurthor">
									<label for="Aurthor"> Aurthor</label>
									<input type="checkbox" id="Categories" name="Categories" value="Market">
									<label for="Categories"> Categories</label>
								</div>
							</form>
						</div>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<h1>The Stats for all the Covid 19 cases in South Africa</h1>
	<canvas id="myChart" width="400" height="400"></canvas>
	<script>
	const ctx = document.getElementById('myChart').getContext('2d');
	const myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['years', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
			datasets: [{
				label: 'COVID-19 Statistics',
				data: [12, 19, 3, 5, 2, 3],
				backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'],
				borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			}
		}
	});
	</script>
	<div class="container"> </div>
	<script src="./js/covid-19.js"></script>
</body>

</html>