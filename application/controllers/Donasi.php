<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('mainmodels');
	}

	public function index()
	{
		if($this->session->userdata("login") == TRUE) {
            $dataDonasi = $this->mainmodels->jumlahDonasi($this->session->userdata("nik"));
            if(!empty($dataDonasi->jumlah)){
                $jmlDonasi = $dataDonasi->jumlah;
                $jmlDonasi = number_format($jmlDonasi);
                $data['jumlah_donasi'] = $jmlDonasi;
            }
            $data['state'] = $this->mainmodels->checkState($this->session->userdata("nik"));
			$this->load->view('donasi', $data);
		}else{
			redirect('Donasi/login');
		}
	}

	public function form_submit($jumlah)
	{
		$nik = $this->session->userdata('nik');

		$tes = $this->mainmodels->insertDonasi($nik, $jumlah);
		if($tes = TRUE){
			echo '{';
			echo '"response": "ok"';
			echo '}';
		}if($tes = FALSE){
		}
	}

	public function login(){
		$this->load->view('login_2');
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('Donasi/login');
    }

	public function login_sso()
	{
		$nik = $this->input->post("nik");
		$password = $this->input->post("password");

		//STEP1
		$post_data = http_build_query(
			array(
				'id_aplikasi' => '209'
			)
		);

		$opts = array('http' =>
			array(
				'method' => 'POST',
				'header' => 'Content-type: application/x-www-form-urlencoded',
				'content' => $post_data
			)
		);

		$context = stream_context_create($opts);
		$result = file_get_contents('http://api.telkomakses.co.id/API/ip_receiver.php', false, $context);
		$result = json_decode($result, true);

		if ($result['message'] == "Receiver OK") {
			/*echo "Halo";*/
			$post_data2 = http_build_query(
				array(
					'id_aplikasi' => '209',
					'id_api' => '303',
					'nik' => $nik,
					'password' => $password
				)
			);

			$opts2 = array('http' =>
				array(
					'method' => 'POST',
					'header' => 'Content-type: application/x-www-form-urlencoded',
					'content' => $post_data2
				)
			);

			$context2 = stream_context_create($opts2);
			$result2 = file_get_contents('http://api.telkomakses.co.id/API/provisioning_api.php', false, $context2);
			$result2 = json_decode($result2, true);

			/*echo "<pre>";
			print_r($result2);
			echo "</pre>";*/

			$key = $result2['key'];
			if ($result2['message'] == "auth ok") {
				$post_data3 = http_build_query(
					array(
						'username' => $nik,
						'password' => $password,
						'key' => $key,
						'id_api' => '303'
					)
				);

				$opts3 = array('http' =>
					array(
						'method' => 'POST',
						'header' => 'Content-type: application/x-www-form-urlencoded',
						'content' => $post_data3
					)
				);

				$context3 = stream_context_create($opts3);
				$result3 = file_get_contents('http://api.telkomakses.co.id/API/sso/auth_sso_post3.php', false, $context3);
				$result3 = json_decode($result3, true);

				if ($result3['auth'] == "Yes") {

						$data_session = array(
							'nik' => $nik,
							'nama' => $result3['nama'],
                            'foto' => $result3['foto'],
							'login' => TRUE
						);

						$this->session->set_userdata($data_session);

						redirect(base_url("Donasi"));

				} else {
					redirect(base_url('Donasi/login/notsuccess'));
				}
			} else {
				redirect(base_url('Donasi/login/notsuccess'));
			}
		} else {
			redirect(base_url('Donasi/login/notsuccess'));
		}
	}
}
