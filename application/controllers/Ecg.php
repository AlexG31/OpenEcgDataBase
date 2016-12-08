<?php
class Ecg extends CI_Controller {

        public function index($page = 'index')
        {

            $data['title'] = ucfirst($page); // Capitalize the first letter

            $file_arr = glob('data/*.xml');
            foreach($file_arr as &$value) {
                $value = basename($value);
            }
            
            $data['file_arr'] = $file_arr;

            $this->load->view('ecg/main_header', $data);
            $this->load->view('ecg/main_footer', $data);

        }
        public function view($page = 'index')
        {
            echo 'Detail page.';
        }
}
?>