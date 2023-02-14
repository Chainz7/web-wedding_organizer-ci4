<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index()
    {
        // Query Builder
        $builder = $this->db->table('acara');
        $query   = $builder->get();

        // Query Manual
        // $query = $this->db->query("SELECT * FROM acara")

        $data['acara'] = $query->getResult();
        return view('acara/get', $data);
    }
}
