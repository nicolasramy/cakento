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
            ksort($entityAttributes);
            $results[$index]['Attribute'] = $entityAttributes;
        }
        return $results;
    }

    public function whereAttribute(Model $Model, $name = null) {
        if (!$name) {
            return null;
        }
        $entities = array();

        foreach($this->_attributes as $attribute) {
            $table = $Model->table . '_' . $attribute;
            $alias = 'Entity' . ucwords($attribute);

            $query = 'SELECT * FROM ' . $table . ' AS ' . $alias
                . ' INNER JOIN eav_attribute AS EAV'
                . ' ON ' . $alias . '.attribute_id = EAV.attribute_id'
                . ' WHERE attribute_code = "' . $name . '"';

            $eavs = $Model->query($query);
            foreach ($eavs as $eav) {
                $entities[] = $eav[$alias]['entity_id'];
            }
        }


        $conditions = array($Model->alias . '.entity_id' => $entities);
        $limit = 30;

        return $Model->find('all', compact('conditions', 'limit'));
    }

    public function whereAttributeLike(Model $Model, $name = null) {
        if (!$name) {
            return null;
        }
        $entities = array();

        foreach($this->_attributes as $attribute) {
            $table = $Model->table . '_' . $attribute;
            $alias = 'Entity' . ucwords($attribute);

            $query = 'SELECT * FROM ' . $table . ' AS ' . $alias
                . ' INNER JOIN eav_attribute AS EAV'
                . ' ON ' . $alias . '.attribute_id = EAV.attribute_id'
                . ' WHERE attribute_code LIKE "' . $name . '"';

            $eavs = $Model->query($query);
            foreach ($eavs as $eav) {
                $entities[] = $eav[$alias]['entity_id'];
            }
        }
        $conditions = array($Model->alias . '.entity_id' => $entities);
        $limit = 30;

        return $Model->find('all', compact('conditions', 'limit'));
    }


    public function fromValue(Model $Model, $value = null) {
        if (!$value) {
            return null;
        }

        foreach($this->_attributes as $attribute) {
            $table = $this->_instance->table . '_' . $attribute;
            $alias = 'Entity' . ucwords($attribute);

            $query = 'SELECT * FROM ' . $table . ' AS ' . $alias
                . ' INNER JOIN eav_attribute AS EAV'
                . ' ON ' . $alias . '.attribute_id = EAV.attribute_id'
                . ' WHERE value ' . $value;

            $eavs = $this->query($query);
            foreach ($eavs as $eav) {
                $entities[] = $eav[$alias]['entity_id'];
            }
        }
        $conditions = array($Model->alias . '.entity_id' => $entities);
        $limit = 30;

        return $Model->find('all', compact('conditions', 'limit'));
    }
}