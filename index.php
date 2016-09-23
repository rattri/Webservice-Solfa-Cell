if ($operation == 'resPassReq') {
 
if(isset($data -> user) && !empty($data -> user) &&isset($data -> user -> email)){
 
$user = $data -> user;
$email = $user -> email;
 
echo $fun -> resetPasswordRequest($email);
 
} else {
 
echo $fun -> getMsgInvalidParam();
 
}
}else if ($operation == 'resPass') {
 
if(isset($data -> user) && !empty($data -> user) && isset($data -> user -> email) && isset($data -> user -> password)
&& isset($data -> user -> code)){
 
$user = $data -> user;
$email = $user -> email;
$code = $user -> code;
$password = $user -> password;
 
echo $fun -> resetPassword($email,$code,$password);
 
} else {
 
echo $fun -> getMsgInvalidParam();
 
}
}