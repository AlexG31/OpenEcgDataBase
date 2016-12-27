<?php
class Lab_upload_file extends CI_Controller {

        public function index() {
            $this->welcome();
        }

        public function welcome() {
            $this->load->view('lab_upload_file/welcome');
        }

        public function upload_handler() {
            $this->load->view('lab_upload_file/upload_handler');
        }
}
?>
