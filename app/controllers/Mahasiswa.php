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
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        }
    }
}