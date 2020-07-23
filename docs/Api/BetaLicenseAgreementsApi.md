# OpenAPI\Client\BetaLicenseAgreementsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**betaLicenseAgreementsAppGetToOneRelated**](BetaLicenseAgreementsApi.md#betaLicenseAgreementsAppGetToOneRelated) | **GET** /v1/betaLicenseAgreements/{id}/app | 
[**betaLicenseAgreementsGetCollection**](BetaLicenseAgreementsApi.md#betaLicenseAgreementsGetCollection) | **GET** /v1/betaLicenseAgreements | 
[**betaLicenseAgreementsGetInstance**](BetaLicenseAgreementsApi.md#betaLicenseAgreementsGetInstance) | **GET** /v1/betaLicenseAgreements/{id} | 
[**betaLicenseAgreementsUpdateInstance**](BetaLicenseAgreementsApi.md#betaLicenseAgreementsUpdateInstance) | **PATCH** /v1/betaLicenseAgreements/{id} | 



## betaLicenseAgreementsAppGetToOneRelated

> \OpenAPI\Client\Model\AppResponse betaLicenseAgreementsAppGetToOneRelated($id, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaLicenseAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->betaLicenseAgreementsAppGetToOneRelated($id, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaLicenseAgreementsApi->betaLicenseAgreementsAppGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]

### Return type

[**\OpenAPI\Client\Model\AppResponse**](../Model/AppResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaLicenseAgreementsGetCollection

> \OpenAPI\Client\Model\BetaLicenseAgreementsResponse betaLicenseAgreementsGetCollection($filter_app, $fields_beta_license_agreements, $limit, $include, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaLicenseAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_app = array('filter_app_example'); // string[] | filter by id(s) of related 'app'
$fields_beta_license_agreements = array('fields_beta_license_agreements_example'); // string[] | the fields to include for returned resources of type betaLicenseAgreements
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->betaLicenseAgreementsGetCollection($filter_app, $fields_beta_license_agreements, $limit, $include, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaLicenseAgreementsApi->betaLicenseAgreementsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_app** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;app&#39; | [optional]
 **fields_beta_license_agreements** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaLicenseAgreements | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaLicenseAgreementsResponse**](../Model/BetaLicenseAgreementsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaLicenseAgreementsGetInstance

> \OpenAPI\Client\Model\BetaLicenseAgreementResponse betaLicenseAgreementsGetInstance($id, $fields_beta_license_agreements, $include, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaLicenseAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_license_agreements = array('fields_beta_license_agreements_example'); // string[] | the fields to include for returned resources of type betaLicenseAgreements
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->betaLicenseAgreementsGetInstance($id, $fields_beta_license_agreements, $include, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaLicenseAgreementsApi->betaLicenseAgreementsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_license_agreements** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaLicenseAgreements | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaLicenseAgreementResponse**](../Model/BetaLicenseAgreementResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaLicenseAgreementsUpdateInstance

> \OpenAPI\Client\Model\BetaLicenseAgreementResponse betaLicenseAgreementsUpdateInstance($id, $beta_license_agreement_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaLicenseAgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_license_agreement_update_request = new \OpenAPI\Client\Model\BetaLicenseAgreementUpdateRequest(); // \OpenAPI\Client\Model\BetaLicenseAgreementUpdateRequest | BetaLicenseAgreement representation

try {
    $result = $apiInstance->betaLicenseAgreementsUpdateInstance($id, $beta_license_agreement_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaLicenseAgreementsApi->betaLicenseAgreementsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_license_agreement_update_request** | [**\OpenAPI\Client\Model\BetaLicenseAgreementUpdateRequest**](../Model/BetaLicenseAgreementUpdateRequest.md)| BetaLicenseAgreement representation |

### Return type

[**\OpenAPI\Client\Model\BetaLicenseAgreementResponse**](../Model/BetaLicenseAgreementResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

