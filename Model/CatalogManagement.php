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

namespace Aureatelabs\StockAlert\Model;

use Magento\Store\Model\StoreManagerInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;

/**
 * Class CatalogManagement
 * @package Aureatelabs\Catalog\Model
 */
class CatalogManagement implements \Aureatelabs\StockAlert\Api\CatalogManagementInterface
{
    /**
     * @var \Aureatelabs\StockAlert\Api\CatalogResultInterface
     */
    private $_result;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @var \Magento\ProductAlert\Model\StockFactory
     */
    private $stockFactory;

    /**
     * CatalogManagement constructor.
     *
     * @param \Aureatelabs\StockAlert\Api\CatalogResultInterface $result
     * @param StoreManagerInterface $storeManager
     * @param ProductRepositoryInterface $productRepository
     * @param \Magento\ProductAlert\Model\StockFactory $stockFactory
     */
    function __construct(
        \Aureatelabs\StockAlert\Api\CatalogResultInterface $result,
        StoreManagerInterface $storeManager,
        ProductRepositoryInterface $productRepository,
        \Magento\ProductAlert\Model\StockFactory $stockFactory
    ) {
        $this->_result = $result;
        $this->storeManager = $storeManager;
        $this->productRepository = $productRepository;
        $this->stockFactory = $stockFactory;
    }

    /**
     * Save customer detail to notify them on availability of product's stock.
     *
     * @param \Aureatelabs\StockAlert\Api\Data\NotifyInterface $notify
     * @return \Aureatelabs\StockAlert\Api\CatalogResultInterface $catalogResult
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function notify(\Aureatelabs\StockAlert\Api\Data\NotifyInterface $notify)
    {
        $result = null;
        $this->_result->setCode(400)->setMessage('Error');
        try {

            $stores = $this->storeManager->getStores(true, true);
            if (isset($stores[$notify->getStoreCode()])) {

                $store = $stores[$notify->getStoreCode()];
                $product = $this->productRepository->getById($notify->getProductId());

                $model = $this->stockFactory->create()
                    ->setCustomerId($notify->getCustomerId())
                    ->setProductId($product->getId())
                    ->setWebsiteId($store->getWebsiteId())
                    ->setStoreId($store->getId());
                $model->save();

                $this->_result->setCode(200)->setMessage('Success');
                $result = _('Alert subscription has been saved.');

            } else {
                $result = _('The alert subscription couldn\'t update at this time. Please try again later.');
            }

        } catch (\Exception $e) {
            $result = _('No record found for the given details please check product id.');
        }

        $this->_result->setResult($result);
        return $this->_result;
    }
}
