<?php
    abstract class PaymentAb {
        public function __construct(
            public String $item,
            public float $price,
            public int $qty,
        ){}
        abstract public function getAmount();
        abstract public function getPaymentType();
    } 
?>