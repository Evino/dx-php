<?php
namespace MercadoPago;
use MercadoPago\Annotation\RestMethod;
use MercadoPago\Annotation\RequestParam;
use MercadoPago\Annotation\Attribute;

/**
 * @RestMethod(resource="/v1/advanced_payments", method="create")
 * @RestMethod(resource="/v1/advanced_payments/:id", method="read")
 * @RestMethod(resource="/v1/advanced_payments/search", method="search")
 * @RestMethod(resource="/v1/advanced_payments/:id", method="update")
 * @RestMethod(resource="/v1/advanced_payments/:id/refunds", method="refund")
 * @RequestParam(param="access_token")
 */
class AdvancedPayment extends Payment
{
    /**
     * @Attribute()
     */
    protected $wallet_payment;

    /**
     * @Attribute()
     */
    protected $payments;

    /**
     * @Attribute()
     */
    protected $disbursements;
}
