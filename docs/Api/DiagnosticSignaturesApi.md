# OpenAPI\Client\DiagnosticSignaturesApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**diagnosticSignaturesLogsGetToManyRelated**](DiagnosticSignaturesApi.md#diagnosticSignaturesLogsGetToManyRelated) | **GET** /v1/diagnosticSignatures/{id}/logs | 



## diagnosticSignaturesLogsGetToManyRelated

> \OpenAPI\Client\Model\DiagnosticLogsResponse diagnosticSignaturesLogsGetToManyRelated($id, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DiagnosticSignaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->diagnosticSignaturesLogsGetToManyRelated($id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiagnosticSignaturesApi->diagnosticSignaturesLogsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\DiagnosticLogsResponse**](../Model/DiagnosticLogsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

