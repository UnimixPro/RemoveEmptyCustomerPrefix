<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Unimix\RemoveEmptyCustomerPrefix\Observer\Customer;

class AddressFormat implements \Magento\Framework\Event\ObserverInterface
{

    /**
     * Execute observer
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(
        \Magento\Framework\Event\Observer $observer
    ) {
        $address = $observer->getEvent()->getAddress();

        $prefix =  $address->getData('prefix');

        if($prefix == 0 ) {
            $address->setData('prefix', '');
        }



        //Your observer code
    }
}

