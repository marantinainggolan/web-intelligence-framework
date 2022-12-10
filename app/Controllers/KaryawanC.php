<?php

namespace App\Controllers;

use App\Models\KaryawanM;
use CodeIgniter\RESTful\ResourceController;

class KaryawanC extends ResourceController
{
    private $work;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        $this->post = new KaryawanM;
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $works = $this->post->orderBy('id', 'asc')->findAll();
        return view('pages/dashboard', compact('dashboard')); //
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $work = $this->post->find($id);
        if ($work) {
            return view('pages/dashboard/show', compact('dashboard'));
        } else {
            return redirect()->to('pages/dashboard');
        } //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('pages/dashboard/create'); //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $inputs = $this->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'masajabatan' => 'required',
            'status' => 'required'
        ]);

        if (!$inputs) {
            return view('pages/dashboard/create', [
                'validation' => $this->validator
            ]);
        }

        $this->post->save([
            'nama' => $this->request->getVar('nama'),
            'jabatan' => $this->request->getVar('jabatan'),
            'masajabatan' => $this->request->getVar('masajabatan'),
            'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata('success', 'Success! data created.');
        return redirect()->to(site_url('pages/dashboard')); //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $work = $this->post->find($id);
        if ($work) {
            return view('pages/dashboard/edit', compact('dashboard'));
        } else {
            session()->setFlashdata('failed', 'Alert! no data found.');
            return redirect()->to('pages/dashboard');
        } //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $inputs = $this->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'masajabatan' => 'required',
            'status' => 'required'
        ]);

        if (!$inputs) {
            return view('pages/dashboard/create', [
                'validation' => $this->validator
            ]);
        }

        $this->post->save([
            'nama' => $this->request->getVar('nama'),
            'jabatan' => $this->request->getVar('jabatan'),
            'masajabatan' => $this->request->getVar('masajabatan'),
            'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata('success', 'Success! data created.');
        return redirect()->to(site_url('pages/dashboard')); //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->post->delete($id);
        session()->setFlashdata('success', 'Success! data deleted.');
        return redirect()->to(base_url('pages/dashboard')); //
    }
}
