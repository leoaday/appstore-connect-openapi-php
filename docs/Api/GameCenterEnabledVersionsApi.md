# OpenAPI\Client\GameCenterEnabledVersionsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gameCenterEnabledVersionsCompatibleVersionsCreateToManyRelationship**](GameCenterEnabledVersionsApi.md#gameCenterEnabledVersionsCompatibleVersionsCreateToManyRelationship) | **POST** /v1/gameCenterEnabledVersions/{id}/relationships/compatibleVersions | 
[**gameCenterEnabledVersionsCompatibleVersionsDeleteToManyRelationship**](GameCenterEnabledVersionsApi.md#gameCenterEnabledVersionsCompatibleVersionsDeleteToManyRelationship) | **DELETE** /v1/gameCenterEnabledVersions/{id}/relationships/compatibleVersions | 
[**gameCenterEnabledVersionsCompatibleVersionsGetToManyRelated**](GameCenterEnabledVersionsApi.md#gameCenterEnabledVersionsCompatibleVersionsGetToManyRelated) | **GET** /v1/gameCenterEnabledVersions/{id}/compatibleVersions | 
[**gameCenterEnabledVersionsCompatibleVersionsGetToManyRelationship**](GameCenterEnabledVersionsApi.md#gameCenterEnabledVersionsCompatibleVersionsGetToManyRelationship) | **GET** /v1/gameCenterEnabledVersions/{id}/relationships/compatibleVersions | 
[**gameCenterEnabledVersionsCompatibleVersionsReplaceToManyRelationship**](GameCenterEnabledVersionsApi.md#gameCenterEnabledVersionsCompatibleVersionsReplaceToManyRelationship) | **PATCH** /v1/gameCenterEnabledVersions/{id}/relationships/compatibleVersions | 



## gameCenterEnabledVersionsCompatibleVersionsCreateToManyRelationship

> gameCenterEnabledVersionsCompatibleVersionsCreateToManyRelationship($id, $game_center_enabled_version_compatible_versions_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GameCenterEnabledVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$game_center_enabled_version_compatible_versions_linkages_request = new \OpenAPI\Client\Model\GameCenterEnabledVersionCompatibleVersionsLinkagesRequest(); // \OpenAPI\Client\Model\GameCenterEnabledVersionCompatibleVersionsLinkagesRequest | List of related linkages

try {
    $apiInstance->gameCenterEnabledVersionsCompatibleVersionsCreateToManyRelationship($id, $game_center_enabled_version_compatible_versions_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling GameCenterEnabledVersionsApi->gameCenterEnabledVersionsCompatibleVersionsCreateToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **game_center_enabled_version_compatible_versions_linkages_request** | [**\OpenAPI\Client\Model\GameCenterEnabledVersionCompatibleVersionsLinkagesRequest**](../Model/GameCenterEnabledVersionCompatibleVersionsLinkagesRequest.md)| List of related linkages |

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


## gameCenterEnabledVersionsCompatibleVersionsDeleteToManyRelationship

> gameCenterEnabledVersionsCompatibleVersionsDeleteToManyRelationship($id, $game_center_enabled_version_compatible_versions_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GameCenterEnabledVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$game_center_enabled_version_compatible_versions_linkages_request = new \OpenAPI\Client\Model\GameCenterEnabledVersionCompatibleVersionsLinkagesRequest(); // \OpenAPI\Client\Model\GameCenterEnabledVersionCompatibleVersionsLinkagesRequest | List of related linkages

try {
    $apiInstance->gameCenterEnabledVersionsCompatibleVersionsDeleteToManyRelationship($id, $game_center_enabled_version_compatible_versions_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling GameCenterEnabledVersionsApi->gameCenterEnabledVersionsCompatibleVersionsDeleteToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **game_center_enabled_version_compatible_versions_linkages_request** | [**\OpenAPI\Client\Model\GameCenterEnabledVersionCompatibleVersionsLinkagesRequest**](../Model/GameCenterEnabledVersionCompatibleVersionsLinkagesRequest.md)| List of related linkages |

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


## gameCenterEnabledVersionsCompatibleVersionsGetToManyRelated

> \OpenAPI\Client\Model\GameCenterEnabledVersionsResponse gameCenterEnabledVersionsCompatibleVersionsGetToManyRelated($id, $filter_platform, $filter_version_string, $filter_app, $filter_id, $sort, $fields_game_center_enabled_versions, $fields_apps, $limit, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GameCenterEnabledVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$filter_platform = array('filter_platform_example'); // string[] | filter by attribute 'platform'
$filter_version_string = array('filter_version_string_example'); // string[] | filter by attribute 'versionString'
$filter_app = array('filter_app_example'); // string[] | filter by id(s) of related 'app'
$filter_id = array('filter_id_example'); // string[] | filter by id(s)
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_game_center_enabled_versions = array('fields_game_center_enabled_versions_example'); // string[] | the fields to include for returned resources of type gameCenterEnabledVersions
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->gameCenterEnabledVersionsCompatibleVersionsGetToManyRelated($id, $filter_platform, $filter_version_string, $filter_app, $filter_id, $sort, $fields_game_center_enabled_versions, $fields_apps, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameCenterEnabledVersionsApi->gameCenterEnabledVersionsCompatibleVersionsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **filter_platform** | [**string[]**](../Model/string.md)| filter by attribute &#39;platform&#39; | [optional]
 **filter_version_string** | [**string[]**](../Model/string.md)| filter by attribute &#39;versionString&#39; | [optional]
 **filter_app** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;app&#39; | [optional]
 **filter_id** | [**string[]**](../Model/string.md)| filter by id(s) | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_game_center_enabled_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type gameCenterEnabledVersions | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\GameCenterEnabledVersionsResponse**](../Model/GameCenterEnabledVersionsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## gameCenterEnabledVersionsCompatibleVersionsGetToManyRelationship

> \OpenAPI\Client\Model\GameCenterEnabledVersionCompatibleVersionsLinkagesResponse gameCenterEnabledVersionsCompatibleVersionsGetToManyRelationship($id, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GameCenterEnabledVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->gameCenterEnabledVersionsCompatibleVersionsGetToManyRelationship($id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GameCenterEnabledVersionsApi->gameCenterEnabledVersionsCompatibleVersionsGetToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\GameCenterEnabledVersionCompatibleVersionsLinkagesResponse**](../Model/GameCenterEnabledVersionCompatibleVersionsLinkagesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## gameCenterEnabledVersionsCompatibleVersionsReplaceToManyRelationship

> gameCenterEnabledVersionsCompatibleVersionsReplaceToManyRelationship($id, $game_center_enabled_version_compatible_versions_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GameCenterEnabledVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$game_center_enabled_version_compatible_versions_linkages_request = new \OpenAPI\Client\Model\GameCenterEnabledVersionCompatibleVersionsLinkagesRequest(); // \OpenAPI\Client\Model\GameCenterEnabledVersionCompatibleVersionsLinkagesRequest | List of related linkages

try {
    $apiInstance->gameCenterEnabledVersionsCompatibleVersionsReplaceToManyRelationship($id, $game_center_enabled_version_compatible_versions_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling GameCenterEnabledVersionsApi->gameCenterEnabledVersionsCompatibleVersionsReplaceToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **game_center_enabled_version_compatible_versions_linkages_request** | [**\OpenAPI\Client\Model\GameCenterEnabledVersionCompatibleVersionsLinkagesRequest**](../Model/GameCenterEnabledVersionCompatibleVersionsLinkagesRequest.md)| List of related linkages |

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

