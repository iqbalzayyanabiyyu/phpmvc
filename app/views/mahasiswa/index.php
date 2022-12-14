<div class="container mt-4">
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash() ?>
      </div>
    </div>

    <!-- Button Add: Start -->
    <div class="row mb-4">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary btnAddData" data-bs-toggle="modal" data-bs-target="#formModal">
          Add Data Mahasiswa
        </button>
      </div>
    </div>
    <!-- Button Add: End -->

    <!-- Button Search: Start -->
    <div class="row mb-4">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/search" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Mahasiswa . . ." name="keyword" id="keyword" autocomplete="off">
            <button class="btn btn-primary" type="submit" id="btnSearch">
              Search
            </button>
          </div>
        </form>
      </div>
    </div>
    <!-- Button Search: End -->
    
    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data["mhs"] as $mhs) : ?>
                <li class="list-group-item">
                    <?= $mhs["name"]; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/remove/<?= $mhs["id"]; ?>" class="badge text-bg-danger float-end ms-1" onclick="return confirm('Yakin?')">
                      remove
                    </a>
                    <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs["id"]; ?>" class="badge text-bg-success float-end ms-1 editModalData" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs["id"]; ?>">
                      edit
                    </a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="badge text-bg-primary float-end ms-1">
                      detail
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>



<!-- Modal: Start -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Add Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/mahasiswa/add" method="POST">
          <input type="hidden" name="id" id="id">
          <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name">
          </div>
          
          <div class="mb-3">
              <label for="nim" class="form-label">Nim</label>
              <input type="number" class="form-control" id="nim" name="nim">
          </div>

          <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
              <label for="jurusan" class="form-label">Jurusan</label>
              <select class="form-control" name="jurusan" id="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Design Visual Komunikasi">Design Visual Komunikasi</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Sistem Informasi Akutansi">Sistem Informasi Akutansi</option>
              </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal: End -->