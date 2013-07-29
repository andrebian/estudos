<?php
App::uses('AppModel', 'Model');
App::uses('Security', 'Utility');

/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'on' => 'create'
			),
		),
	);

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$password = &$this->data[$this->alias]['password'];

			if (!empty($password)) {
				$password = Security::hash($password);
			} else {
				unset($this->data[$this->alias]['password']);
			}
		}

		return parent::beforeSave($options);
	}
}
