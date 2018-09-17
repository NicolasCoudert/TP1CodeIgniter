<?php

class Model_categorie extends CI_Model
{
    public function getAllCategories()
    {
        //on écrit notre requête SQL
        $query = $this->db->query("Select idCateg, nomCateg FROM categorie");
        return $query->result();

    }
}

?>