<?php

require 'config.php';

session_start();

require 'razorpay-php/Razorpay.php';
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false) {
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature'],
        );

        $api->utility->verifyPaymentSignature($attributes);
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true) {

    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    $price = $_SESSION['price'];

    $customer = $_SESSION['name'];
    $contact = $_SESSION['contact'];
    $address = $_SESSION['address'];
    $city = $_SESSION['city'];
    $state = $_SESSION['state'];
    $pin = $_SESSION['zip'];
    $pan = $_SESSION['pan'];
    $date = date('Y-m-d H:i:s');

//echo $razorpay_order_id.'</br>'.$razorpay_payment_id.'</br>'.$price.'</br> success </br>'.$email.'</br>'.$customer.'</br>'.$contact.'</br>'. $address.'</br>'.$city.'</br>'.$state.'</br>'.$zip.'</br>'.$pan ;die;

//echo "INSERT INTO `donate`(`id`, `name`, `email`, `mobile`, `address`, `pin`, `city`, `state`, `date`, `Amount`, `status`, `razorpay_payment_id`, `order_id`, `pay_status`) VALUES ('','$customer','$email','$contact','$address','$pin','$city','$state','$date','$price','1', '$razorpay_payment_id', '$razorpay_order_id','success')";die;
    

    $sql = "INSERT INTO `donate`(`id`, `name`, `email`, `mobile`, `address`, `pin`, `city`, `state`, `date`, `Amount`, `status`, `razorpay_payment_id`, `order_id`, `pay_status`, `PAN`) VALUES ('','$customer','$email','$contact','$address','$pin','$city','$state','$date','$price','1', '$razorpay_payment_id', '$razorpay_order_id','success','$pan')";

    if (mysqli_query($con, $sql)) {
        echo "Payment Details  inserted to DB";
    }

    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
             $_SESSION['payment_id']='Payment ID:'. $_POST['razorpay_payment_id'];
             header('Location:../../../index.php#DONATE');
            // unset($_SESSION['payment_id']);


} else {
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;