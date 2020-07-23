# OpenAPI\Client\AgeRatingDeclarationsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ageRatingDeclarationsUpdateInstance**](AgeRatingDeclarationsApi.md#ageRatingDeclarationsUpdateInstance) | **PATCH** /v1/ageRatingDeclarations/{id} | 



## ageRatingDeclarationsUpdateInstance

> \OpenAPI\Client\Model\AgeRatingDeclarationResponse ageRatingDeclarationsUpdateInstance($id, $age_rating_declaration_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AgeRatingDeclarationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$age_rating_declaration_update_request = new \OpenAPI\Client\Model\AgeRatingDeclarationUpdateRequest(); // \OpenAPI\Client\Model\AgeRatingDeclarationUpdateRequest | AgeRatingDeclaration representation

try {
    $result = $apiInstance->ageRatingDeclarationsUpdateInstance($id, $age_rating_declaration_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgeRatingDeclarationsApi->ageRatingDeclarationsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **age_rating_declaration_update_request** | [**\OpenAPI\Client\Model\AgeRatingDeclarationUpdateRequest**](../Model/AgeRatingDeclarationUpdateRequest.md)| AgeRatingDeclaration representation |

### Return type

[**\OpenAPI\Client\Model\AgeRatingDeclarationResponse**](../Model/AgeRatingDeclarationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

