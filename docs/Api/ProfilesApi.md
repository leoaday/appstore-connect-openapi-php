# OpenAPI\Client\ProfilesApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**profilesBundleIdGetToOneRelated**](ProfilesApi.md#profilesBundleIdGetToOneRelated) | **GET** /v1/profiles/{id}/bundleId | 
[**profilesCertificatesGetToManyRelated**](ProfilesApi.md#profilesCertificatesGetToManyRelated) | **GET** /v1/profiles/{id}/certificates | 
[**profilesCreateInstance**](ProfilesApi.md#profilesCreateInstance) | **POST** /v1/profiles | 
[**profilesDeleteInstance**](ProfilesApi.md#profilesDeleteInstance) | **DELETE** /v1/profiles/{id} | 
[**profilesDevicesGetToManyRelated**](ProfilesApi.md#profilesDevicesGetToManyRelated) | **GET** /v1/profiles/{id}/devices | 
[**profilesGetCollection**](ProfilesApi.md#profilesGetCollection) | **GET** /v1/profiles | 
[**profilesGetInstance**](ProfilesApi.md#profilesGetInstance) | **GET** /v1/profiles/{id} | 



## profilesBundleIdGetToOneRelated

> \OpenAPI\Client\Model\BundleIdResponse profilesBundleIdGetToOneRelated($id, $fields_bundle_ids)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_bundle_ids = array('fields_bundle_ids_example'); // string[] | the fields to include for returned resources of type bundleIds

try {
    $result = $apiInstance->profilesBundleIdGetToOneRelated($id, $fields_bundle_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesBundleIdGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_bundle_ids** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type bundleIds | [optional]

### Return type

[**\OpenAPI\Client\Model\BundleIdResponse**](../Model/BundleIdResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## profilesCertificatesGetToManyRelated

> \OpenAPI\Client\Model\CertificatesResponse profilesCertificatesGetToManyRelated($id, $fields_certificates, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_certificates = array('fields_certificates_example'); // string[] | the fields to include for returned resources of type certificates
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->profilesCertificatesGetToManyRelated($id, $fields_certificates, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesCertificatesGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
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


## profilesCreateInstance

> \OpenAPI\Client\Model\ProfileResponse profilesCreateInstance($profile_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_create_request = new \OpenAPI\Client\Model\ProfileCreateRequest(); // \OpenAPI\Client\Model\ProfileCreateRequest | Profile representation

try {
    $result = $apiInstance->profilesCreateInstance($profile_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_create_request** | [**\OpenAPI\Client\Model\ProfileCreateRequest**](../Model/ProfileCreateRequest.md)| Profile representation |

### Return type

[**\OpenAPI\Client\Model\ProfileResponse**](../Model/ProfileResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## profilesDeleteInstance

> profilesDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->profilesDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## profilesDevicesGetToManyRelated

> \OpenAPI\Client\Model\DevicesResponse profilesDevicesGetToManyRelated($id, $fields_devices, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_devices = array('fields_devices_example'); // string[] | the fields to include for returned resources of type devices
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->profilesDevicesGetToManyRelated($id, $fields_devices, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesDevicesGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_devices** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type devices | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\DevicesResponse**](../Model/DevicesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## profilesGetCollection

> \OpenAPI\Client\Model\ProfilesResponse profilesGetCollection($filter_name, $filter_profile_state, $filter_profile_type, $filter_id, $sort, $fields_profiles, $limit, $include, $fields_certificates, $fields_devices, $fields_bundle_ids, $limit_certificates, $limit_devices)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_name = array('filter_name_example'); // string[] | filter by attribute 'name'
$filter_profile_state = array('filter_profile_state_example'); // string[] | filter by attribute 'profileState'
$filter_profile_type = array('filter_profile_type_example'); // string[] | filter by attribute 'profileType'
$filter_id = array('filter_id_example'); // string[] | filter by id(s)
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_profiles = array('fields_profiles_example'); // string[] | the fields to include for returned resources of type profiles
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_certificates = array('fields_certificates_example'); // string[] | the fields to include for returned resources of type certificates
$fields_devices = array('fields_devices_example'); // string[] | the fields to include for returned resources of type devices
$fields_bundle_ids = array('fields_bundle_ids_example'); // string[] | the fields to include for returned resources of type bundleIds
$limit_certificates = 56; // int | maximum number of related certificates returned (when they are included)
$limit_devices = 56; // int | maximum number of related devices returned (when they are included)

try {
    $result = $apiInstance->profilesGetCollection($filter_name, $filter_profile_state, $filter_profile_type, $filter_id, $sort, $fields_profiles, $limit, $include, $fields_certificates, $fields_devices, $fields_bundle_ids, $limit_certificates, $limit_devices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_name** | [**string[]**](../Model/string.md)| filter by attribute &#39;name&#39; | [optional]
 **filter_profile_state** | [**string[]**](../Model/string.md)| filter by attribute &#39;profileState&#39; | [optional]
 **filter_profile_type** | [**string[]**](../Model/string.md)| filter by attribute &#39;profileType&#39; | [optional]
 **filter_id** | [**string[]**](../Model/string.md)| filter by id(s) | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_profiles** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type profiles | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_certificates** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type certificates | [optional]
 **fields_devices** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type devices | [optional]
 **fields_bundle_ids** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type bundleIds | [optional]
 **limit_certificates** | **int**| maximum number of related certificates returned (when they are included) | [optional]
 **limit_devices** | **int**| maximum number of related devices returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\ProfilesResponse**](../Model/ProfilesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## profilesGetInstance

> \OpenAPI\Client\Model\ProfileResponse profilesGetInstance($id, $fields_profiles, $include, $fields_certificates, $fields_devices, $fields_bundle_ids, $limit_certificates, $limit_devices)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_profiles = array('fields_profiles_example'); // string[] | the fields to include for returned resources of type profiles
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_certificates = array('fields_certificates_example'); // string[] | the fields to include for returned resources of type certificates
$fields_devices = array('fields_devices_example'); // string[] | the fields to include for returned resources of type devices
$fields_bundle_ids = array('fields_bundle_ids_example'); // string[] | the fields to include for returned resources of type bundleIds
$limit_certificates = 56; // int | maximum number of related certificates returned (when they are included)
$limit_devices = 56; // int | maximum number of related devices returned (when they are included)

try {
    $result = $apiInstance->profilesGetInstance($id, $fields_profiles, $include, $fields_certificates, $fields_devices, $fields_bundle_ids, $limit_certificates, $limit_devices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_profiles** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type profiles | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_certificates** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type certificates | [optional]
 **fields_devices** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type devices | [optional]
 **fields_bundle_ids** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type bundleIds | [optional]
 **limit_certificates** | **int**| maximum number of related certificates returned (when they are included) | [optional]
 **limit_devices** | **int**| maximum number of related devices returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\ProfileResponse**](../Model/ProfileResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

