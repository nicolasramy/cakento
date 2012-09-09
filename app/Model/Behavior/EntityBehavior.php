<?php
class EntityBehavior extends ModelBehavior {
    protected $_attributes = array();

    public function setup(Model $Model, $settings = array()) {

        if (!isset($this->settings[$Model->alias])) {
            foreach ($settings as $value) {
                $this->_attributes[] = $value;
            }
        }
    }

    public function afterFind(Model $Model, array $results, $primary = false) {
        if (empty($this->_attributes) || !isset($results[0][$Model->alias])) {
            return $results;
        }

        $entityAttributes = array();

        foreach ($results as $index => $result) {
            // Retrieve entity_id
            $entity_id = $results[$index][$Model->alias]['entity_id'];

            // Attributes
            foreach ($this->_attributes as $attribute) {
                // Set table & alias
                $table = $Model->table . '_' . $attribute;
                $alias = 'Entity' . ucwords($attribute);

                $query = 'SELECT * FROM ' . $table . ' AS ' . $alias
                    . ' INNER JOIN eav_attribute AS EAV'
                    . ' ON ' . $alias . '.attribute_id = EAV.attribute_id'
                    . ' WHERE entity_id = ' . $entity_id;

                $eavs = $Model->query($query);
                foreach ($eavs as $eav) {
                    $entityAttributes[$eav['EAV']['attribute_code']] = $eav[$alias]['value'];
                }
            }
            $results[$index]['Attribute'] = $entityAttributes;
        }
        return $results;
    }
}