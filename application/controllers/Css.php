<?php
class Css extends CI_Controller {

        public function view($page = 'skeleton')
        {

            $data['title'] = ucfirst($page);
            $this->load->view('css/'.$page, $data);

        }
}
?>
