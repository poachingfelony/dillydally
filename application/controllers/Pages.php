<?php
    class Pages extends CI_Controller{
        public function view($page = 'home'){

            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

            //the variables we want to pass into the view
            $data['title'] = ucfirst($page);

            //load the header page and footer
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }
    }
    ?>