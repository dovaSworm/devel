<?php 
    class Users extends CI_Controller{

        public function register(){
            $data['title'] = 'Sign up';

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
            $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header', $data);
                $this->load->view('users/register');
                $this->load->view('templates/footer');
            }else{
                //encript pass
                $enc_password = md5($this->input->post('password'));
                $this->user_model->register($enc_password);

                $this->session->set_flashdata('user_registered', 'You are registered');
                redirect('products');
            }
        }

        public function login(){
            $data['title'] = 'Log in';

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header', $data);
                $this->load->view('users/login');
                $this->load->view('templates/footer');
            }else{
                // get username
                $username = $this->input->post('username');
                $password = md5($this->input->post('password'));

                //login user
                $user_id = $this->user_model->login($username, $password);
                if($user_id){
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);
                    $this->session->set_flashdata('user_loggedin', 'You are loged in');
                redirect('home');
                }else{
                    $this->session->set_flashdata('login_failed', 'Login failed');
                    redirect('users/login');
                }
            }
        }

        public function logout(){

            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');

            $this->session->set_flashdata('user_loggedout', 'You are loged out');
            redirect('users/login');
        }

        public function check_username_exists($username){
            $this->form_validation->set_message('check_username_exists','Username taken');
            if($this->user_model->check_username_exists($username)){
                return true;
            }else{
                return false;
            }
        }

        public function check_email_exists($email){
            $this->form_validation->set_message('check_email_exists','Email taken');
            if($this->user_model->check_email_exists($email)){
                return true;
            }else{
                return false;
            }
        }
}