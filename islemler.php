<?php
$db=new PDO("mysql:host=localhost;dbname=deneme","root","");
$data=array();
if (isset($_POST['g'])){
    if (empty($_POST['ad'])){
        $data['status']='error';
        $data['message']='Ad Boş Olamaz';
        die(json_encode($data));
    }elseif (empty($_POST['soyad'])){
        $data['status']='error';
        $data['message']='Soyad Boş Olamaz';
        die(json_encode($data));
    }else{
        $giris=$db->prepare("SELECT * FROM deneme WHERE 
    uye_ad=:ad and 
    uye_soyad=:soyad
    ");
        $giris->execute(array(
            'ad'=>$_POST['ad'],
            'soyad'=>$_POST['soyad']));
        $say=$giris->rowCount();
        if ($say>0){
            $data['status']='success';
            $data['message']='Giriş Başarılı';
            die(json_encode($data));
        }
        else{
            $data['status']='error';
            $data['message']='Kullanıcı Adı Veya Şifre Hatalı';
            die(json_encode($data));
        }
    }
    echo json_encode($data);
}
?>