<?php

namespace Gary\Minutes;

use Pimple;

require_once ( __DIR__ ) . '/vendor/autoload.php';
function relay() {
	return \Gary\Minutes\Core::instance( new Pimple\Container( [ 'plugin_file' => __FILE__ ] ) );
}

relay()->init();