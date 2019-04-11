<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
/**
* Required untuk akses data customer di server
*/
class Progdi extends CI_Controller{
var $API = "";
	function __construct(){
	parent::__construct();
	$this->API="http://sulungistianti.000webhostapp.com/server/index.php/api/progdis/";
}
// menampilkan daftar customer
function index(){
	$data['progdis'] = $this->__execute($this->API,'get', '');
	$this->template->load('template_master','progdi/list',$data);
}
//load form tambah dan memproses simpan data baru
function add(){
	if (isset($_POST['submit'])){
	$params = array(
		'NIP'=> $this->input->post('NIP'),
		'nama'=> $this->input->post('nama'),
		'telp'=> $this->input->post('telp'),
		'email'=> $this->input->post('email'),
		'alamat'=> $this->input->post('alamat'));
	$this->__execute($this->API, 'post',$params);
	redirect('progdi');
	}else{
		$this->template->load('template_master', 'progdi/add');
	}
}
//load form edit dan memproses simpan update data
function edit(){
	if (isset( $_POST ['submit'])) {
		$params = array(
			'NIP'=> $this->input->post('NIP'),
			'nama'=> $this->input->post('nama'),
			'telp'=> $this->input->post('telp'),
			'email'=> $this->input->post('email'),
			'alamat'=> $this->input->post('alamat'));	
		$result = $this->__execute($this->API.'format/json/','put',$params);
		redirect('progdi');
	} else {
	$id = $this->uri->segment(3);
	$data['progdi'] = $this->__execute($this->API.'id/'.$id,'get',array('id' => $id));
	$this->template->load('template_master','progdi/edit',$data);
	}
}

//hapus data customer
function delete(){
	$id = $this->uri->segment(3);
	$this->__execute($this->API,'delete', array('id' => $id));
	redirect('progdi');
}
function __execute($url,$method,$param){
	$this->curl->create($url);
	$this->curl->$method($param);
	$result = json_decode($this->curl->execute());
	return $result;
}
}
?>	

