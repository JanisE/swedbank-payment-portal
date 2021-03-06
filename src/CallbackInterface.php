<?php

namespace SwedbankPaymentPortal;

use SwedbankPaymentPortal\CC\PaymentCardTransactionData;
use SwedbankPaymentPortal\SharedEntity\Type\TransactionResult;
use SwedbankPaymentPortal\Transaction\TransactionFrame;

/**
 * Interface for callbacks to be used in initPayment() calls.
 */
interface CallbackInterface extends \Serializable
{
    /**
     * Handle a response to request.
     *
     * @param TransactionResult               $transactionResult
     * @param TransactionFrame                $transactionFrame
     * @param PaymentCardTransactionData|null $paymentCardTransactionData
     * @return
     */
    public function handleFinishedTransaction(
        TransactionResult $transactionResult,
        TransactionFrame $transactionFrame,
        PaymentCardTransactionData $paymentCardTransactionData = null
    );
}
