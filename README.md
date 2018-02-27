# Talon.One PHP sdk

## Structure

- integration_api.php
- management_api.php

## Usage

include either client in your project and follow the instructions on `example.php`

## Consumption example

You can find this same example on `example.php`

```php
<?php
/**
* Generated at Mon Feb 26 2018 13:37:50 GMT+0100 (CET)
* Author: Talon.One
* The contents of this file are auto generated
*/
include 'integration_api.php';
include 'management_api.php';
$t = new TalonOne();
$tm = new TalonOneManagement();
$t->subdomain = "demo";
$t->applicationId = 1;
$t->applicationKey = "ff164d01c11d9571";
// Refer to http://developers.talon.one/data-model/attribute-library/ for additional attributes
$response = $t->update_customer_profile("any_give_integration_id",
                    array('attributes' => array('Email' => 'your@customer.org')));
print_r($response);
// get an application by id
if ($tm->createManagementSession("demo@talon.one","demo1234")) {
    print_r($tm->get_campaign_analytics(1, 1, array('rangeStart' => '2016-06-14T13:09:35.835Z', 'rangeEnd' => '2018-06-14T13:09:35.835Z')));
    $tm->destroyManagementSession();
}
```