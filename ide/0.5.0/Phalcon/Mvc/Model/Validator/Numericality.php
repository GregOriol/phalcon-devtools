<?php 

namespace Phalcon\Mvc\Model\Validator {

	/**
	 * Phalcon\Mvc\Model\Validator\Numericality
	 *
	 * Allows to validate if a field has a valid numeric format
	 *
	 *<code>
	 *use Phalcon\Mvc\Model\Validator\Numericality as NumericalityValidator;
	 *
	 *class Products extends Phalcon\Mvc\Model
	 *{
	 *
	 *  public function validation()
	 *  {
	 *      $this->validate(new NumericalityValidator(array(
	 *          'field' => 'price'
	 *      )));
	 *      if ($this->validationHasFailed() == true) {
	 *          return false;
	 *      }
	 *  }
	 *
	 *}
	 *</code>
	 *
	 */
	
	class Numericality extends \Phalcon\Mvc\Model\Validator {

		protected $_options;

		protected $_messages;

		/**
		 * Executes the validator
		 *
		 * @return boolean
		 */
		public function validate($record){ }

	}
}
