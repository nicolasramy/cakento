<?php
/*
 * class Caixa
 */

class ParserTask extends Shell {

    public function execute() {
        return false;
    }

    /**
     *
     */
    public function clean($data = null) {
        if (!$data) {
            return false;
        }

        $__data = explode(PHP_EOL, $data);
        foreach ($__data as $index => $value) {
            $value = trim($value);
            if (strlen($value)) {
                $__data[$index] = $value;
             } else {
                unset($__data[$index]);
            }
        }
        return array_values($__data);
    }

    /**
     *
     */
    public function cleanRow($data = null) {
        if (!$data) {
            return false;
        }

        $__data = trim($data);
        return $__data;
    }
}
