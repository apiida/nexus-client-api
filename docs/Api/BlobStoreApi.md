# Swagger\Client\BlobStoreApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quotaStatus**](BlobStoreApi.md#quotaStatus) | **GET** /v1/blobstores/{id}/quota-status | Get quota status for a given blob store


# **quotaStatus**
> \Swagger\Client\Model\BlobStoreQuotaResultXO quotaStatus($id)

Get quota status for a given blob store



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Apiida\Nexus\Client\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->quotaStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->quotaStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\BlobStoreQuotaResultXO**](../Model/BlobStoreQuotaResultXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

