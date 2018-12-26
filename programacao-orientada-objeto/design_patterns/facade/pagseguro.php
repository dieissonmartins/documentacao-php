<?php

//..
require_once('App/Lib/PagSeguro/PagSeguroLibary.php');

$paymenRequest = new PagSeguroPaymentRequest();
$paymenRequest->setCurrency("BRL");

//item
$item = new PagSeguroItem;
$item->setId( $product->id );
$item->setDescription( $product->description );
$item->setQuantity( $data->amount );
$item->setAmount( $product->price );
$paymenRequest->addItem($item);

//endereço
$endereco = new PagSeguroAddress;
$endereco->setPostalCode( $customer->postal );
$endereco->setStreet( $customer->address );
$endereco->setNumber( $customer->bumber );
$endereco->setDistrict( $customer->neighborhood );
$endereco->setCity( $customer->city );
$endereco->setState( $customer->state );
$paymenRequest->setShippingAddress( $address );

//cliente
$sender = new PagSeguroSender;
$sender->setName( trim( $customer->name ) );
$sender->setEmail( trim( $customer->email ) );
$paymenRequest->setSender( $sender );

$paymenRequest->setRedirectUrl("$host/confirmation.html");
$credentials = new PagSeguroAccountCredentials( $init['account'], $init['token'] );
$url = $paymenRequest->register($credentials );
//..


?>