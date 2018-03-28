<?php
class AppSchema extends CakeSchema {

	//会議室
	public $categories = array(
		'id' => array('type' => 'integer', 'key' => 'primary',
			'null' => false, 'default' => null),
		'name' => array('type' => 'string',
			'null' => false, 'default' => '', 'length' => 255),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)),

		'tableParameters' => array()
	);

//会議
	public $articles = array(
		'id' => array('type' => 'integer', 'key' => 'primary',
			'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false,
			'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false,
			'default' => null),
		'user_id' => array('type' => 'integer',
			'null' => false, 'default' => null),
		'title' => array('type' => 'string',
			'null' => false, 'default' => '', 'length' => 255),
		'body' => array('type' => 'string',
			'null' => false, 'default' => '', 'length' => 12000),

		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)),

		'tableParameters' => array()
	);

	// ユーザー
	public $users = array(
		'id' => array('type' => 'integer', 'key' => 'primary',
			'null' => false, 'default' => null),
		'username' => array('type' => 'string',
			'null' => false, 'default' => '', 'length' => 255),
		'email' => array('type' => 'string', 'null' => false, 'default' => '', 'length' => 255),
		'password' => array('type' => 'string', 'null' => false, 'default' => '', 'length' => 255),
		'created' => array('type' => 'datetime', 'null' => false,
			'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false,
			'default' => null),

		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)),

		'tableParameters' => array()
	);

	public $categories_articles = array(
		'id' => array('type' => 'integer', 'key' => 'primary',
			'null' => false, 'default' => null),
		'article_id' => array('type' => 'integer',
			'null' => false, 'default' => null),
		'category_id' => array('type' => 'integer',
			'null' => false, 'default' => null),

		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)),

		'tableParameters' => array()
	);

}
