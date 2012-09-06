<?php
/**
 * TEST Shell
 *
 * PHP Version 5
 *
 * @category CakePHP
 * @package  Test
 * @author   Nicolas Ramy-Sepou <nicolas.ramy-sepou@darkelda.com>
 * @license  http://darkelda.com Proprietor
 * @link     http://darkelda.com
 */

class ProtoShell extends AppShell {
    public $uses = array('User');
    public $tasks = array('ProgressBar');

    public function startUp() {
    }

    public function main() {
        $this->out('Test Shell');
    }
}
