<?php
/**

*/

$sql = 'SELECT name AS id,name FROM base_enum WHERE link = ? ORDER BY sort';

$this->KindList       = radix_db_sql::fetch_mix($sql, array('contact-kind'));
$this->StatusList     = radix_db_sql::fetch_mix($sql, array('contact-status'));

// function createAction()
// {
// 	$_ENV['title'] = array('Contact','Create');
// 	$P = new Contact(intval($_GET['parent']));
// 	if ($P->id) {
// 		$this->view->Contact['parent_id'] = $P['id'];
// 		$this->view->Contact['company'] = $P['company'];
// 		$this->view->Contact['phone'] = $P['phone'];
// 		$this->view->Contact['url'] = $P['url'];
// 	}
// 	$this->render('view');
// }
// 