<?php
App::uses('Attribute', 'Model');

/**
 * Attribute Test Case
 */
class AttributeTest extends CakeTestCase {

	/**
	 * Fixtures
	 * @var array
	 */
	public $fixtures = array(
		'app.attribute'
	);

	/**
	 * setUp method
	 * @return void
	 */
	public function setUp() {
		parent::setUp();
		$this->Attribute = ClassRegistry::init('Attribute');
	}

	/**
	 * tearDown method
	 * @return void
	 */
	public function tearDown() {
		unset($this->Attribute);

		parent::tearDown();
	}

	public function testVisible($fields = null) {
        $params = array(
            'conditions' => array(
                'Attribute.visible' => 1
            ),
            'fields' => $fields
        );

        return $this->Attribute->find('all', $params);
    }

	public function testSearchable($fields = null) {
        $params = array(
            'conditions' => array(
                'Attribute.searchable' => 1
            ),
            'fields' => $fields
        );

        return $this->Attribute->find('all', $params);
    }


	public function testDeleted($fields = null) {
        $params = array(
            'conditions' => array(
                'Attribute.deleted' => 1
            ),
            'fields' => $fields
        );

        return $this->Attribute->find('all', $params);
    }
}
