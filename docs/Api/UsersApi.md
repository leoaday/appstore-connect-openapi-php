# OpenAPI\Client\UsersApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersDeleteInstance**](UsersApi.md#usersDeleteInstance) | **DELETE** /v1/users/{id} | 
[**usersGetCollection**](UsersApi.md#usersGetCollection) | **GET** /v1/users | 
[**usersGetInstance**](UsersApi.md#usersGetInstance) | **GET** /v1/users/{id} | 
[**usersUpdateInstance**](UsersApi.md#usersUpdateInstance) | **PATCH** /v1/users/{id} | 
[**usersVisibleAppsCreateToManyRelationship**](UsersApi.md#usersVisibleAppsCreateToManyRelationship) | **POST** /v1/users/{id}/relationships/visibleApps | 
[**usersVisibleAppsDeleteToManyRelationship**](UsersApi.md#usersVisibleAppsDeleteToManyRelationship) | **DELETE** /v1/users/{id}/relationships/visibleApps | 
[**usersVisibleAppsGetToManyRelated**](UsersApi.md#usersVisibleAppsGetToManyRelated) | **GET** /v1/users/{id}/visibleApps | 
[**usersVisibleAppsGetToManyRelationship**](UsersApi.md#usersVisibleAppsGetToManyRelationship) | **GET** /v1/users/{id}/relationships/visibleApps | 
[**usersVisibleAppsReplaceToManyRelationship**](UsersApi.md#usersVisibleAppsReplaceToManyRelationship) | **PATCH** /v1/users/{id}/relationships/visibleApps | 



## usersDeleteInstance

> usersDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->usersDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## usersGetCollection

> \OpenAPI\Client\Model\UsersResponse usersGetCollection($filter_roles, $filter_username, $filter_visible_apps, $sort, $fields_users, $limit, $include, $fields_apps, $limit_visible_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_roles = array('filter_roles_example'); // string[] | filter by attribute 'roles'
$filter_username = array('filter_username_example'); // string[] | filter by attribute 'username'
$filter_visible_apps = array('filter_visible_apps_example'); // string[] | filter by id(s) of related 'visibleApps'
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_users = array('fields_users_example'); // string[] | the fields to include for returned resources of type users
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_visible_apps = 56; // int | maximum number of related visibleApps returned (when they are included)

try {
    $result = $apiInstance->usersGetCollection($filter_roles, $filter_username, $filter_visible_apps, $sort, $fields_users, $limit, $include, $fields_apps, $limit_visible_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_roles** | [**string[]**](../Model/string.md)| filter by attribute &#39;roles&#39; | [optional]
 **filter_username** | [**string[]**](../Model/string.md)| filter by attribute &#39;username&#39; | [optional]
 **filter_visible_apps** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;visibleApps&#39; | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_users** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type users | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_visible_apps** | **int**| maximum number of related visibleApps returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersGetInstance

> \OpenAPI\Client\Model\UserResponse usersGetInstance($id, $fields_users, $include, $fields_apps, $limit_visible_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_users = array('fields_users_example'); // string[] | the fields to include for returned resources of type users
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_visible_apps = 56; // int | maximum number of related visibleApps returned (when they are included)

try {
    $result = $apiInstance->usersGetInstance($id, $fields_users, $include, $fields_apps, $limit_visible_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_users** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type users | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_visible_apps** | **int**| maximum number of related visibleApps returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUpdateInstance

> \OpenAPI\Client\Model\UserResponse usersUpdateInstance($id, $user_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$user_update_request = new \OpenAPI\Client\Model\UserUpdateRequest(); // \OpenAPI\Client\Model\UserUpdateRequest | User representation

try {
    $result = $apiInstance->usersUpdateInstance($id, $user_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **user_update_request** | [**\OpenAPI\Client\Model\UserUpdateRequest**](../Model/UserUpdateRequest.md)| User representation |

### Return type

[**\OpenAPI\Client\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersVisibleAppsCreateToManyRelationship

> usersVisibleAppsCreateToManyRelationship($id, $user_visible_apps_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$user_visible_apps_linkages_request = new \OpenAPI\Client\Model\UserVisibleAppsLinkagesRequest(); // \OpenAPI\Client\Model\UserVisibleAppsLinkagesRequest | List of related linkages

try {
    $apiInstance->usersVisibleAppsCreateToManyRelationship($id, $user_visible_apps_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersVisibleAppsCreateToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **user_visible_apps_linkages_request** | [**\OpenAPI\Client\Model\UserVisibleAppsLinkagesRequest**](../Model/UserVisibleAppsLinkagesRequest.md)| List of related linkages |

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


## usersVisibleAppsDeleteToManyRelationship

> usersVisibleAppsDeleteToManyRelationship($id, $user_visible_apps_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$user_visible_apps_linkages_request = new \OpenAPI\Client\Model\UserVisibleAppsLinkagesRequest(); // \OpenAPI\Client\Model\UserVisibleAppsLinkagesRequest | List of related linkages

try {
    $apiInstance->usersVisibleAppsDeleteToManyRelationship($id, $user_visible_apps_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersVisibleAppsDeleteToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **user_visible_apps_linkages_request** | [**\OpenAPI\Client\Model\UserVisibleAppsLinkagesRequest**](../Model/UserVisibleAppsLinkagesRequest.md)| List of related linkages |

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


## usersVisibleAppsGetToManyRelated

> \OpenAPI\Client\Model\AppsResponse usersVisibleAppsGetToManyRelated($id, $fields_apps, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->usersVisibleAppsGetToManyRelated($id, $fields_apps, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersVisibleAppsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\AppsResponse**](../Model/AppsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersVisibleAppsGetToManyRelationship

> \OpenAPI\Client\Model\UserVisibleAppsLinkagesResponse usersVisibleAppsGetToManyRelationship($id, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->usersVisibleAppsGetToManyRelationship($id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersVisibleAppsGetToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\UserVisibleAppsLinkagesResponse**](../Model/UserVisibleAppsLinkagesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersVisibleAppsReplaceToManyRelationship

> usersVisibleAppsReplaceToManyRelationship($id, $user_visible_apps_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$user_visible_apps_linkages_request = new \OpenAPI\Client\Model\UserVisibleAppsLinkagesRequest(); // \OpenAPI\Client\Model\UserVisibleAppsLinkagesRequest | List of related linkages

try {
    $apiInstance->usersVisibleAppsReplaceToManyRelationship($id, $user_visible_apps_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersVisibleAppsReplaceToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **user_visible_apps_linkages_request** | [**\OpenAPI\Client\Model\UserVisibleAppsLinkagesRequest**](../Model/UserVisibleAppsLinkagesRequest.md)| List of related linkages |

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

