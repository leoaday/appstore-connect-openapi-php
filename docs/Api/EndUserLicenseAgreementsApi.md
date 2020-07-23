# OpenAPI\Client\EndUserLicenseAgreementsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**endUserLicenseAgreementsCreateInstance**](EndUserLicenseAgreementsApi.md#endUserLicenseAgreementsCreateInstance) | **POST** /v1/endUserLicenseAgreements | 
[**endUserLicenseAgreementsDeleteInstance**](EndUserLicenseAgreementsApi.md#endUserLicenseAgreementsDeleteInstance) | **DELETE** /v1/endUserLicenseAgreements/{id} | 
[**endUserLicenseAgreementsGetInstance**](EndUserLicenseAgreementsApi.md#endUserLicenseAgreementsGetInstance) | **GET** /v1/endUserLicenseAgreements/{id} | 
[**endUserLicenseAgreementsTerritoriesGetToManyRelated**](EndUserLicenseAgreementsApi.md#endUserLicenseAgreementsTerritoriesGetToManyRelated) | **GET** /v1/endUserLicenseAgreements/{id}/territories | 
[**endUserLicenseAgreementsUpdateInstance**](EndUserLicenseAgreementsApi.md#endUserLicenseAgreementsUpdateInstance) | **PATCH** /v1/endUserLicenseAgreements/{id} | 



## endUserLicenseAgreementsCreateInstance

> \OpenAPI\Client\Model\EndUserLicenseAgreementResponse endUserLicenseAgreementsCreateInstance($end_user_license_agreement_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EndUserLicenseAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$end_user_license_agreement_create_request = new \OpenAPI\Client\Model\EndUserLicenseAgreementCreateRequest(); // \OpenAPI\Client\Model\EndUserLicenseAgreementCreateRequest | EndUserLicenseAgreement representation

try {
    $result = $apiInstance->endUserLicenseAgreementsCreateInstance($end_user_license_agreement_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndUserLicenseAgreementsApi->endUserLicenseAgreementsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_user_license_agreement_create_request** | [**\OpenAPI\Client\Model\EndUserLicenseAgreementCreateRequest**](../Model/EndUserLicenseAgreementCreateRequest.md)| EndUserLicenseAgreement representation |

### Return type

[**\OpenAPI\Client\Model\EndUserLicenseAgreementResponse**](../Model/EndUserLicenseAgreementResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## endUserLicenseAgreementsDeleteInstance

> endUserLicenseAgreementsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EndUserLicenseAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->endUserLicenseAgreementsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling EndUserLicenseAgreementsApi->endUserLicenseAgreementsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## endUserLicenseAgreementsGetInstance

> \OpenAPI\Client\Model\EndUserLicenseAgreementResponse endUserLicenseAgreementsGetInstance($id, $fields_end_user_license_agreements, $include, $fields_territories, $limit_territories)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EndUserLicenseAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_end_user_license_agreements = array('fields_end_user_license_agreements_example'); // string[] | the fields to include for returned resources of type endUserLicenseAgreements
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_territories = array('fields_territories_example'); // string[] | the fields to include for returned resources of type territories
$limit_territories = 56; // int | maximum number of related territories returned (when they are included)

try {
    $result = $apiInstance->endUserLicenseAgreementsGetInstance($id, $fields_end_user_license_agreements, $include, $fields_territories, $limit_territories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndUserLicenseAgreementsApi->endUserLicenseAgreementsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_end_user_license_agreements** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type endUserLicenseAgreements | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_territories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type territories | [optional]
 **limit_territories** | **int**| maximum number of related territories returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\EndUserLicenseAgreementResponse**](../Model/EndUserLicenseAgreementResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## endUserLicenseAgreementsTerritoriesGetToManyRelated

> \OpenAPI\Client\Model\TerritoriesResponse endUserLicenseAgreementsTerritoriesGetToManyRelated($id, $fields_territories, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EndUserLicenseAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_territories = array('fields_territories_example'); // string[] | the fields to include for returned resources of type territories
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->endUserLicenseAgreementsTerritoriesGetToManyRelated($id, $fields_territories, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndUserLicenseAgreementsApi->endUserLicenseAgreementsTerritoriesGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_territories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type territories | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\TerritoriesResponse**](../Model/TerritoriesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## endUserLicenseAgreementsUpdateInstance

> \OpenAPI\Client\Model\EndUserLicenseAgreementResponse endUserLicenseAgreementsUpdateInstance($id, $end_user_license_agreement_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EndUserLicenseAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$end_user_license_agreement_update_request = new \OpenAPI\Client\Model\EndUserLicenseAgreementUpdateRequest(); // \OpenAPI\Client\Model\EndUserLicenseAgreementUpdateRequest | EndUserLicenseAgreement representation

try {
    $result = $apiInstance->endUserLicenseAgreementsUpdateInstance($id, $end_user_license_agreement_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndUserLicenseAgreementsApi->endUserLicenseAgreementsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **end_user_license_agreement_update_request** | [**\OpenAPI\Client\Model\EndUserLicenseAgreementUpdateRequest**](../Model/EndUserLicenseAgreementUpdateRequest.md)| EndUserLicenseAgreement representation |

### Return type

[**\OpenAPI\Client\Model\EndUserLicenseAgreementResponse**](../Model/EndUserLicenseAgreementResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

