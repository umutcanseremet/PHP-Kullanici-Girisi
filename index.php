<?php
session_start();
$db=new PDO("mysql:host=localhost;dbname=deneme","root","");
?>
<!doctype html>
<html lang="en">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<div id="yazi" style="margin-bottom: 10px;margin-left: 14px">
    <h8 data-toggle="modal" data-target="#login">Giriş Yap</h8>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <label>Giriş Yap</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="giris_form" method="POST" role="giris_form">
                    <label>Ad</label>
                    <input class="form-control" type="text" name="ad" placeholder="Ad">
                    <label>Soyad</label>
                    <input class="form-control" type="text" name="soyad" placeholder="Soyad">
                    <br>
                    <input type="hidden" name="g">
                    <button type="submit" class="btn btn-success" style="width: 200px; margin-left: 130px;background: #1c2331" id="save" name="login">Giriş Yap</button>  </form>
            </div>
        </div>
    </div>
</div>
</form>
<script>
$(document).ready(function(){
$('#giris_form').submit(function(){
    var columnState=$(this).attr('id');
    var formID=$('#'+columnState);
    $.ajax({
        url:"islemler.php",
        type:"post",
        dataType:'json',
        data:formID.serialize(),
        success:function (data){
                        if (data.status=='success'){
                            swal({
                                title: "Sonuç",
                                text: data.message,
                                icon: data.status,
                                button: "Tamam",
                            });
                            window.location="yenisayfa.php";
                        }else{
                            swal({
                                title: "Sonuç",
                                text: data.message,
                                icon: data.status,
                                button: "Tamam",
                            });
                        }
                    }
                });
                return false;
            });
        });
</script>
</body>
</html>