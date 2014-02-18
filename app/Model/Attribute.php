<?php
App::uses('AppModel', 'Model');
/**
 * Attribute Model
 *
 * @property Product $Product
 */
class Attribute extends AppModel {

    // Constants
    const TYPE_INT = 1;
    const TYPE_DECIMAL = 2;
    const TYPE_BOOLEAN = 3;
    const TYPE_STRING = 4;
    const TYPE_TEXT = 5;
    const TYPE_DATETIME = 6;

    // Callbacks
/**
 * Before Save
 *
 * @access  public
 * @param   array $results, boolean $primary
 * @return  array
 */
    public function beforeSave($options = array()) {
        if (strlen($this->data['Attribute']['name'])) {
            $this->data['Attribute']['name'] = Inflector::slug(strtolower($this->data['Attribute']['name']));
        }
        if (strlen($this->data['Attribute']['type']) > 1) {
            $this->data['Attribute']['type'] = $this->getTypeId($this->data['Attribute']['type']);
        }
        return true;
    }

/**
 * After Find
 *
 * @access  public
 * @param   array $results, boolean $primary
 * @return  array
 */
    public function afterFind($results, $primary = false) {
        foreach ($results as $key => $value) {
            if (isset($value['Attribute']['type'])) {
                $label = $this->getTypeLabel($value['Attribute']['type']);
                $results[$key]['Attribute']['type'] = $label ? $label : $value['Attribute']['type'];
            }
        }
        return $results;
    }

    // Misc
    public function getTypes() {
        return array(
            self::TYPE_INT => __('Integer'),
            self::TYPE_DECIMAL => __('Decimal'),
            self::TYPE_BOOLEAN => __('Boolean'),
            self::TYPE_STRING => __('String'),
            self::TYPE_TEXT => __('Text'),
            self::TYPE_DATETIME => __('Datetime')
        );
    }

    public function getTypeLabel($id = null) {
        if (!$id) {
            return false;
        }
        $types = $this->getTypes();
        return isset($types[$id]) ? $types[$id] : false;
    }

    public function getTypeId($label = null) {
        if (!$label) {
            return false;
        }

        $types = $this->getTypes();
        var_dump($label);
        var_dump(array_search($label, $types));
        exit;
        return array_search($label, $types);
    }
}
