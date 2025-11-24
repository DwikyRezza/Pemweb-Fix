<?php
if (isset($_GET['msg'])) {
    $msg = htmlspecialchars($_GET['msg']); // amankan input
    echo "Server menerima: <strong>$msg</strong> (" . date("H:i:s") . ")";
} else {
    echo "Tidak ada data yang dikirim!";
}
?>
