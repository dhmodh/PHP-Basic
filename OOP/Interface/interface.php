<?php

//Interface
interface paymentInterface
{
    public function payNow();
}

interface LoginInterface
{
    public function loginFirst();
}

class Paypal implements paymentInterface, LoginInterface
{
    public function loginFirst()
    {
    }
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}

class BankTransfer implements paymentInterface, LoginInterface
{
    public function loginFirst()
    {
    }
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}

class Visa implements paymentInterface
{
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->payNow();
    }
}
class Cash implements paymentInterface
{
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->payNow();
    }
}

class BuyProduct
{
    public function pay(paymentInterface $paymentType)
    {
        $paymentType->payNow();
    }

    public function onlinePay(LoginInterface $paymentType) {
        $paymentType->paymentProcess();
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);
