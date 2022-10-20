<?php
class Datasiswa extends CI_Controller
{

    public function index()
    {
        $this->load->view('view-form-datasiswa');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]', [
            'required' => 'Nama Siswa Harus diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
            'required' => 'NIS Harus diisi',
            'min_lenght' => 'NIS terlalu pendek'
        ]);

        $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', [
            'required' => 'Kelas Harus diisi',
        ]);

        $this->form_validation->set_rules('tanggallahir', 'Tanggal Lahir', 'required|min_length[3]', [
            'required' => 'Tanggal Lahir Harus diisi',
            'min_lenght' => 'Tanggal Lahir terlalu pendek'
        ]);

        $this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required|min_length[3]', [
            'required' => 'Tempat Lahir Harus diisi',
            'min_lenght' => 'Tempat Lahir terlalu pendek'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]', [
            'required' => 'Alamat Harus diisi',
            'min_lenght' => 'Alamat terlalu pendek'
        ]);

        $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required|min_length[3]', [
            'required' => 'Jenis Kelamin Harus diisi',
        ]);

        $this->form_validation->set_rules('agama', 'Agama', 'required|min_length[3]', [
            'required' => 'Agama Harus diisi',
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-datasiswa');
        } else {

            $data = [

                'nama' => $this->input->post('Nama Siswa'),
                'nis' => $this->input->post('NIS'),
                'kelas' => $this->input->post('Kelas'),
                'tanggallahir' => $this->input->post('Tanggal Lahir'),
                'tempatlahir' => $this->input->post('Tempat Lahir'),
                'alamat' => $this->input->post('Alamat'),
                'jeniskelamin' => $this->input->post('Jenis Kelamin'),
                'agama' => $this->input->post('Agama')
            ];

            $this->load->view('view-data-datasiswa', $data);
        }
    }
}