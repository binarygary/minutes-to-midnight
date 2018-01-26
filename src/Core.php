<?php

namespace Gary\Minutes;

use Gary\Minutes\Service_Providers\API_Service_Provider;
use Pimple;

class Core {
	protected $container = null;

	public function __construct( $container ) {
		$this->container = $container;
	}

	static public function instance( Pimple\Container $container ) {
		$class = __CLASS__;

		return new $class( $container );
	}

	public function init() {
		$this->service_providers();
	}

	public function service_providers() {
		$this->container->register( new API_Service_Provider() );
	}
}