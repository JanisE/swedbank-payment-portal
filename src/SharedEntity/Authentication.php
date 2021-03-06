<?php

namespace SwedbankPaymentPortal\SharedEntity;

use JMS\Serializer\Annotation;

/**
 * The container for Gateway authentication.
 *
 * @Annotation\AccessType("public_method")
 */
class Authentication
{
    /**
     * Authentication constructor.
     *
     * @param int    $client
     * @param string $password
     */
    public function __construct($client, $password)
    {
        $this->client = $client;
        $this->password = $password;
    }

    /**
     * The password for the Client ID / vTID.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     */
    private $password;

    /**
     * The account / Client ID (vTID) that the transaction will be processed on.
     *
     * @var string
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $client;

    /**
     * Client getter.
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Client setter.
     *
     * @param string $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * Password getter.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Password setter.
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
