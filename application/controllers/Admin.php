<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->model('DataModel');

        $data = [
            'get' => $this->DataModel->getData()
        ];
        $this->load->view('header');
        $this->load->view('dashboard', $data);
        $this->load->view('footer');
    }

    public function tambah()
    {
        $this->load->model('DataModel');

        $foto = $_FILES['foto'];

        if (!empty($foto)) {

            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo "Eror";
                exit();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = [
            'nama_belajar' => $this->input->post('nama_belajar'),
            'alamat_belajar' => $this->input->post('alamat_belajar'),
            'foto' => $foto
        ];

        $this->DataModel->tambahData($data);

        redirect('Admin/index');
    }

    public function hapus($id)
    {
        $id = array('id' => $id);
        $this->load->model('DataModel');

        $this->DataModel->hapusData($id);

        redirect('Admin/index');
    }

    public function detail($id)
    {
        $id = array('id' => $id);

        $this->load->model('DataModel');

        $data = [
            'detail' => $this->DataModel->detailData($id)
        ];

        $this->load->view('header');
        $this->load->view('detail', $data);
        $this->load->view('footer');
    }

    public function update($id)
    {
        $id = array('id' => $id);

        $this->load->model('DataModel');

        $data = [
            'detail' => $this->DataModel->detailData($id)
        ];

        $this->load->view('header');
        $this->load->view('update', $data);
        $this->load->view('footer');
    }
    public function edit($id)
    {
        $id = array('id' => $id);

        $this->load->model('DataModel');

        $foto = $_FILES['foto'];

        if (!empty($foto)) {

            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo "Eror";
                exit();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = [
            'nama_belajar' => $this->input->post('nama_belajar'),
            'alamat_belajar' => $this->input->post('alamat_belajar'),
            'foto' => $foto
        ];

        $this->DataModel->updateData($id, $data);

        redirect('Admin/index');
    }
}
