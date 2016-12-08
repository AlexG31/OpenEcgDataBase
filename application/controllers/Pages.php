<?php
class Pages extends CI_Controller {

        public function view($page = 'index')
        {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }

            $data['title'] = ucfirst($page); // Capitalize the first letter

            echo '<h1> Dir:</h1>';
            $file_arr = glob('application/views/pages/*.php');
            echo 'size=';
            echo count($file_arr);

            foreach($file_arr as $value) {
                echo "<li>$value</li>";
            }
            
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);

        }
}
?>
