<?php

class Mahasiswa extends Controller {
    public function index()
    {
        $data["title"] = "Daftar Mahasiswa";
        $data["mhs"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
        $this->view("templates/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("templates/footer");
    }

    public function detail($id)
    {
        $data["title"] = "Detail Mahasiswa";
        $data["mhs"] = $this->model("Mahasiswa_model")->getMahasiswaById($id);
        $this->view("templates/header", $data);
        $this->view("mahasiswa/detail", $data);
        $this->view("templates/footer");
    }

    public function add()
    {
        if($this->model("Mahasiswa_model")->addDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        }   else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        }
    }

    public function remove($id)
    {
        if($this->model("Mahasiswa_model")->removeDataMahasiswa($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        }   else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        }
    }

    public function getEdit()
    {
        echo json_encode($this->model("Mahasiswa_model")->getMahasiswaById($_POST['id']));
    }
    
    public function edit()
    {
        if($this->model("Mahasiswa_model")->editDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diedit', 'success');
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        }   else {
            Flasher::setFlash('Gagal', 'diedit', 'danger');
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        }
    }

}