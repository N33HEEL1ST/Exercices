<?php

$w_routes = array(
    ['GET', '/', 'Default#home', 'default_home'],

    ['GET|POST', '/contact/', 'Default#contact', 'default_contact'],
    ['GET|POST', '/contact', 'Default#contact', 'default_contact2'],

	['GET|POST', '/est/', 'Conference#est', 'conference_est'],
	['GET|POST', '/est', 'Conference#est', 'conference_est2'],

	['GET|POST', '/ouest/', 'Conference#ouest', 'conference_ouest'],
	['GET|POST', '/ouest', 'Conference#ouest', 'conference_ouest2'],
);
