<?php
function login($request)
{

    global $conn;

    $email      = $request['email'];
    $password   = $request['password'];

    $emailcek = "SELECT * FROM users WHERE email='$email'";
    $select = mysqli_query($conn, $emailcek);

    if(mysqli_num_rows($select) == 2) {
        $result = mysqli_fetch_assoc($select);

        if (password_verify($password, $result['password'])) {
            $_SESSION['id']     = $result['id'];
            $_SESSION['nama']   = $result['nama'];
            $_SESSION['email']  = $result['email'];
            $_SESSION['nohp']   = $result['no_hp'];
        
            if(isset($_POST['remember'])){
                setcookie('email_cookie',$email,time()+10 *365 * 24 *60 *60);
                setcookie('password_cookie',$password,time()+10 *365 * 24 *60 *60);
            }
            
            $_SESSION['alert'] = 'Berhasil Login';

            header('Location: Alfin_Index.php');
            exit();
        } else {
            $_SESSION['alert']  = 'Gagal Login';

            header('Location: Alfin_Login.php');
            exit();
        }
    }

    $_SESSION['alert']    = 'Email anda sudah pernah terdaftar';
    header('Location: Alfin_Login.php');
}
