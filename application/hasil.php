<style type="text/css">
	.csi{
		width:300px; height:300px; text-align:center;
	}
	.csk{
		width:300px; height:300px; text-align:center;
		margin-top: -10%;
	}
	.cti{
		width:300px; height:300px; text-align:center;
		margin-top: -52%; margin-left: 70%;
	}
	.cdiploma{
		width:300px; height:300px; text-align:center;
		margin-top: -31%; margin-left: 70%;
	}
	.tombol{margin-left: 100%; margin-top: -20%;}
	#kategori2, #kategori3, #kategori4, #kategori5, #kategori6, #kategori7,
	#kategori8, #kategori9, #kategori10, #kategori11 {
	    display: none;
	}
</style>

<script type="text/javascript">
	var kategori = 1;

	function next(){
      $("#kategori" + kategori).css("display", "none")
      $("#kategori" + (kategori + 1)).css("display", "block");
      kategori++;
    }
</script>

<div class="container">
	<div class="row" style="margin-bottom:-3%;">
		<div style="text-align:center; margin-bottom:5%;">
			<h3><strong>HASIL ANGKET FGD II<br/>FAKULTAS ILMU KOMPUTER 2016</strong></h3>	
		</div>
	</div>
	
	<div id="kategori1">
		<h4><strong>Dosen</strong></h4>
		<?php for($i = 1; $i <= 3; $i++): ?>
		<div class="row">
			
			<h5><?= $i.'. '. $row[$i]->pernyataan ?></h5>
			<div class="col-md-5">
				<canvas id="GlobalChart" width="200" height="200"></canvas>
				<h4>Semua Jurusan</h4>
			</div>
			<div class="col-md-1 csi">
				<canvas id="ChartSI"></canvas>
				<h4>Sistem Informasi</h4>
			</div>
			<div class="col-md-1 csk">
				<canvas id="ChartSK"></canvas>
				<h4>Sistem Komputer</h4>
			</div>
			<div class="col-md-1 cti">
				<canvas id="ChartTI"></canvas>
				<h4>Teknik Informatika</h4>
			</div>
			<div class="col-md-1 cdiploma">
				<canvas id="ChartDiploma"></canvas>
				<h4>Diploma</h4>
			</div>
		</div>
		<?php endfor; ?>
		<div class="tombol">
			<button onclick="next()" class="btn btn-info">Next</button>
		</div>
	</div>

	<div id="kategori2">
		<h4><strong>Materi</strong></h4>
		<?php for($i = 4; $i <= 7; $i++): ?>
		<div class="row">
			
			<h5><?= $i.'. '. $row[$i]->pernyataan ?></h5>
			<div class="col-md-5">
				<canvas id="GlobalChart" width="200" height="200"></canvas>
				<h4>Semua Jurusan</h4>
			</div>
			<div class="col-md-1 csi">
				<canvas id="ChartSI"></canvas>
				<h4>Sistem Informasi</h4>
			</div>
			<div class="col-md-1 csk">
				<canvas id="ChartSK"></canvas>
				<h4>Sistem Komputer</h4>
			</div>
			<div class="col-md-1 cti">
				<canvas id="ChartTI"></canvas>
				<h4>Teknik Informatika</h4>
			</div>
			<div class="col-md-1 cdiploma">
				<canvas id="ChartDiploma"></canvas>
				<h4>Diploma</h4>
			</div>
		</div>
		<?php endfor; ?>
		<div class="tombol">
			<button onclick="next()" class="btn btn-info">Next</button>
		</div>
	</div>
	
</div>

<?php  
	 for($i = 0; $i < 50; $i++){
	 	$data = $this->Angket_model->get_databy_id($i);
	 	$jurusan = explode("#", $data->jurusan);

		$SI 		= $jurusan[0];
		$SK 		= $jurusan[1];
		$TI 		= $jurusan[2];
		$Diploma	= $jurusan[3];
	}
	// $SI, $SK, $TI, $Diploma 36A2EB
?>

<script type="text/javascript">
	for(var i = 0; i<50; i++){
		if($jurusan == $SI)
			$SI++;
		else if($jurusan == $SK)
			$SK++;
		else if($jurusan == $TI)
			$TI++;
		else if($jurusan == $Diploma)
			$Diploma++;
	}

	var data = {
	    labels: [
	        "Sistem Informasi",
	        "Sistem Komputer",
	        "Teknik Informatika",
	        "Diploma"
	    ],
	    datasets: [
	        {
	            data: [$SI,$SK,$TI,$Diploma],
	            backgroundColor: [
	                "#FF00FF",
	                "#00CC33",
	                "#3399FF",
	                "grey"
	            ],
	            hoverBackgroundColor: [
	                "#FF6384",
	                "#00FF00",
	                "#00FFFF",
	                "#C0C0C0"
	            ]
	        }]
	};

	var dataSI = {
	    labels: [
	        "STS",
	        "TS",
	        "N",
	        "S",
	        "ST"
	    ],
	    datasets: [
	        {
	            data: [$SI,$SK,$TI,$Diploma],
	            backgroundColor: [
	                "#FF00FF",
	                "#00CC33",
	                "#3399FF",
	                "grey",
	                "yellow"
	            ],
	            hoverBackgroundColor: [
	                "#FF6384",
	                "#00FF00",
	                "#00FFFF",
	                "#C0C0C0",
	                "orange"
	            ]
	        }]
	};

	var dataSK = {
	    labels: [
	        "STS",
	        "TS",
	        "N",
	        "S",
	        "ST"
	    ],
	    datasets: [
	        {
	            data: [$SI,$SK,$TI,$Diploma],
	            backgroundColor: [
	                "#FF00FF",
	                "#00CC33",
	                "#3399FF",
	                "grey",
	                "yellow"
	            ],
	            hoverBackgroundColor: [
	                "#FF6384",
	                "#00FF00",
	                "#00FFFF",
	                "#C0C0C0",
	                "orange"
	            ]
	        }]
	};

	var dataTI = {
	    labels: [
	        "STS",
	        "TS",
	        "N",
	        "S",
	        "ST"
	    ],
	    datasets: [
	        {
	            data: [$SI,$SK,$TI,$Diploma],
	            backgroundColor: [
	                "#FF00FF",
	                "#00CC33",
	                "#3399FF",
	                "grey",
	                "yellow"
	            ],
	            hoverBackgroundColor: [
	                "#FF6384",
	                "#00FF00",
	                "#00FFFF",
	                "#C0C0C0",
	                "orange"
	            ]
	        }]
	};

	var dataDiploma = {
	    labels: [
	        "STS",
	        "TS",
	        "N",
	        "S",
	        "ST"
	    ],
	    datasets: [
	        {
	            data: [$SI,$SK,$TI,$Diploma],
	            backgroundColor: [
	                "#FF00FF",
	                "#00CC33",
	                "#3399FF",
	                "grey",
	                "yellow"
	            ],
	            hoverBackgroundColor: [
	                "#FF6384",
	                "#00FF00",
	                "#00FFFF",
	                "#C0C0C0",
	                "orange"
	            ]
	        }]
	};


	var ctx1 = document.getElementById("GlobalChart");
	var ctx2 = document.getElementById("ChartSI");
	var ctx3 = document.getElementById("ChartSK");
	var ctx4 = document.getElementById("ChartTI");
	var ctx5 = document.getElementById("ChartDiploma");

	// For a pie chart
	var myPieChart = new Chart(ctx1,{
	    type: 'pie',
	    data: data
	});

	var myPieChart = new Chart(ctx2,{
	    type: 'pie',
	    data: dataSI
	});

	var myPieChart = new Chart(ctx3,{
	    type: 'pie',
	    data: dataSK
	});

	var myPieChart = new Chart(ctx4,{
	    type: 'pie',
	    data: dataTI
	});

	var myPieChart = new Chart(ctx5,{
	    type: 'pie',
	    data: dataDiploma
	});
</script>