<?php

return array('key_values' => function($t) {
	$t->increments('_id');
	$t->integer('app_id')->references('_id')->on('apps');
	$t->string('name');
	$t->string('value');
	$t->timestamps();
});

