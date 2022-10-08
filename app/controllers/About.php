<?php 

class About extends Controller {
    public function index($name = "Iqbal Zayyan", $job = "Fullstack Developer", $age = 21)
    {   
        $data["name"] = $name;
        $data["job"] = $job;
        $data["age"] = $age;
        $data["title"] = "About Me";
        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer");
    }

    public function page()
    {   
        $data["judul"] = "My Pages";
        $this->view("templates/header", $data);
        $this->view("about/page");
        $this->view("templates/footer");
    }
}




