# OpenAPI\Client\BetaTesterInvitationsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**betaTesterInvitationsCreateInstance**](BetaTesterInvitationsApi.md#betaTesterInvitationsCreateInstance) | **POST** /v1/betaTesterInvitations | 



## betaTesterInvitationsCreateInstance

> \OpenAPI\Client\Model\BetaTesterInvitationResponse betaTesterInvitationsCreateInstance($beta_tester_invitation_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTesterInvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$beta_tester_invitation_create_request = new \OpenAPI\Client\Model\BetaTesterInvitationCreateRequest(); // \OpenAPI\Client\Model\BetaTesterInvitationCreateRequest | BetaTesterInvitation representation

try {
    $result = $apiInstance->betaTesterInvitationsCreateInstance($beta_tester_invitation_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaTesterInvitationsApi->betaTesterInvitationsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **beta_tester_invitation_create_request** | [**\OpenAPI\Client\Model\BetaTesterInvitationCreateRequest**](../Model/BetaTesterInvitationCreateRequest.md)| BetaTesterInvitation representation |

### Return type

[**\OpenAPI\Client\Model\BetaTesterInvitationResponse**](../Model/BetaTesterInvitationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

