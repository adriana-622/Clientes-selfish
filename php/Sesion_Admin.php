<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $url = 'https://selfish.com.mx/?rest_route=/intranet/auth';
        $data = array('email' => $email, 'password' => $password);
        $options = array(
        'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents( $url, false, $context );
    $response = json_decode( $result );

    print_r($response);
}
