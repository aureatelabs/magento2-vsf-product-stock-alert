<?php
/**
 * Aureate Labs Pvt Ltd.
 *
 * Do not edit or add to this file if you wish to upgrade to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please contact us https://aureatelabs.com/contact-us.
 *
 * @category   Aureatelabs
 * @package    Aureatelabs_StockAlert
 * @author     Aureate Labs Team
 * @copyright  Copyright (c) 2019 Aureate Labs. ( https://aureatelabs.com )
 */
namespace Aureatelabs\StockAlert\Api;

/**
 * Catalog management interface.
 * @api
 */
interface CatalogManagementInterface
{
    /**
     * Save customer detail to notify them on availability of product's stock.
     *
     * @param \Aureatelabs\StockAlert\Api\Data\NotifyInterface $notify
     * @return \Aureatelabs\StockAlert\Api\CatalogResultInterface $catalogResult
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function notify(\Aureatelabs\StockAlert\Api\Data\NotifyInterface $notify);
}
