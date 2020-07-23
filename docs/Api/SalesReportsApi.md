# OpenAPI\Client\SalesReportsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesReportsGetCollection**](SalesReportsApi.md#salesReportsGetCollection) | **GET** /v1/salesReports | 



## salesReportsGetCollection

> \SplFileObject salesReportsGetCollection($filter_frequency, $filter_report_sub_type, $filter_report_type, $filter_vendor_number, $filter_report_date, $filter_version)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SalesReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_frequency = array('filter_frequency_example'); // string[] | filter by attribute 'frequency'
$filter_report_sub_type = array('filter_report_sub_type_example'); // string[] | filter by attribute 'reportSubType'
$filter_report_type = array('filter_report_type_example'); // string[] | filter by attribute 'reportType'
$filter_vendor_number = array('filter_vendor_number_example'); // string[] | filter by attribute 'vendorNumber'
$filter_report_date = array('filter_report_date_example'); // string[] | filter by attribute 'reportDate'
$filter_version = array('filter_version_example'); // string[] | filter by attribute 'version'

try {
    $result = $apiInstance->salesReportsGetCollection($filter_frequency, $filter_report_sub_type, $filter_report_type, $filter_vendor_number, $filter_report_date, $filter_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesReportsApi->salesReportsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_frequency** | [**string[]**](../Model/string.md)| filter by attribute &#39;frequency&#39; |
 **filter_report_sub_type** | [**string[]**](../Model/string.md)| filter by attribute &#39;reportSubType&#39; |
 **filter_report_type** | [**string[]**](../Model/string.md)| filter by attribute &#39;reportType&#39; |
 **filter_vendor_number** | [**string[]**](../Model/string.md)| filter by attribute &#39;vendorNumber&#39; |
 **filter_report_date** | [**string[]**](../Model/string.md)| filter by attribute &#39;reportDate&#39; | [optional]
 **filter_version** | [**string[]**](../Model/string.md)| filter by attribute &#39;version&#39; | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, gzip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

