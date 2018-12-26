<?php

class PagSeguroFacabe{
	private $request;

	public function __construct( $currency ){
		$this->request = new PagSeguroPaymentRequest();
		$this->request->setCurrency( $currency );
	}

	public function addItem($product, $amount){
		$item = new PagSeguroItem;

		$item->setId( $product->id );
		$item->setDescription( $product->description );
		$item->setQuantity( $amount );
		$item->setAmount( $product->price );
		
		$this->request->addItem( $item );
	}

	public function setCustomer( $customer){
		$address = new PagSeguroAddress;
		
		$address->setPostalCode( $customer->postal );
		$address->setStreet( $customer->address );
		$address->setNumbre( $customer->number );
		$address->setDistrict( $customer->neighborhood );
		$address->setState( $customer->state );
		
		$address->request->setShippingAddress($address);

		$sender = new PagSeguroSender;

		$sender->setName( trim( $customer->name ) );
		$sender->setEmail( trim( $customer->email ) );
		$this->request->setSender( $sender );
	}

	public function precess(){
		//..
	}

}

?>