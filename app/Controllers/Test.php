<?php

namespace App\Controllers;

use App\Models\KaryawanM;

class Test extends BaseController
{
    private $work;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        $this->post = new KaryawanM;
    }

    public function home()
    {
        return view('pages/home');
    }

    public function about1()
    {
        return view('pages/tentang_kami');
    }

    public function dashboard()
    {
        $works = $this->post->orderBy('id', 'desc')->findAll();
        return view('pages/dashboard', compact('works'));
    }

    public function new()
    {
        return view('pages/create');
    }

    public function create()
    {
        $inputs = $this->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'masajabatan' => 'required',
            'status' => 'required'
        ]);

        if (!$inputs) {
            return view('pages/create', [
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
        return redirect()->to(site_url('/dashboard'));
    }

    public function edit($id = null)
    {
        $work = $this->post->find($id);
        if ($work) {
            return view('pages/edit');
        } else {
            session()->setFlashdata('failed', 'Alert! no data found.');
            return redirect()->to('pages/dashboard');
        } //
    }

    public function update($id = null)
    {
        $inputs = $this->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'masajabatan' => 'required',
            'status' => 'required'
        ]);

        if (!$inputs) {
            return view('pages/create', [
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

    public function delete($id = null)
    {
        $this->post->delete($id);
        session()->setFlashdata('success', 'Success! data deleted.');
        return redirect()->to(base_url('/dashboard')); //
    }

    // public function create()
    // {
    //     $worker = new KaryawanM();
    //     $data['worker_data'] = $worker->orderBy('id', 'DESC')->paginate(10);
    //     $data['pagination_link'] = $worker->pager;
    //     return view('pages/dashboard', $data);
    // }
}
