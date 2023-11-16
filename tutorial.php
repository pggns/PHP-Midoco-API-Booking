<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/BookingService.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/BookingService.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Pggns\MidocoApi\Booking\ClassMap::get(),
];
/**
 * Samples for Announce ServiceType
 */
$announce = new \Pggns\MidocoApi\Booking\ServiceType\Announce($options);
$announce->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for announceBookingMessage operation/method
 */
if ($announce->announceBookingMessage(new \Pggns\MidocoApi\Booking\StructType\AnnounceBookingMessageRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceBookingMessageNorm operation/method
 */
if ($announce->announceBookingMessageNorm(new \Pggns\MidocoApi\Booking\StructType\AnnounceBookingMessageNormRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceAgencySaleMessage operation/method
 */
if ($announce->announceAgencySaleMessage(new \Pggns\MidocoApi\Booking\StructType\AnnounceAgencySaleMessageRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceExternalPayment operation/method
 */
if ($announce->announceExternalPayment(new \Pggns\MidocoApi\Booking\StructType\AnnounceExternalPaymentRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Pggns\MidocoApi\Booking\ServiceType\Update($options);
$update->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for updateBookingStatus operation/method
 */
if ($update->updateBookingStatus(new \Pggns\MidocoApi\Booking\StructType\UpdateBookingStatusRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateOrderPaymentInfo operation/method
 */
if ($update->updateOrderPaymentInfo(new \Pggns\MidocoApi\Booking\StructType\UpdateOrderPaymentInfoRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
