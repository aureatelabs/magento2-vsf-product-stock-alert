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

use Aureatelabs\StockAlert\Api\CatalogResultInterface;

/**
 * Class CatalogResult
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class CatalogResult implements CatalogResultInterface
{
    /**
     * @var int
     */
    private $code;

    /**
     * @var string
     */
    private $message;

    /**
     * @var mixed
     */
    private $result;

    /**
     * Get response code.
     *
     * @return int/null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set response code.
     *
     * @param int $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Get response message.
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set response message.
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Get result data.
     *
     * @return mixed|null
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set result data.
     *
     * @param mixed $result
     * @return $this
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
