<?php function registrasi($request)

{
    global $conn;

    $nama       =$request['nama'];
    $email      =$request['email'];
    $password   = mysqli_real_escape_string($conn, $request['password']);
    $konfirmasi = mysqli_real_escape_string($conn, $request['konfirmasi']);
    $nohp       = $request['no_hp'];

    $emailcek = "SELECT email FROM users WHERE email='$email'";
    $select = mysqli_query($conn, $emailcek);

    if (!mysqli_fetch_assoc($select)) {
        if ($password == $konfirmasi){
            $password = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users VALUES ('', '$nama','$email', '$password', '$nohp')";
            mysqli_query($conn, $query);

            $_SESSION['berhasil']    = 'Berhasil Registrasi';

            header('Location: Alfin_Login.php');
            exit();
        }
    }
    $_SESSION['gagal']    = 'Gagal Registrasi';

    header('Location: Alfin_Registrasi.php');
    exit();
}
?>