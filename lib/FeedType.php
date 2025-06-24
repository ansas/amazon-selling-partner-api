<?php

namespace SellingPartnerApi;

/**************/
/* Feed types */
/**************/

class FeedType
{
    // Listings feeds
    public const JSON_LISTINGS_FEED = [
        'contentType' => ContentType::JSON,
        'name' => 'JSON_LISTINGS_FEED'
    ];
    public const POST_STD_ACES_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_STD_ACES_DATA'
    ];


    // Order feeds
    public const POST_ORDER_ACKNOWLEDGEMENT_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_ORDER_ACKNOWLEDGEMENT_DATA'
    ];
    public const POST_PAYMENT_ADJUSTMENT_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_PAYMENT_ADJUSTMENT_DATA'
    ];
    public const POST_ORDER_FULFILLMENT_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_ORDER_FULFILLMENT_DATA'
    ];
    public const POST_INVOICE_CONFIRMATION_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_INVOICE_CONFIRMATION_DATA'
    ];
    // Japan only
    public const POST_EXPECTED_SHIP_DATE_SOD = [
        'contentType' => ContentType::XML,
        'name' => 'POST_EXPECTED_SHIP_DATE_SOD'
    ];
    public const POST_FLAT_FILE_ORDER_ACKNOWLEDGEMENT_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_ORDER_ACKNOWLEDGEMENT_DATA'
    ];
    public const POST_FLAT_FILE_PAYMENT_ADJUSTMENT_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_PAYMENT_ADJUSTMENT_DATA'
    ];
    public const POST_FLAT_FILE_FULFILLMENT_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_FULFILLMENT_DATA'
    ];
    // Japan only
    public const POST_EXPECTED_SHIP_DATE_SOD_FLAT_FILE = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_EXPECTED_SHIP_DATE_SOD_FLAT_FILE'
    ];


    // FBA feeds
    public const POST_FULFILLMENT_ORDER_REQUEST_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_FULFILLMENT_ORDER_REQUEST_DATA'
    ];
    public const POST_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA'
    ];
    public const POST_FBA_INBOUND_CARTON_CONTENTS = [
        'contentType' => ContentType::XML,
        'name' => 'POST_FBA_INBOUND_CARTON_CONTENTS'
    ];
    public const POST_FLAT_FILE_FULFILLMENT_ORDER_REQUEST_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_FULFILLMENT_ORDER_REQUEST_DATA'
    ];
    public const POST_FLAT_FILE_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA'
    ];
    public const POST_FLAT_FILE_FBA_CREATE_INBOUND_PLAN = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_FBA_CREATE_INBOUND_PLAN'
    ];
    public const POST_FLAT_FILE_FBA_UPDATE_INBOUND_PLAN = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_FBA_UPDATE_INBOUND_PLAN'
    ];
    public const POST_FLAT_FILE_FBA_CREATE_REMOVAL = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_FBA_CREATE_REMOVAL'
    ];


    // Business feed
    public const RFQ_UPLOAD_FEED = [
        'contentType' => ContentType::TAB,
        'name' => 'RFQ_UPLOAD_FEED'
    ];


    // Easy ship feed
    public const POST_EASYSHIP_DOCUMENTS = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_EASYSHIP_DOCUMENTS'
    ];    
    
    // VAT Invoice Upload feed
    public const UPLOAD_VAT_INVOICE = [
        'contentType' => ContentType::PDF,
        'name' => 'UPLOAD_VAT_INVOICE'
    ];

}
