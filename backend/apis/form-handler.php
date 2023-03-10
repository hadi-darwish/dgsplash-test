<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');

include('../forms.php');

$form = new Forms();

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : 'none';
$gender = $_POST['gender'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$createdOn = date('Y-m-d H:i:s');

if (
    empty($firstName) ||
    empty($lastName) ||
    empty($email) ||
    empty($gender) ||
    empty($country) ||
    empty($subject) ||
    empty($message)
) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Check all required fields'
    ]);
    exit;
}
$form->setFirstName($firstName);
$form->setLastName($lastName);
$form->setEmail($email);
$form->setMobile($mobile);
$form->setGender($gender);
$form->setCountry($country);
$form->setSubject($subject);
$form->setMessage($message);
$form->setCreatedOn($createdOn);

$form->saveForm();
