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

    public function create()
    {
        return view('acara/add');
    }

    public function store()
    {
        // Cara 1
        // $data = $this->request->getPost();

        // Cara 2
        $data = [
            'name_acara' => $this->request->getVar('name_acara'),
            'date_acara' => $this->request->getVar('date_acara'),
            'info_acara' => $this->request->getVar('info_acara'),
        ];
        $this->db->table('acara')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Disimpan');
        }

        return view('acara/add');
    }
}
