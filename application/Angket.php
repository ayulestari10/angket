<?php

class Angket extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Angket_model');
	}

	public function hasil()
	{
		$row = array();

		for($i = 1; $i < 50; $i++){
			$row[$i] = $this->Angket_model->get_data_byId($i);
		}

		$data = array(
			'title'		=> 'HASIL | Fasilkom Group Discusion II',
			'content'	=> 'hasil',
			'row'		=> $row
			// 'row1'		=> $this->Angket_model->get_data_byId(1),
			// 'row2'		=> $this->Angket_model->get_data_byId(2),
			// 'row3'		=> $this->Angket_model->get_data_byId(3),
			// 'row4'		=> $this->Angket_model->get_data_byId(4),
			// 'row5'		=> $this->Angket_model->get_data_byId(5),
			// 'row6'		=> $this->Angket_model->get_data_byId(6),
			// 'row7'		=> $this->Angket_model->get_data_byId(7),
			// 'row8'		=> $this->Angket_model->get_data_byId(8),
			// 'row9'		=> $this->Angket_model->get_data_byId(9),
			// 'row10'		=> $this->Angket_model->get_data_byId(10),
			// 'row11'		=> $this->Angket_model->get_data_byId(11),
			// 'row12'		=> $this->Angket_model->get_data_byId(12),
			// 'row13'		=> $this->Angket_model->get_data_byId(13),
			// 'row14'		=> $this->Angket_model->get_data_byId(14),
			// 'row15'		=> $this->Angket_model->get_data_byId(15),
			// 'row16'		=> $this->Angket_model->get_data_byId(16),
			// 'row17'		=> $this->Angket_model->get_data_byId(17),
			// 'row18'		=> $this->Angket_model->get_data_byId(18),
			// 'row19'		=> $this->Angket_model->get_data_byId(19),
			// 'row20'		=> $this->Angket_model->get_data_byId(20),
			// 'row21'		=> $this->Angket_model->get_data_byId(21),
			// 'row22'		=> $this->Angket_model->get_data_byId(22),
			// 'row23'		=> $this->Angket_model->get_data_byId(23),
			// 'row24'		=> $this->Angket_model->get_data_byId(24),
			// 'row25'		=> $this->Angket_model->get_data_byId(25),
			// 'row26'		=> $this->Angket_model->get_data_byId(26),
			// 'row27'		=> $this->Angket_model->get_data_byId(27),
			// 'row28'		=> $this->Angket_model->get_data_byId(28),
			// 'row29'		=> $this->Angket_model->get_data_byId(29),
			// 'row30'		=> $this->Angket_model->get_data_byId(30),
			// 'row31'		=> $this->Angket_model->get_data_byId(31),
			// 'row32'		=> $this->Angket_model->get_data_byId(32),
			// 'row33'		=> $this->Angket_model->get_data_byId(33),
			// 'row34'		=> $this->Angket_model->get_data_byId(34),
			// 'row35'		=> $this->Angket_model->get_data_byId(35),
			// 'row36'		=> $this->Angket_model->get_data_byId(36),
			// 'row37'		=> $this->Angket_model->get_data_byId(37),
			// 'row38'		=> $this->Angket_model->get_data_byId(38),
			// 'row39'		=> $this->Angket_model->get_data_byId(39),
			// 'row40'		=> $this->Angket_model->get_data_byId(40),
			// 'row41'		=> $this->Angket_model->get_data_byId(41),
			// 'row42'		=> $this->Angket_model->get_data_byId(42),
			// 'row43'		=> $this->Angket_model->get_data_byId(43),
			// 'row44'		=> $this->Angket_model->get_data_byId(44),
			// 'row45'		=> $this->Angket_model->get_data_byId(45),
			// 'row46'		=> $this->Angket_model->get_data_byId(46),
			// 'row47'		=> $this->Angket_model->get_data_byId(47),
			// 'row48'		=> $this->Angket_model->get_data_byId(48),
			// 'row49'		=> $this->Angket_model->get_data_byId(49)
		);


		$this->load->view('includes/template', $data);
	}

	function index(){
		$data = array(
			'title'			=> 'ANGKET | Fasilkom Group Discusion II',
			'content'		=> 'Home'
		);
		$this->load->view('includes/template', $data);
	}


	public function submitAngket()
	{
		/**
		 * IF 0
		 * SI 1
		 * SK 2
		 * D3 3
		 *
		 * 2012 0
		 * 2013 1
		 * 2014 2
		 * 2015 3
		 * 2016 4
		 */
		if (isset($_GET))
		{
			$jurusan = $_GET['jurusan'];
			$angkatan = $_GET['angkatan'];
			for ($i = 1; $i < 50; $i++)
			{
				$data 			= $this->angket_model->get_data_byId($i);
				$skor_jurusan 	= explode('#', $data->jurusan);
				$skor_angkatan 	= explode('#', $data->angkatan);
				$vote_value 	= $_GET['point' . $i];

				switch ($jurusan)
				{
					case "Teknik Informatika":
						$skor_jurusan[0]++;
						break;

					case "Sistem Informasi":
						$skor_jurusan[1]++;
						break;

					case "Sistem Komputer":
						$skor_jurusan[2]++;
						break;

					case "Diploma":
						$skor_jurusan[3]++;
						break;
				}

				switch ($angkatan)
				{
					case 2012:
						$skor_angkatan[0]++;
						break;

					case 2013:
						$skor_angkatan[1]++;
						break;

					case 2014:
						$skor_angkatan[2]++;
						break;

					case 2015:
						$skor_angkatan[3]++;
						break;

					case 2016:
						$skor_angkatan[4]++;
						break;

				}

				switch ($vote_value)
				{
					case 'STS':
						$STS++;
						break;
				
					case 'TS';
						$TS++;
						break;

					case 'N';
						$N++;
						break;

					case 'S';
						$S++;
						break;

					case 'ST';
						$ST++;
						break;
				}

			}
		}
	}
	
}

?>
