<?php
class Ecg extends CI_Controller {

        public function index($page_index = 0, $display_limit=20)
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
            $data['recID'] = $recID;
            $this->load->view('ecg/detail_page', $data);
        }

        public function search()
        {


            // Search in the file_arr
            $target_str = $_POST['search_text'];

            $filtered_file_arr = array();
            $file_arr = glob('data/*.xml');
            foreach($file_arr as &$value) {
                $value = basename($value);
                if (False != stristr($value, $target_str)) {
                    array_push($filtered_file_arr, $value);
                }
            }
            

            $data['file_arr'] = $filtered_file_arr;

            $this->load->view('ecg/search_result', $data);

        }
}
?>
