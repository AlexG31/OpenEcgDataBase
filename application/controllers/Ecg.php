<?php
class Ecg extends CI_Controller {

        public function index() {
            $this->welcome();
        }
        public function database($page_index = 0, $display_limit=20)
        {


            $file_arr = glob('data/*.xml');
            foreach($file_arr as &$value) {
                $value = basename($value);
            }
            
            $max_page_index = floor(count($file_arr) / $display_limit);
            if ($page_index > $max_page_index) {
                $page_index = $max_page_index;
            }
            $data['page_index'] = $page_index;
            $data['max_page_index'] = $max_page_index;
            $data['file_arr'] = array_slice($file_arr,$page_index,$display_limit);

            $this->load->view('ecg/main_header', $data);

        }

        public function detail($recID = 'rec0')
        {
            echo 'Detail';
            return;
            $data['recID'] = $recID;
            $this->load->view('ecg/detail_page', $data);
        }

        public function download() {
            // Download $file_name
            //$file_name="/img/ecg/test.png";
            if (file_exists($file_name)) {
                    header('Content-Description: File Transfer');
                        header('Content-Type: application/octet-stream');
                        header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
                        header('Expires: 0');
                        header('Cache-Control: must-revalidate');
                        header('Pragma: public');
                        header('Content-Length: ' . filesize($file_name));
                        readfile($file_name);
                        exit;
            } else {
                echo 'No Such File!';
            }
        }
        public function welcome() {
            $this->load->view('ecg/welcome');
        }
        public function search()
        {


            // Search in the file_arr
            $filtered_file_arr = array();
            if (array_key_exists('search_text', $_POST)) {
                $target_str = $_POST['search_text'];

                if (empty($target_str) == False && $target_str != '') {
                    $file_arr = glob('data/*.xml');
                    foreach($file_arr as &$value) {
                        $value = basename($value);
                        if (False != stristr($value, $target_str)) {
                            array_push($filtered_file_arr, $value);
                        }
                    }
                }

            }
            else {
                $target_str = '';
            }

            $data['file_arr'] = $filtered_file_arr;

            $this->load->view('ecg/search_result', $data);

        }
}
?>
