<?php
class Pages extends CI_Controller
{
    public function view($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
            // echo "this works";
        }
        // echo "this works";
        $data['products'] = $this->product_model->get_recomended();
// echo json_encode($data);
        $naslov['title'] = 'Devel';
        $this->load->view('templates/header', $naslov);
        $this->load->view('templates/hero');
        $this->load->view('templates/menu');
        $this->load->view('templates/recomended', $data);
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }
}