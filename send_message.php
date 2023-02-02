<?php 
	$url = $_SERVER['REQUEST_URI'];
	$url_components = parse_url($url);
	parse_str($url_components['query'], $params);

    $URL = "https://turkeylocalelections-step5-default-rtdb.europe-west1.firebasedatabase.app/messages.json";

	
	function send_msg($msg, $name) { 
        global $URL;
        $ch = curl_init();
        $msg_json = new stdClass();
        $msg_json->msg = $msg;
        $msg_json->name = $name;
        $msg_json->time = date('H:i');
        $encoded_json_obj = json_encode($msg_json); 
        curl_setopt_array($ch, array(CURLOPT_URL => $URL,
                                    CURLOPT_POST => TRUE,
                                    CURLOPT_RETURNTRANSFER => TRUE,
                                    CURLOPT_HTTPHEADER => array('Content-Type: application/json' ),
                                    CURLOPT_POSTFIELDS => $encoded_json_obj ));
        $response = curl_exec($ch); 
        return $response;
    }


    if (isset($_POST['usermsg'])) {
        $user_msg = $_POST['usermsg'];
        send_msg($user_msg, $params['sender']);
    }
	//Redirects to relative chat page, whether it is client or admin
	header('location: http://localhost/Emir_Ay-codes_step4/' . $params['sender'] .'_chat.php');
?>