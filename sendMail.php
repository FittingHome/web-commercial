<?php
mkdir('clientsMessages', 0777, true);
$data = json_encode(array(
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'subject' => $_POST['subject'],
    'message' => $_POST['message']
));
file_put_contents('clientsMessages/' . uniqid(), $data);
header('Location: index.html');

?>