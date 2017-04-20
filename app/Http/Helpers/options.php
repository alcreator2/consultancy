<?php

function get_pages()
{
    return array(
        'Home'          => 'Home',
        'Mission'       => 'Mission',
        'Product'		=> 'Product',
        'About'         => 'About',
        'Service'		=> 'Service',
        'Project'		=> 'Project',
        'Contact'		=> 'Contact'
    );
}

function get_banner_type()
{
	return array(
		"Main Banner"		=> "Main Banner",
		"Product Banner"	=> "Product Banner",
		"Testimonials"		=> "Testimonials",
		"Services"			=> "Services"
	);
}

function getRoute($routeTo = NULL)
{
    switch ($routeTo) {
        case 'Home':
            return url('/');
            break;
        case 'Product':
            return url('/products');
            break;
        case 'Contact':
            return url('/contact-us');
            break;
        case 'Project':
            return url('/projects');
            break;
        case 'About':
            return url('/about-us');
            break;
        case 'Service':
            return url('/services');
        default:
            return url('/');
            break;
    }
}

function get_theme()
{
	return array(
		"white"		=> "white",
		"blue"		=> "blue",
		"red"		=> "red",
		"orange"	=> "orange",
		"green"		=> "green",
		"yellow"	=> "yellow",
		"black"		=> "black",
	);
}