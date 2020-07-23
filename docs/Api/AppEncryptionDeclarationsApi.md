# OpenAPI\Client\AppEncryptionDeclarationsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appEncryptionDeclarationsAppGetToOneRelated**](AppEncryptionDeclarationsApi.md#appEncryptionDeclarationsAppGetToOneRelated) | **GET** /v1/appEncryptionDeclarations/{id}/app | 
[**appEncryptionDeclarationsBuildsCreateToManyRelationship**](AppEncryptionDeclarationsApi.md#appEncryptionDeclarationsBuildsCreateToManyRelationship) | **POST** /v1/appEncryptionDeclarations/{id}/relationships/builds | 
[**appEncryptionDeclarationsGetCollection**](AppEncryptionDeclarationsApi.md#appEncryptionDeclarationsGetCollection) | **GET** /v1/appEncryptionDeclarations | 
[**appEncryptionDeclarationsGetInstance**](AppEncryptionDeclarationsApi.md#appEncryptionDeclarationsGetInstance) | **GET** /v1/appEncryptionDeclarations/{id} | 



## appEncryptionDeclarationsAppGetToOneRelated

> \OpenAPI\Client\Model\AppResponse appEncryptionDeclarationsAppGetToOneRelated($id, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppEncryptionDeclarationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->appEncryptionDeclarationsAppGetToOneRelated($id, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEncryptionDeclarationsApi->appEncryptionDeclarationsAppGetToOneRelated: ', $e->getMessage(), PHP_EOL;
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


## appEncryptionDeclarationsBuildsCreateToManyRelationship

> appEncryptionDeclarationsBuildsCreateToManyRelationship($id, $app_encryption_declaration_builds_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppEncryptionDeclarationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_encryption_declaration_builds_linkages_request = new \OpenAPI\Client\Model\AppEncryptionDeclarationBuildsLinkagesRequest(); // \OpenAPI\Client\Model\AppEncryptionDeclarationBuildsLinkagesRequest | List of related linkages

try {
    $apiInstance->appEncryptionDeclarationsBuildsCreateToManyRelationship($id, $app_encryption_declaration_builds_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling AppEncryptionDeclarationsApi->appEncryptionDeclarationsBuildsCreateToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_encryption_declaration_builds_linkages_request** | [**\OpenAPI\Client\Model\AppEncryptionDeclarationBuildsLinkagesRequest**](../Model/AppEncryptionDeclarationBuildsLinkagesRequest.md)| List of related linkages |

### Return type

void (empty response body)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appEncryptionDeclarationsGetCollection

> \OpenAPI\Client\Model\AppEncryptionDeclarationsResponse appEncryptionDeclarationsGetCollection($filter_platform, $filter_app, $filter_builds, $fields_app_encryption_declarations, $limit, $include, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppEncryptionDeclarationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_platform = array('filter_platform_example'); // string[] | filter by attribute 'platform'
$filter_app = array('filter_app_example'); // string[] | filter by id(s) of related 'app'
$filter_builds = array('filter_builds_example'); // string[] | filter by id(s) of related 'builds'
$fields_app_encryption_declarations = array('fields_app_encryption_declarations_example'); // string[] | the fields to include for returned resources of type appEncryptionDeclarations
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->appEncryptionDeclarationsGetCollection($filter_platform, $filter_app, $filter_builds, $fields_app_encryption_declarations, $limit, $include, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEncryptionDeclarationsApi->appEncryptionDeclarationsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_platform** | [**string[]**](../Model/string.md)| filter by attribute &#39;platform&#39; | [optional]
 **filter_app** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;app&#39; | [optional]
 **filter_builds** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;builds&#39; | [optional]
 **fields_app_encryption_declarations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appEncryptionDeclarations | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]

### Return type

[**\OpenAPI\Client\Model\AppEncryptionDeclarationsResponse**](../Model/AppEncryptionDeclarationsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appEncryptionDeclarationsGetInstance

> \OpenAPI\Client\Model\AppEncryptionDeclarationResponse appEncryptionDeclarationsGetInstance($id, $fields_app_encryption_declarations, $include, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppEncryptionDeclarationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_encryption_declarations = array('fields_app_encryption_declarations_example'); // string[] | the fields to include for returned resources of type appEncryptionDeclarations
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->appEncryptionDeclarationsGetInstance($id, $fields_app_encryption_declarations, $include, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEncryptionDeclarationsApi->appEncryptionDeclarationsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_encryption_declarations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appEncryptionDeclarations | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]

### Return type

[**\OpenAPI\Client\Model\AppEncryptionDeclarationResponse**](../Model/AppEncryptionDeclarationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

