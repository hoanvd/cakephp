<?php
class Migration972015 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'migration_9_7_2015';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
				'posts' => array(
					'publish' => array('type' => 'integer', 'null' => false, 'default' => '1', 'after' => 'slug'),
				),
			),
		),
		'down' => array(
			'drop_field' => array(
				'posts' => array('publish'),
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}
