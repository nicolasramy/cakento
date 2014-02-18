<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property Category $ParentCategory
 * @property Category $ChildCategory
 */
class Category extends AppModel {

	public $actsAs = array('Tree');


}
