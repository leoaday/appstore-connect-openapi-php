# OpenAPI\Client\CertificatesApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**certificatesCreateInstance**](CertificatesApi.md#certificatesCreateInstance) | **POST** /v1/certificates | 
[**certificatesDeleteInstance**](CertificatesApi.md#certificatesDeleteInstance) | **DELETE** /v1/certificates/{id} | 
[**certificatesGetCollection**](CertificatesApi.md#certificatesGetCollection) | **GET** /v1/certificates | 
[**certificatesGetInstance**](CertificatesApi.md#certificatesGetInstance) | **GET** /v1/certificates/{id} | 



## certificatesCreateInstance

> \OpenAPI\Client\Model\CertificateResponse certificatesCreateInstance($certificate_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$certificate_create_request = new \OpenAPI\Client\Model\CertificateCreateRequest(); // \OpenAPI\Client\Model\CertificateCreateRequest | Certificate representation

try {
    $result = $apiInstance->certificatesCreateInstance($certificate_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->certificatesCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificate_create_request** | [**\OpenAPI\Client\Model\CertificateCreateRequest**](../Model/CertificateCreateRequest.md)| Certificate representation |

### Return type

[**\OpenAPI\Client\Model\CertificateResponse**](../Model/CertificateResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## certificatesDeleteInstance

> certificatesDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->certificatesDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->certificatesDeleteInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |

### Return type

void (empty response body)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## certificatesGetCollection

> \OpenAPI\Client\Model\CertificatesResponse certificatesGetCollection($filter_certificate_type, $filter_display_name, $filter_serial_number, $filter_id, $sort, $fields_certificates, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_certificate_type = array('filter_certificate_type_example'); // string[] | filter by attribute 'certificateType'
$filter_display_name = array('filter_display_name_example'); // string[] | filter by attribute 'displayName'
$filter_serial_number = array('filter_serial_number_example'); // string[] | filter by attribute 'serialNumber'
$filter_id = array('filter_id_example'); // string[] | filter by id(s)
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_certificates = array('fields_certificates_example'); // string[] | the fields to include for returned resources of type certificates
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->certificatesGetCollection($filter_certificate_type, $filter_display_name, $filter_serial_number, $filter_id, $sort, $fields_certificates, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->certificatesGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_certificate_type** | [**string[]**](../Model/string.md)| filter by attribute &#39;certificateType&#39; | [optional]
 **filter_display_name** | [**string[]**](../Model/string.md)| filter by attribute &#39;displayName&#39; | [optional]
 **filter_serial_number** | [**string[]**](../Model/string.md)| filter by attribute &#39;serialNumber&#39; | [optional]
 **filter_id** | [**string[]**](../Model/string.md)| filter by id(s) | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_certificates** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type certificates | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\CertificatesResponse**](../Model/CertificatesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## certificatesGetInstance

> \OpenAPI\Client\Model\CertificateResponse certificatesGetInstance($id, $fields_certificates)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_certificates = array('fields_certificates_example'); // string[] | the fields to include for returned resources of type certificates

try {
    $result = $apiInstance->certificatesGetInstance($id, $fields_certificates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->certificatesGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_certificates** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type certificates | [optional]

### Return type

[**\OpenAPI\Client\Model\CertificateResponse**](../Model/CertificateResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

