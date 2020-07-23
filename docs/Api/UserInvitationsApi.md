# OpenAPI\Client\UserInvitationsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userInvitationsCreateInstance**](UserInvitationsApi.md#userInvitationsCreateInstance) | **POST** /v1/userInvitations | 
[**userInvitationsDeleteInstance**](UserInvitationsApi.md#userInvitationsDeleteInstance) | **DELETE** /v1/userInvitations/{id} | 
[**userInvitationsGetCollection**](UserInvitationsApi.md#userInvitationsGetCollection) | **GET** /v1/userInvitations | 
[**userInvitationsGetInstance**](UserInvitationsApi.md#userInvitationsGetInstance) | **GET** /v1/userInvitations/{id} | 
[**userInvitationsVisibleAppsGetToManyRelated**](UserInvitationsApi.md#userInvitationsVisibleAppsGetToManyRelated) | **GET** /v1/userInvitations/{id}/visibleApps | 



## userInvitationsCreateInstance

> \OpenAPI\Client\Model\UserInvitationResponse userInvitationsCreateInstance($user_invitation_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_invitation_create_request = new \OpenAPI\Client\Model\UserInvitationCreateRequest(); // \OpenAPI\Client\Model\UserInvitationCreateRequest | UserInvitation representation

try {
    $result = $apiInstance->userInvitationsCreateInstance($user_invitation_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationsApi->userInvitationsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_invitation_create_request** | [**\OpenAPI\Client\Model\UserInvitationCreateRequest**](../Model/UserInvitationCreateRequest.md)| UserInvitation representation |

### Return type

[**\OpenAPI\Client\Model\UserInvitationResponse**](../Model/UserInvitationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userInvitationsDeleteInstance

> userInvitationsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->userInvitationsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationsApi->userInvitationsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## userInvitationsGetCollection

> \OpenAPI\Client\Model\UserInvitationsResponse userInvitationsGetCollection($filter_email, $filter_roles, $filter_visible_apps, $sort, $fields_user_invitations, $limit, $include, $fields_apps, $limit_visible_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_email = array('filter_email_example'); // string[] | filter by attribute 'email'
$filter_roles = array('filter_roles_example'); // string[] | filter by attribute 'roles'
$filter_visible_apps = array('filter_visible_apps_example'); // string[] | filter by id(s) of related 'visibleApps'
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_user_invitations = array('fields_user_invitations_example'); // string[] | the fields to include for returned resources of type userInvitations
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_visible_apps = 56; // int | maximum number of related visibleApps returned (when they are included)

try {
    $result = $apiInstance->userInvitationsGetCollection($filter_email, $filter_roles, $filter_visible_apps, $sort, $fields_user_invitations, $limit, $include, $fields_apps, $limit_visible_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationsApi->userInvitationsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_email** | [**string[]**](../Model/string.md)| filter by attribute &#39;email&#39; | [optional]
 **filter_roles** | [**string[]**](../Model/string.md)| filter by attribute &#39;roles&#39; | [optional]
 **filter_visible_apps** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;visibleApps&#39; | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_user_invitations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type userInvitations | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_visible_apps** | **int**| maximum number of related visibleApps returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\UserInvitationsResponse**](../Model/UserInvitationsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userInvitationsGetInstance

> \OpenAPI\Client\Model\UserInvitationResponse userInvitationsGetInstance($id, $fields_user_invitations, $include, $fields_apps, $limit_visible_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_user_invitations = array('fields_user_invitations_example'); // string[] | the fields to include for returned resources of type userInvitations
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_visible_apps = 56; // int | maximum number of related visibleApps returned (when they are included)

try {
    $result = $apiInstance->userInvitationsGetInstance($id, $fields_user_invitations, $include, $fields_apps, $limit_visible_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationsApi->userInvitationsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_user_invitations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type userInvitations | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_visible_apps** | **int**| maximum number of related visibleApps returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\UserInvitationResponse**](../Model/UserInvitationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userInvitationsVisibleAppsGetToManyRelated

> \OpenAPI\Client\Model\AppsResponse userInvitationsVisibleAppsGetToManyRelated($id, $fields_apps, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->userInvitationsVisibleAppsGetToManyRelated($id, $fields_apps, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInvitationsApi->userInvitationsVisibleAppsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
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

