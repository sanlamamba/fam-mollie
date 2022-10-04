<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69aec4f5bfc231eadb2cac5bd416d54f
{
    public static $prefixLengthsPsr4 = array (
        '_' => 
        array (
            '_PhpScoper54524b0fd82d\\Composer\\CaBundle\\' => 41,
        ),
        'M' => 
        array (
            'Mollie\\Api\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '_PhpScoper54524b0fd82d\\Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Mollie\\Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Mollie\\Api\\CompatibilityChecker' => __DIR__ . '/../..' . '/src/CompatibilityChecker.php',
        'Mollie\\Api\\Endpoints\\ChargebackEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/ChargebackEndpoint.php',
        'Mollie\\Api\\Endpoints\\ClientEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/ClientEndpoint.php',
        'Mollie\\Api\\Endpoints\\CollectionEndpointAbstract' => __DIR__ . '/../..' . '/src/Endpoints/CollectionEndpointAbstract.php',
        'Mollie\\Api\\Endpoints\\CustomerEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/CustomerEndpoint.php',
        'Mollie\\Api\\Endpoints\\CustomerPaymentsEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/CustomerPaymentsEndpoint.php',
        'Mollie\\Api\\Endpoints\\EndpointAbstract' => __DIR__ . '/../..' . '/src/Endpoints/EndpointAbstract.php',
        'Mollie\\Api\\Endpoints\\InvoiceEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/InvoiceEndpoint.php',
        'Mollie\\Api\\Endpoints\\MandateEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/MandateEndpoint.php',
        'Mollie\\Api\\Endpoints\\MethodEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/MethodEndpoint.php',
        'Mollie\\Api\\Endpoints\\OnboardingEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/OnboardingEndpoint.php',
        'Mollie\\Api\\Endpoints\\OrderEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/OrderEndpoint.php',
        'Mollie\\Api\\Endpoints\\OrderLineEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/OrderLineEndpoint.php',
        'Mollie\\Api\\Endpoints\\OrderPaymentEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/OrderPaymentEndpoint.php',
        'Mollie\\Api\\Endpoints\\OrderRefundEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/OrderRefundEndpoint.php',
        'Mollie\\Api\\Endpoints\\OrganizationEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/OrganizationEndpoint.php',
        'Mollie\\Api\\Endpoints\\OrganizationPartnerEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/OrganizationPartnerEndpoint.php',
        'Mollie\\Api\\Endpoints\\PaymentCaptureEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/PaymentCaptureEndpoint.php',
        'Mollie\\Api\\Endpoints\\PaymentChargebackEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/PaymentChargebackEndpoint.php',
        'Mollie\\Api\\Endpoints\\PaymentEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/PaymentEndpoint.php',
        'Mollie\\Api\\Endpoints\\PaymentLinkEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/PaymentLinkEndpoint.php',
        'Mollie\\Api\\Endpoints\\PaymentRefundEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/PaymentRefundEndpoint.php',
        'Mollie\\Api\\Endpoints\\PaymentRouteEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/PaymentRouteEndpoint.php',
        'Mollie\\Api\\Endpoints\\PermissionEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/PermissionEndpoint.php',
        'Mollie\\Api\\Endpoints\\ProfileEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/ProfileEndpoint.php',
        'Mollie\\Api\\Endpoints\\ProfileMethodEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/ProfileMethodEndpoint.php',
        'Mollie\\Api\\Endpoints\\RefundEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/RefundEndpoint.php',
        'Mollie\\Api\\Endpoints\\SettlementPaymentEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/SettlementPaymentEndpoint.php',
        'Mollie\\Api\\Endpoints\\SettlementsEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/SettlementsEndpoint.php',
        'Mollie\\Api\\Endpoints\\ShipmentEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/ShipmentEndpoint.php',
        'Mollie\\Api\\Endpoints\\SubscriptionEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/SubscriptionEndpoint.php',
        'Mollie\\Api\\Endpoints\\WalletEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/WalletEndpoint.php',
        'Mollie\\Api\\Exceptions\\ApiException' => __DIR__ . '/../..' . '/src/Exceptions/ApiException.php',
        'Mollie\\Api\\Exceptions\\CurlConnectTimeoutException' => __DIR__ . '/../..' . '/src/Exceptions/CurlConnectTimeoutException.php',
        'Mollie\\Api\\Exceptions\\HttpAdapterDoesNotSupportDebuggingException' => __DIR__ . '/../..' . '/src/Exceptions/HttpAdapterDoesNotSupportDebuggingException.php',
        'Mollie\\Api\\Exceptions\\IncompatiblePlatform' => __DIR__ . '/../..' . '/src/Exceptions/IncompatiblePlatform.php',
        'Mollie\\Api\\Exceptions\\UnrecognizedClientException' => __DIR__ . '/../..' . '/src/Exceptions/UnrecognizedClientException.php',
        'Mollie\\Api\\HttpAdapter\\CurlMollieHttpAdapter' => __DIR__ . '/../..' . '/src/HttpAdapter/CurlMollieHttpAdapter.php',
        'Mollie\\Api\\HttpAdapter\\Guzzle6And7MollieHttpAdapter' => __DIR__ . '/../..' . '/src/HttpAdapter/Guzzle6And7MollieHttpAdapter.php',
        'Mollie\\Api\\HttpAdapter\\Guzzle6And7RetryMiddlewareFactory' => __DIR__ . '/../..' . '/src/HttpAdapter/Guzzle6And7RetryMiddlewareFactory.php',
        'Mollie\\Api\\HttpAdapter\\MollieHttpAdapterInterface' => __DIR__ . '/../..' . '/src/HttpAdapter/MollieHttpAdapterInterface.php',
        'Mollie\\Api\\HttpAdapter\\MollieHttpAdapterPicker' => __DIR__ . '/../..' . '/src/HttpAdapter/MollieHttpAdapterPicker.php',
        'Mollie\\Api\\HttpAdapter\\MollieHttpAdapterPickerInterface' => __DIR__ . '/../..' . '/src/HttpAdapter/MollieHttpAdapterPickerInterface.php',
        'Mollie\\Api\\MollieApiClient' => __DIR__ . '/../..' . '/src/MollieApiClient.php',
        'Mollie\\Api\\Resources\\BaseCollection' => __DIR__ . '/../..' . '/src/Resources/BaseCollection.php',
        'Mollie\\Api\\Resources\\BaseResource' => __DIR__ . '/../..' . '/src/Resources/BaseResource.php',
        'Mollie\\Api\\Resources\\Capture' => __DIR__ . '/../..' . '/src/Resources/Capture.php',
        'Mollie\\Api\\Resources\\CaptureCollection' => __DIR__ . '/../..' . '/src/Resources/CaptureCollection.php',
        'Mollie\\Api\\Resources\\Chargeback' => __DIR__ . '/../..' . '/src/Resources/Chargeback.php',
        'Mollie\\Api\\Resources\\ChargebackCollection' => __DIR__ . '/../..' . '/src/Resources/ChargebackCollection.php',
        'Mollie\\Api\\Resources\\Client' => __DIR__ . '/../..' . '/src/Resources/Client.php',
        'Mollie\\Api\\Resources\\ClientCollection' => __DIR__ . '/../..' . '/src/Resources/ClientCollection.php',
        'Mollie\\Api\\Resources\\CurrentProfile' => __DIR__ . '/../..' . '/src/Resources/CurrentProfile.php',
        'Mollie\\Api\\Resources\\CursorCollection' => __DIR__ . '/../..' . '/src/Resources/CursorCollection.php',
        'Mollie\\Api\\Resources\\Customer' => __DIR__ . '/../..' . '/src/Resources/Customer.php',
        'Mollie\\Api\\Resources\\CustomerCollection' => __DIR__ . '/../..' . '/src/Resources/CustomerCollection.php',
        'Mollie\\Api\\Resources\\Invoice' => __DIR__ . '/../..' . '/src/Resources/Invoice.php',
        'Mollie\\Api\\Resources\\InvoiceCollection' => __DIR__ . '/../..' . '/src/Resources/InvoiceCollection.php',
        'Mollie\\Api\\Resources\\Issuer' => __DIR__ . '/../..' . '/src/Resources/Issuer.php',
        'Mollie\\Api\\Resources\\IssuerCollection' => __DIR__ . '/../..' . '/src/Resources/IssuerCollection.php',
        'Mollie\\Api\\Resources\\Mandate' => __DIR__ . '/../..' . '/src/Resources/Mandate.php',
        'Mollie\\Api\\Resources\\MandateCollection' => __DIR__ . '/../..' . '/src/Resources/MandateCollection.php',
        'Mollie\\Api\\Resources\\Method' => __DIR__ . '/../..' . '/src/Resources/Method.php',
        'Mollie\\Api\\Resources\\MethodCollection' => __DIR__ . '/../..' . '/src/Resources/MethodCollection.php',
        'Mollie\\Api\\Resources\\MethodPrice' => __DIR__ . '/../..' . '/src/Resources/MethodPrice.php',
        'Mollie\\Api\\Resources\\MethodPriceCollection' => __DIR__ . '/../..' . '/src/Resources/MethodPriceCollection.php',
        'Mollie\\Api\\Resources\\Onboarding' => __DIR__ . '/../..' . '/src/Resources/Onboarding.php',
        'Mollie\\Api\\Resources\\Order' => __DIR__ . '/../..' . '/src/Resources/Order.php',
        'Mollie\\Api\\Resources\\OrderCollection' => __DIR__ . '/../..' . '/src/Resources/OrderCollection.php',
        'Mollie\\Api\\Resources\\OrderLine' => __DIR__ . '/../..' . '/src/Resources/OrderLine.php',
        'Mollie\\Api\\Resources\\OrderLineCollection' => __DIR__ . '/../..' . '/src/Resources/OrderLineCollection.php',
        'Mollie\\Api\\Resources\\Organization' => __DIR__ . '/../..' . '/src/Resources/Organization.php',
        'Mollie\\Api\\Resources\\OrganizationCollection' => __DIR__ . '/../..' . '/src/Resources/OrganizationCollection.php',
        'Mollie\\Api\\Resources\\Partner' => __DIR__ . '/../..' . '/src/Resources/Partner.php',
        'Mollie\\Api\\Resources\\Payment' => __DIR__ . '/../..' . '/src/Resources/Payment.php',
        'Mollie\\Api\\Resources\\PaymentCollection' => __DIR__ . '/../..' . '/src/Resources/PaymentCollection.php',
        'Mollie\\Api\\Resources\\PaymentLink' => __DIR__ . '/../..' . '/src/Resources/PaymentLink.php',
        'Mollie\\Api\\Resources\\PaymentLinkCollection' => __DIR__ . '/../..' . '/src/Resources/PaymentLinkCollection.php',
        'Mollie\\Api\\Resources\\Permission' => __DIR__ . '/../..' . '/src/Resources/Permission.php',
        'Mollie\\Api\\Resources\\PermissionCollection' => __DIR__ . '/../..' . '/src/Resources/PermissionCollection.php',
        'Mollie\\Api\\Resources\\Profile' => __DIR__ . '/../..' . '/src/Resources/Profile.php',
        'Mollie\\Api\\Resources\\ProfileCollection' => __DIR__ . '/../..' . '/src/Resources/ProfileCollection.php',
        'Mollie\\Api\\Resources\\Refund' => __DIR__ . '/../..' . '/src/Resources/Refund.php',
        'Mollie\\Api\\Resources\\RefundCollection' => __DIR__ . '/../..' . '/src/Resources/RefundCollection.php',
        'Mollie\\Api\\Resources\\ResourceFactory' => __DIR__ . '/../..' . '/src/Resources/ResourceFactory.php',
        'Mollie\\Api\\Resources\\Route' => __DIR__ . '/../..' . '/src/Resources/Route.php',
        'Mollie\\Api\\Resources\\RouteCollection' => __DIR__ . '/../..' . '/src/Resources/RouteCollection.php',
        'Mollie\\Api\\Resources\\Settlement' => __DIR__ . '/../..' . '/src/Resources/Settlement.php',
        'Mollie\\Api\\Resources\\SettlementCollection' => __DIR__ . '/../..' . '/src/Resources/SettlementCollection.php',
        'Mollie\\Api\\Resources\\Shipment' => __DIR__ . '/../..' . '/src/Resources/Shipment.php',
        'Mollie\\Api\\Resources\\ShipmentCollection' => __DIR__ . '/../..' . '/src/Resources/ShipmentCollection.php',
        'Mollie\\Api\\Resources\\Subscription' => __DIR__ . '/../..' . '/src/Resources/Subscription.php',
        'Mollie\\Api\\Resources\\SubscriptionCollection' => __DIR__ . '/../..' . '/src/Resources/SubscriptionCollection.php',
        'Mollie\\Api\\Types\\InvoiceStatus' => __DIR__ . '/../..' . '/src/Types/InvoiceStatus.php',
        'Mollie\\Api\\Types\\MandateMethod' => __DIR__ . '/../..' . '/src/Types/MandateMethod.php',
        'Mollie\\Api\\Types\\MandateStatus' => __DIR__ . '/../..' . '/src/Types/MandateStatus.php',
        'Mollie\\Api\\Types\\OnboardingStatus' => __DIR__ . '/../..' . '/src/Types/OnboardingStatus.php',
        'Mollie\\Api\\Types\\OrderLineStatus' => __DIR__ . '/../..' . '/src/Types/OrderLineStatus.php',
        'Mollie\\Api\\Types\\OrderLineType' => __DIR__ . '/../..' . '/src/Types/OrderLineType.php',
        'Mollie\\Api\\Types\\OrderStatus' => __DIR__ . '/../..' . '/src/Types/OrderStatus.php',
        'Mollie\\Api\\Types\\PaymentMethod' => __DIR__ . '/../..' . '/src/Types/PaymentMethod.php',
        'Mollie\\Api\\Types\\PaymentMethodStatus' => __DIR__ . '/../..' . '/src/Types/PaymentMethodStatus.php',
        'Mollie\\Api\\Types\\PaymentStatus' => __DIR__ . '/../..' . '/src/Types/PaymentStatus.php',
        'Mollie\\Api\\Types\\ProfileStatus' => __DIR__ . '/../..' . '/src/Types/ProfileStatus.php',
        'Mollie\\Api\\Types\\RefundStatus' => __DIR__ . '/../..' . '/src/Types/RefundStatus.php',
        'Mollie\\Api\\Types\\SequenceType' => __DIR__ . '/../..' . '/src/Types/SequenceType.php',
        'Mollie\\Api\\Types\\SettlementStatus' => __DIR__ . '/../..' . '/src/Types/SettlementStatus.php',
        'Mollie\\Api\\Types\\SubscriptionStatus' => __DIR__ . '/../..' . '/src/Types/SubscriptionStatus.php',
        '_PhpScoper54524b0fd82d\\Composer\\CaBundle\\CaBundle' => __DIR__ . '/..' . '/composer/ca-bundle/src/CaBundle.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit69aec4f5bfc231eadb2cac5bd416d54f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69aec4f5bfc231eadb2cac5bd416d54f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit69aec4f5bfc231eadb2cac5bd416d54f::$classMap;

        }, null, ClassLoader::class);
    }
}
