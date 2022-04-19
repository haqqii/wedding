<?php if(!defined('BASEPATH')) exit('Direct Access Not Allowed');

// https://stackoverflow.com/questions/30096942/how-to-style-pagination-links-without-config-codeigniter
	$config['full_tag_open'] = '<ul class="pagination">'; 
	$config['full_tag_close'] = '</ul>';
    $config['first_tag_open'] = "<li class='page-item'>";
    $config['first_tag_close'] = "</li>"; 
	$config['prev_tag_open'] = "<li class='page-item'>"; 
	$config['prev_tag_close'] = "</li>";
    $config['next_tag_open'] = "<li class='page-item'>";
    $config['next_tag_close'] = "</li>"; 
	$config['last_tag_open'] = "<li class='page-item'>"; 
	$config['last_tag_close'] = "</li>";
    $config['cur_tag_open'] = "<li class='page-item active'><a class='page-link' href=''>"; 
	$config['cur_tag_close'] = "</a></li>";
    $config['num_tag_open'] = "<li class='page-item'>";
    $config['num_tag_close'] = "</li>"; 
	$config['attributes'] = array('class' => 'page-link');

// end of file Pagination.php 
// Location config/pagination.php 

