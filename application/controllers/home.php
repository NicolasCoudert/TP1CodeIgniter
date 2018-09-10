<?php

class home extends CI_Controller
{
    public function index()
    {
        $datas['score1']=12;
        $datas['score2']=9;
        $datas['ville']="Dijon";
        $this->load->view("bellepage",$datas);
    }
}
?>