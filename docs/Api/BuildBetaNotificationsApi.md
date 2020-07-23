# OpenAPI\Client\BuildBetaNotificationsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildBetaNotificationsCreateInstance**](BuildBetaNotificationsApi.md#buildBetaNotificationsCreateInstance) | **POST** /v1/buildBetaNotifications | 



## buildBetaNotificationsCreateInstance

> \OpenAPI\Client\Model\BuildBetaNotificationResponse buildBetaNotificationsCreateInstance($build_beta_notification_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildBetaNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$build_beta_notification_create_request = new \OpenAPI\Client\Model\BuildBetaNotificationCreateRequest(); // \OpenAPI\Client\Model\BuildBetaNotificationCreateRequest | BuildBetaNotification representation

try {
    $result = $apiInstance->buildBetaNotificationsCreateInstance($build_beta_notification_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildBetaNotificationsApi->buildBetaNotificationsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_beta_notification_create_request** | [**\OpenAPI\Client\Model\BuildBetaNotificationCreateRequest**](../Model/BuildBetaNotificationCreateRequest.md)| BuildBetaNotification representation |

### Return type

[**\OpenAPI\Client\Model\BuildBetaNotificationResponse**](../Model/BuildBetaNotificationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

