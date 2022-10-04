<div class="container d-flex justify-content-center mt-5">
    <div class="d-flex flex-column align-items-center">
        <img src="<?= BASEURL;?>/img/profile.jpg" alt="My Logo" width="200" class="rounded-circle"/>
        <div class="d-flex flex-column align-items-center">
            <h1>About Me</h1>
            <h3>
                Hi there!. I'm <?= $data["name"]; ?>. I'm a <?= $data["job"]; ?>. And I'm <?= $data["age"]; ?> years old.
            </h3>
        </div>
    </div>
</div>
