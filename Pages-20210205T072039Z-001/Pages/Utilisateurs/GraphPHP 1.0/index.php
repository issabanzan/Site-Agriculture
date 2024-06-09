<?php
	/* Database connection settings */
	$host = 'localhost';
	$user = 'bcttrdqx_root';
	$pass = 'Banzan9771Z';
	$db = 'bcttrdqx_issa';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	$data1 = '';
	$data2 = '';
	

	//query to get data from the table
	$sql = "SELECT * FROM `datasets` ";
    $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$data1 = $data1 . '"'. $row['data1'].'",';
		$data2 = $data2 . '"'. $row['data2'] .'",';
	}

	$data1 = trim($data1,",");
	$data2 = trim($data2,",");

?>

<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
		<title> Météo </title>
		<? php date ( string $format [, int $timestamp = time() ] ) : string ?>
 
		<style type="text/css">			
			body{
				font-family: Arial;
			    margin: 80px 100px 10px 100px;
			    padding: 0;
			    text-align: center;
			
			}

			.container {
				
				padding: 10px;
			}
		</style>

	</head>

	<body>	   
	    <div class="container">	
	    <h1> données météorologiques</h1>       
			<canvas id="chart" style="width: 100%; height: 65vh; background: #77b5fe;  border-radius: 10px; border: 1px solid #555652; margin-top: 10px;"></canvas>
                 
			<script>
				var ctx = document.getElementById("chart").getContext('2d');
				//Maintenant, créons un graphique. Pour créer un graphique, nous devons d'abord créer une instance de Chart().
    			var myChart = new Chart(ctx, {
        		type: 'line',
		        data: {
		            labels: [1,2,3,4,5,6,7,8,9,5,6,7,10,11,12,13,14,15,16,1718,19,20,20,22,23,24,25,26,27,28,29,30,31],
		            datasets: 
		            [{
		                label: 'Températures',
		                data: [<?php echo $data1; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgb(144, 238, 144)',
		                borderWidth: 3
		            },]
		        },
		     
		        options: {
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
		        }
		    });
			</script>
	    </div>
	    
	</body>
</html>