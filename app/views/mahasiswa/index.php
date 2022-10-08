<div class="container mt-5">
    
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahaiswa</h3>

            <?php foreach($data["mhs"] as $mhs) : ?>
            <ul>
                <li><?= $mhs["name"]; ?></li>
                <li><?= $mhs["nim"]; ?></li>
                <li><?= $mhs["gmail"]; ?></li>
                <li><?= $mhs["jurusan"]; ?></li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>

</div>