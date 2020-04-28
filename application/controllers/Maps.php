<?php
class Maps extends CI_Controller
{
    public function map()
    {
        $data["title"] = "Map";
        $this->view("map", $data);
    }

    public function view($page, $data)
    {
        $this->load->view('templates/header');
        $this->load->view('map_views/'.$page, $data);
        $this->load->view('templates/btm_main_nav');
        $this->load->view('templates/footer');
    }
}