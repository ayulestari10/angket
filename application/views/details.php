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

	#GlobalChart {
		width: 100px;
		height: 100px;
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

<div class="container" id="ct">
	<hr>
		<h1><?= $pernyataan->pernyataan ?></h1>
		<a class="btn btn-success" href="<?= base_url('angket/adm') ?>"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
	<hr>
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-8">
			<h2>Grafik jumlah pemilih secara global</h2>
			<!-- <canvas id="GlobalChart"></canvas> -->
			<canvas id="DataGlobal"></canvas>
		</div>
		<div class="col-md-2">
			
		</div>
	</div>
	<center>
		<h2>Grafik jumlah pemilih tiap jurusan</h2>
	</center>
	<div class="row">
		<div class="col-md-6">
			<h4>Teknik Informatika</h4>
			<canvas id="ChartTI"></canvas>		
		</div>
		<div class="col-md-6">
			<h4>Sistem Informasi</h4>
			<canvas id="ChartSI"></canvas>		
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h4>Sistem Komputer</h4>
			<canvas id="ChartSK"></canvas>		
		</div>
		<div class="col-md-6">
			<h4>Diploma Komputer</h4>
			<canvas id="ChartDiploma"></canvas>		
		</div>
	</div>
</div>

<?php  
	$skor_angkatan = explode('#', $pernyataan->angkatan);
	$skor_jurusan = explode('#', $pernyataan->jurusan);
	$skor_sts = explode('#', $pernyataan->STS);
	$skor_ts = explode('#', $pernyataan->TS);
	$skor_n = explode('#', $pernyataan->N);
	$skor_s = explode('#', $pernyataan->S);
	$skor_st = explode('#', $pernyataan->ST);
?>

<script type="text/javascript">
	var data = {
	    labels: [
	        "Sistem Informasi",
	        "Sistem Komputer",
	        "Teknik Informatika",
	        "Diploma"
	    ],
	    datasets: [
	        {
	            data: [<?= $skor_jurusan[1] ?>,<?= $skor_jurusan[2] ?>,<?= $skor_jurusan[0] ?>,<?= $skor_jurusan[3] ?>],
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

	var dataGlobal = {
	    labels: [
	        "STS",
	        "TS",
	        "N",
	        "S",
	        "ST"
	    ],
	    datasets: [
	        {
	            data: [<?= $skor_sts[0] + $skor_sts[1] + $skor_sts[2] + $skor_sts[3] ?>,<?= $skor_ts[0] + $skor_ts[1] + $skor_ts[2] + $skor_ts[3] ?>,<?= $skor_n[0] + $skor_n[1] + $skor_n[2] + $skor_n[3] ?>,<?= $skor_s[0] + $skor_s[1] + $skor_s[2] + $skor_s[3] ?>, <?= $skor_st[0] + $skor_st[1] + $skor_st[2] + $skor_st[3] ?>],
	            backgroundColor: [
	                "#FF00FF",
	                "#00CC33",
	                "#3399FF",
	                "grey",
	                "#008000"
	            ],
	            hoverBackgroundColor: [
	                "#FF6384",
	                "#00FF00",
	                "#00FFFF",
	                "#C0C0C0",
	                "#FFFF00"
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
	            data: [<?= $skor_sts[1] ?>,<?= $skor_ts[1] ?>,<?= $skor_n[1] ?>,<?= $skor_s[1] ?>,<?= $skor_st[1] ?>],
	            backgroundColor: [
	               	"#FF00FF",
	                "#00CC33",
	                "#3399FF",
	                "grey",
	                "#008000"
	            ],
	            hoverBackgroundColor: [
	                "#FF6384",
	                "#00FF00",
	                "#00FFFF",
	                "#C0C0C0",
	                "#FFFF00"
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
	            data: [<?= $skor_sts[2] ?>,<?= $skor_ts[2] ?>,<?= $skor_n[2] ?>,<?= $skor_s[2] ?>,<?= $skor_st[2] ?>],
	            backgroundColor: [
	               	"#FF00FF",
	                "#00CC33",
	                "#3399FF",
	                "grey",
	                "#008000"
	            ],
	            hoverBackgroundColor: [
	                "#FF6384",
	                "#00FF00",
	                "#00FFFF",
	                "#C0C0C0",
	                "#FFFF00"
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
	            data: [<?= $skor_sts[0] ?>,<?= $skor_ts[0] ?>,<?= $skor_n[0] ?>,<?= $skor_s[0] ?>,<?= $skor_st[0] ?>],
	            backgroundColor: [
	               	"#FF00FF",
	                "#00CC33",
	                "#3399FF",
	                "grey",
	                "#008000"
	            ],
	            hoverBackgroundColor: [
	                "#FF6384",
	                "#00FF00",
	                "#00FFFF",
	                "#C0C0C0",
	                "#FFFF00"
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
	            data: [<?= $skor_sts[3] ?>,<?= $skor_ts[3] ?>,<?= $skor_n[3] ?>,<?= $skor_s[3] ?>,<?= $skor_st[3] ?>],
	            backgroundColor: [
	               	"#FF00FF",
	                "#00CC33",
	                "#3399FF",
	                "grey",
	                "#008000"
	            ],
	            hoverBackgroundColor: [
	                "#FF6384",
	                "#00FF00",
	                "#00FFFF",
	                "#C0C0C0",
	                "#FFFF00"
	            ]
	        }]
	};


	//var ctx1 = document.getElementById("GlobalChart");
	var ctx2 = document.getElementById("ChartSI");
	var ctx3 = document.getElementById("ChartSK");
	var ctx4 = document.getElementById("ChartTI");
	var ctx5 = document.getElementById("ChartDiploma");
	var ctx6 = document.getElementById("DataGlobal");

	// For a pie chart
	// var myPieChart = new Chart(ctx1,{
	//     type: 'pie',
	//     data: data
	// });

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

	var myPieChart = new Chart(ctx6,{
	    type: 'pie',
	    data: dataGlobal
	});
</script>