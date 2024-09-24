<?php
class Category extends CI_Controller
{
    // public function create()
    // {
    //     $this->form_validation->set_rules('name', 'Name', 'required');
    //     $this->form_validation->set_rules('password', 'Password', 'required');
    // }

    public function index()
    {
        $data['categories'] = $this->category_model->get_categories();
        $this->load->view('templates/header');
        // $this->load->view('templates/menu');
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $naziv = array('name'=>"Compressed air treatment", 'naziv'=>"Kompresovani vazduh", 'nome'=>"Trattamento dell'aria compressa");
        // $data = $this->category_model->create($naziv);
        // echo $data;
    }
}
