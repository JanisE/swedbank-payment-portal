<?php

namespace SwedbankPaymentPortal\CC\HPSCommunicationEntity\SetupRequest;

use SwedbankPaymentPortal\SharedEntity\Authentication;
use JMS\Serializer\Annotation as Annotation;

/**
 * The container for the XML request. Also contains the version attribute, which we recommend you set to 2.
 *
 * @Annotation\XmlRoot("Request")
 * @Annotation\AccessType("public_method")
 */
class SetupRequest
{
    /**
     * API version used.
     */
    const API_VERSION = 2;

    /**
     * API version used.
     *
     * @var int
     *
     * @Annotation\XmlAttribute
     * @Annotation\Type("integer")
     * @Annotation\AccessType("reflection")
     */
    private $version = self::API_VERSION;

    /**
     * The container for Gateway authentication.
     *
     * @var Authentication
     *
     * @Annotation\SerializedName("Authentication")
     * @Annotation\Type("SwedbankPaymentPortal\SharedEntity\Authentication")
     */
    private $authentication;

    /**
     * The container transaction details.
     *
     * @var Transaction
     *
     * @Annotation\SerializedName("Transaction")
     * @Annotation\Type("SwedbankPaymentPortal\CC\HPSCommunicationEntity\SetupRequest\Transaction")
     */
    private $transaction;

    /**
     * AuthorizationRequest constructor.
     *
     * @param Authentication $authentication
     * @param Transaction    $transaction
     */
    public function __construct(Authentication $authentication, Transaction $transaction)
    {
        $this->authentication = $authentication;
        $this->transaction = $transaction;
    }

    /**
     * Authentication getter.
     *
     * @return Authentication
     */
    public function getAuthentication()
    {
        return $this->authentication;
    }

    /**
     * Authentication setter.
     *
     * @param Authentication $authentication
     */
    public function setAuthentication($authentication)
    {
        $this->authentication = $authentication;
    }

    /**
     * Transaction getter.
     *
     * @return Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Transaction setter.
     *
     * @param Transaction $transaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
    }
}
