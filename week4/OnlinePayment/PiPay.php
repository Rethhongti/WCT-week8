<?php
    require_once("./AbstractClass/AbPayMethod.php");

    class PiPay extends PaymentAb{

        public function getAmount(){
            return $this->qty * $this->price;
        }

        public function getPaymentType(){
            return "PiPay";
        }
    }
?>