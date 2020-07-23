# OpenAPI\Client\FinanceReportsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**financeReportsGetCollection**](FinanceReportsApi.md#financeReportsGetCollection) | **GET** /v1/financeReports | 



## financeReportsGetCollection

> \SplFileObject financeReportsGetCollection($filter_region_code, $filter_report_date, $filter_report_type, $filter_vendor_number)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FinanceReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_region_code = array('filter_region_code_example'); // string[] | filter by attribute 'regionCode'
$filter_report_date = array('filter_report_date_example'); // string[] | filter by attribute 'reportDate'
$filter_report_type = array('filter_report_type_example'); // string[] | filter by attribute 'reportType'
$filter_vendor_number = array('filter_vendor_number_example'); // string[] | filter by attribute 'vendorNumber'

try {
    $result = $apiInstance->financeReportsGetCollection($filter_region_code, $filter_report_date, $filter_report_type, $filter_vendor_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceReportsApi->financeReportsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_region_code** | [**string[]**](../Model/string.md)| filter by attribute &#39;regionCode&#39; |
 **filter_report_date** | [**string[]**](../Model/string.md)| filter by attribute &#39;reportDate&#39; |
 **filter_report_type** | [**string[]**](../Model/string.md)| filter by attribute &#39;reportType&#39; |
 **filter_vendor_number** | [**string[]**](../Model/string.md)| filter by attribute &#39;vendorNumber&#39; |

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

