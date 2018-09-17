<?php

class home extends CI_Controller
{
    public function index()
    {
        $this->load->model("Model_categorie");
        $data['lesCateg'] = $this->Model_categorie->getAllCategories();

        $this->load->view("bellepage",$data);
    }
}
?>