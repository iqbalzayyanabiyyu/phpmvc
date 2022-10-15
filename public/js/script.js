$(function() {

    $(".btnAddData").on("click", function() {
        $("#formModalLabel").html("Add Data Mahasiswa");
        $(".modal-footer button[type=submit]").html("Add");
    });



    $(".editModalData").on("click", function() {
        
        $("#formModalLabel").html("Edit Data Mahasiswa");
        $(".modal-footer button[type=submit]").html("Edit");
        $(".modal-body form").attr("action", "http://localhost/phpmvc/public/mahasiswa/edit");

        const id = $(this).data("id");

        $.ajax({
            url: "http://localhost/phpmvc/public/mahasiswa/getEdit",
            data: {id : id},
            method: "post",
            dataType: "json",
            success: function(data) {
                $("#id").val(data.id);
                $("#name").val(data.name);
                $("#nim").val(data.nim);
                $("#email").val(data.email);
                $("#jurusan").val(data.jurusan);
            }
        });


    });


});