<?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
    $jasa = $_POST['jasa'];
    if (empty($nama)) {
        header("Location:index.php?&data=$id_pesanan&notif=tambahkosong&jenis=nama");
    }elseif (empty($alamat)){
        header("Location:index.php?&data=$id_pesanan&notif=tambahkosong&jenis=alamat");
    }elseif (empty($no_hp)){
        header("Location:index.php?&data=$id_pesanan&notif=tambahkosong&jenis=no_hp");
    }elseif (empty($email)){
        header("Location:index.php?&data=$id_pesanan&notif=tambahkosong&jenis=email");
    }elseif (empty($tanggal_pemesanan)){
        header("Location:index.php?&data=$id_pesanan&notif=tambahkosong&jenis=tanggal_pemesanan");
    }elseif (empty($jasa)){
        header("Location:index.php?&data=$id_pesanan&notif=tambahkosong&jenis=jasa");
    }
    else {
        $sql = "INSERT INTO `pesanan`(`nama`, `alamat`, `no_hp`, `email`, `id_jasa`, `tanggal_pemesanan`) 
                VALUES ('$nama','$alamat','$no_hp','$email','$jasa','$tanggal_pemesanan')";
       mysqli_query($koneksi,$sql);
       header("Location:index.php?&notif=tambahberhasil");
    }
?>