//Untuk login
$(document).ready(function(){
    $("form").on('submit',function(e){
    $(".input2").each(function() {
        
        e.preventDefault();
        var input = $(this);
        var dataString = $("#login").serialize();
        var url="UserPages/auth"

            if(input.val() == ""){         
                swal({
                    type: 'error',
                    title: 'Ups... Username atau password salah!',
                    text: "Akan dialihkan otomatis.",
                    timer: 2500,
                    showConfirmButton: false,
                },
                function () {
                       location.reload(true);
                       tr.hide();
                });     
            return false;
            }

            swal({ 
                type: 'post',
                url:"<?php echo base_url() ?>"+url,
                data:dataString,
                    success:function (data) {
                        swal(data);
                },
                type: 'success',
                title: "Selamat... Login berhasil!",
                text: "Akan dialihkan otomatis.",
                confirmButtonClass: 'btn btn-success',
                timer: 2500,
                showConfirmButton: false
            }).then(function() {
                
                window.location = "http://localhost/himasistifo/index.php/UserPages/auth";
            });
        })
    });
});