<?php function simpan($request)

{
    global $conn;

    if(isset($_POST['simpan'])){
    $id         =$_SESSION['id'];
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

            $query = "UPDATE users SET nama='$nama', password='$password',no_hp='$nohp', konfirmasi='$konfirmasi' WHERE id='$id'";
            mysqli_query($conn, $query);

            $_SESSION['update']    = 'Profile Update Profile';

            header('Location: Alfin_profile.php');
            exit();
        }else{
            $_SESSION['gagal']    = 'Gagal Update Profile';

            header('Location: Alfin_profile.php');
            exit();
            }
        }
    }
}

?>