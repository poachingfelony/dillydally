<?php
class Users extends CI_Controller 
{
    public function login()
    {
        $data['title'] = 'Login';

        //validation rules
        $this->form_validation->set_rules('user_id', 'User ID', 'required');
        $this->form_validation->set_rules('password', 'Passowrd', 'required');

        if($this->form_validation->run() === FALSE) 
        {
            //load the login page 
            $this->view("login", $data);
        }
        else
        {
            if($this->User_model->verify_credentials($this->input->post('password'), $this->input->post('user_id')))
            {
                redirect(base_url()."Maps/map");
            }
            else
            {
                //load the login page when credentials are wrong
                $this->view("login", $data);
            }
        }
    }

    public function register()
    {
        $data['title'] = 'Register';
        $data['message'] = array();

        //validation
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('create_password', 'Create Password', 'required|min_length[6]|max_length[60]');
        $this->form_validation->set_rules('repeate_password', 'Repeate Password', 'required|min_length[6]|max_length[60]');

        if($this->form_validation->run() === FALSE) 
        {
            $this->view('register', $data);
        }
        else
        {
            if($this->input->post('create_password') !== $this->input->post('repeate_password')) 
            {
                //make message
                $this->session->set_flashdata('message', $data['message'][]='The passwords do not match.');

                //load page
                $this->view('register', $data);
            } 
            else 
            {
                if(null === ($this->session->flashdata('user_id'))) 
                {
                    //call the model to make the insert
                    $data['register_id'] = $this->User_model->create_account();

                    //setting the flash data here and in register_success will keep the query from being run on refresh of page
                    $this->session->set_flashdata('user_id', $data['register_id']);
                } 
                else 
                {
                    //displaying same user id information
                    $data['register_id'] = $this->session->flashdata('user_id');
                }
                 

                //load success page
                $this->view("register_success", $data);
            }
        }
    }

    public function view($page, $data=array())
    {
        $this->load->view('templates/header');
        $this->load->view('user_views/'.$page, $data);
        $this->load->view('templates/btm_main_nav');
        $this->load->view('templates/footer');
    }

    public function authorize()
    {
        //do the login authorization here 
        if ($this->form_validation->run() === false)
        {
            echo "logging in again.";
            $this->login();
            exit();
        }
        else
        {
            $data['user_id'] = '90';
            $this->load->view('templates/header');
            $this->load->view('Pages/home', $data);
            $this->load->view('templates/footer');
        }
    }
}