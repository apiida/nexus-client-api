# Swagger\Client\ScriptApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add**](ScriptApi.md#add) | **POST** /v1/script | Add a new script
[**browse**](ScriptApi.md#browse) | **GET** /v1/script | List all stored scripts
[**delete**](ScriptApi.md#delete) | **DELETE** /v1/script/{name} | Delete stored script by name
[**edit**](ScriptApi.md#edit) | **PUT** /v1/script/{name} | Update stored script by name
[**read**](ScriptApi.md#read) | **GET** /v1/script/{name} | Read stored script by name
[**run1**](ScriptApi.md#run1) | **POST** /v1/script/{name}/run | Run stored script by name


# **add**
> add($body)

Add a new script



### Example
```php
<?php
use Apiida\Nexus\Client\Model\ScriptXO;require_once(__DIR__ . '/vendor/autoload.php');
$apiInstance = new Apiida\Nexus\Client\Api\ScriptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new ScriptXO(); // \Swagger\Client\Model\ScriptXO | 

try {
    $apiInstance->add($body);
} catch (Exception $e) {
    echo 'Exception when calling ScriptApi->add: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ScriptXO**](../Model/ScriptXO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browse**
> \Swagger\Client\Model\ScriptXO[] browse()

List all stored scripts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Apiida\Nexus\Client\Api\ScriptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->browse();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptApi->browse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ScriptXO[]**](../Model/ScriptXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($name)

Delete stored script by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Apiida\Nexus\Client\Api\ScriptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 

try {
    $apiInstance->delete($name);
} catch (Exception $e) {
    echo 'Exception when calling ScriptApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edit**
> edit($name, $body)

Update stored script by name



### Example
```php
<?php
use Apiida\Nexus\Client\Model\ScriptXO;require_once(__DIR__ . '/vendor/autoload.php');
$apiInstance = new Apiida\Nexus\Client\Api\ScriptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$body = new ScriptXO(); // \Swagger\Client\Model\ScriptXO | 

try {
    $apiInstance->edit($name, $body);
} catch (Exception $e) {
    echo 'Exception when calling ScriptApi->edit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **body** | [**\Swagger\Client\Model\ScriptXO**](../Model/ScriptXO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **read**
> \Swagger\Client\Model\ScriptXO read($name)

Read stored script by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Apiida\Nexus\Client\Api\ScriptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 

try {
    $result = $apiInstance->read($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptApi->read: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |

### Return type

[**\Swagger\Client\Model\ScriptXO**](../Model/ScriptXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **run1**
> \Swagger\Client\Model\ScriptResultXO run1($name, $body)

Run stored script by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Apiida\Nexus\Client\Api\ScriptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->run1($name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptApi->run1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ScriptResultXO**](../Model/ScriptResultXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

