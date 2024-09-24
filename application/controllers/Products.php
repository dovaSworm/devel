<?php
class Products extends CI_Controller
{

    public function get_recomended()
    {
        $naslov['title'] = 'Devel';
        $data = $this->product_model->get_recomended();
        $this->load->view('templates/header', $naslov);
        // $this->load->view('templates/hero');
        $this->load->view('templates/menu');
        $this->load->view('products/index', $data);
        // $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }
    public function index($offset = 0)
    {
//pagination config
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'products/index';
        $config['total_rows'] = $this->db->count_all('products');
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $config['first_link'] = "First";
        $config['last_link'] = false;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li><i class="fa fa-long-arrow-right"></i>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li><i class="fa fa-long-arrow-left"></i>';
        $config['prev_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'pagination-links');
// init pagination

        $naslov['title'] = 'Devel products';
        if (isset($_GET['category'])) {
            $config['base_url'] = base_url() . 'products/category';
            $data['products'] = $this->product_model->get_product_by_category($_GET['category']);
            if (empty($data['products'])) {
                show_error('Ne postoje traženi artikli / There is no wanted products', 404, $heading = 'Greška/Error');
            }
        } elseif (isset($_GET['subcategory'])) {
            $config['base_url'] = base_url() . 'products/subcategory';
            $data['products'] = $this->product_model->get_product_by_subcategory($_GET['subcategory']);
            if (empty($data['products'])) {
                show_error('Ne postoje traženi artikli / There is no wanted products', 404, $heading = 'Greška/Error');
            }
        } else {
            $data['products'] = $this->product_model->get_products($config['per_page'], $offset);
            if (empty($data['products'])) {
                show_error('Ne postoje traženi artikli', 404, $heading = 'Greška');
            }
        }
        if (count($data['products']) >= 5) {
            $this->pagination->initialize($config);
        }
        $this->load->view('templates/header', $naslov);
        // $this->load->view('templates/hero');
        $this->load->view('templates/menu');
        $this->load->view('products/index', $data);
        // $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function get_by_subcategory($offset = 0)
    {
//pagination config
        $this->load->library('pagination');
        // $offset = $this->uri->segment(4);
        $sub = $this->uri->segment(3);
        $offset = $this->uri->segment(4);
        echo json_encode($offset);
        $config['base_url'] = base_url() . 'products/subcategory/' . $sub;
        $config['total_rows'] = count($this->product_model->get_sub($sub));
        $config['per_page'] = 5;
        $config['uri_segment'] = 4;
        $config['num_links'] = 2;
        $config['first_link'] = "First";
        $config['last_link'] = false;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li><i class="fa fa-long-arrow-right"></i>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li><i class="fa fa-long-arrow-left"></i>';
        $config['prev_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'pagination-links');
// init pagination

        $naslov['title'] = 'Devel products';
        //    if (isset($_GET['subcategory'])) {
        $data['products'] = $this->product_model->get_product_by_subcategory($config['per_page'], $offset, $sub);
        if (empty($data['products'])) {
            show_error('Ne postoje traženi artikli / There is no wanted products', 404, $heading = 'Greška/Error');
        }
        // }
        // if (count($data['products']) >= 5) {
        $this->pagination->initialize($config);
        // }
        $this->load->view('templates/header', $naslov);
        // $this->load->view('templates/hero');
        $this->load->view('templates/menu');
        $this->load->view('products/index', $data);
        // $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function get_by_category($offset = 0)
    {
//pagination config
        $this->load->library('pagination');
        $offset = $this->uri->segment(4);
        $sub = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'products/category/' . $sub;
        $config['total_rows'] = count($this->product_model->get_product_by_category($limit = 0, $offset, $sub));
        $config['per_page'] = 5;
        $config['uri_segment'] = 4;
        $config['num_links'] = 2;
        $config['first_link'] = "First";
        $config['last_link'] = false;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li><i class="fa fa-long-arrow-right"></i>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li><i class="fa fa-long-arrow-left"></i>';
        $config['prev_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'pagination-links');
// init pagination

        $naslov['title'] = 'Devel products';
        //    if (isset($_GET['subcategory'])) {
        $data['products'] = $this->product_model->get_product_by_category($config['per_page'], $offset, $sub);
        if (empty($data['products'])) {
            show_error('Ne postoje traženi artikli / There is no wanted products', 404, $heading = 'Greška/Error');
        }
        // }
        // if (count($data['products']) >= 5) {
        $this->pagination->initialize($config);
        // }
        $this->load->view('templates/header', $naslov);
        // $this->load->view('templates/hero');
        $this->load->view('templates/menu');
        $this->load->view('products/index', $data);
        // $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function view($id = null)
    {
        $data['product'] = $this->product_model->get_one($id);
        $naslov['title'] = $data['product']['name'];

        if (empty($data['product'])) {
            show_404();
        }
        // $data['title'] = $data['product']['name'];
        $this->load->view('templates/header', $naslov);
        $this->load->view('templates/menu');
        $this->load->view('products/view', $data);
        $this->load->view('templates/footer');
    }
    public function downloadFile($filename)
    {
        $this->load->helper('download');
        $data = file_get_contents("http://localhost/telcontrol/assets/pdf/".$filename); // Read the file's contents
        force_download($filename, $data); 
    }
}