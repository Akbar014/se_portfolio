<?php
App::uses('AppModel', 'Model');
/**
 * Expense Model
 *
 * @property Expensehead $Expensehead
 */
class Expense extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'expensehead_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'amount' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Expensehead' => array(
			'className' => 'Expensehead',
			'foreignKey' => 'expensehead_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
