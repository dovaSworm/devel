<?php
class Subcategory extends CI_Controller
{

public function create()
    {
        $naziv = array('name'=>"Absorbtion dryer controller", 'naziv'=>"Regulatori upijajuće sušilice", 'nome'=>"Regolatore dell'essiccatore ad assorbimento");
        $data = $this->subcategory_model->create($naziv);
        echo $data;
    }

    public function index()
    {
        $data['subcategories'] = $this->subcategory_model->get_subcategories();
        $data['categories'] = $this->category_model->get_categories();
        $this->load->view('templates/header');
        // $this->load->view('templates/menu');
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer');
    }
}