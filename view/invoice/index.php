<?php
/**
    @file
    @brief Invoice Index View Shows Paginated Results of the Index View
*/

echo radix::block('page-link', array(
	'cur' => $this->page_cur,
	'max' => $this->page_max,
	'size' => $_GET['size'],
));

echo radix::block('invoice-list', array('list' => $this->list));

echo radix::block('page-link', array(
	'cur' => $this->page_cur,
	'max' => $this->page_max,
	'size' => $_GET['size'],
));
