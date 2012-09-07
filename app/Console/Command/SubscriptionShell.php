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

class SubscriptionShell extends AppShell {
    public $uses = array('SubscriptionDetail');

    public function startUp() {
    }

    public function main() {
        $this->out('[Subscription]');
        $cmd = '';

        while ($cmd != 'q') {
            $this->out('Choose action');
            $this->out('1. Update shipping address');
            $this->out('Q. Exit');
            $cmd = strtolower(trim($this->in('Action: ')));

            switch ($cmd) {
                case '1':
                    $this->updateAddress();
                    break;

                default:
                    break;
            }
        }
    }

    public function updateAddress() {
        $country_prefix = $old_box_sku = $next_box_sku = '';

        while (strlen($country_prefix) != 2) {
            $country_prefix = strtoupper(trim($this->in('Country [ES|UK]: ')));
        }

        while ($old_box_sku == '') {
            $old_box_sku = trim($this->in('Old Box SKU [YYYY-MM]: '));
        }

        while ($next_box_sku == '') {
            $next_box_sku = trim($this->in('Next Box SKU [YYYY-MM]: '));
        }

        $conditions = array('SubscriptionDetail.box_sku' => $country_prefix . '-JBX-' . $next_box_sku);
        $nextDetails = $this->SubscriptionDetail->find('all', compact('conditions'));

        $next_detail_count = count($nextDetails);
        $index_count = 0;

        foreach ($nextDetails as $detail) {
            $subscription_id = $detail['SubscriptionDetail']['subscription_id'];
            $conditions = array(
                'SubscriptionDetail.subscription_id' => $subscription_id,
                'SubscriptionDetail.box_sku' => $country_prefix . '-JBX-' . $old_box_sku
            );
            $oldDetail = $this->SubscriptionDetail->find('first', compact('conditions'));
            if ($oldDetail['SubscriptionDetail']['shipping_address_info'] != $detail['SubscriptionDetail']['shipping_address_info']) {
                $data['shipping_address_info'] = $oldDetail['SubscriptionDetail']['shipping_address_info'];
                $data['subscription_id'] = $subscription_id;
                $data['detail_id'] = $detail['SubscriptionDetail']['detail_id'];
                $this->SubscriptionDetail->save($data);
            }
            //if ($index_count == 5) {
            //    var_dump($data);
            //    exit;
            //}
        }
    }
}
