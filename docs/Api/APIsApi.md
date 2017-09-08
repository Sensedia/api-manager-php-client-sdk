# Swagger\Client\APIsApi

All URIs are relative to *https://localhost/api-manager/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneApi1**](APIsApi.md#cloneApi1) | **POST** /apis/{id}/clone | Clone a API
[**createApi1**](APIsApi.md#createApi1) | **POST** /apis | Create a new API
[**createNewVersion1**](APIsApi.md#createNewVersion1) | **POST** /apis/{id}/versions | Create new version
[**getApiById1**](APIsApi.md#getApiById1) | **GET** /apis/{apiId} | Find API by id
[**getApis1**](APIsApi.md#getApis1) | **GET** /apis | Return all APIs
[**getChangeLogByApiId1**](APIsApi.md#getChangeLogByApiId1) | **GET** /apis/{id}/changelog | Retrive changelog per API id
[**getLastRevisionByApi1**](APIsApi.md#getLastRevisionByApi1) | **GET** /apis/{id}/revisions | Find last revision by API id
[**getVersionsByApi1**](APIsApi.md#getVersionsByApi1) | **GET** /apis/{id}/versions | Find version by API id
[**removeApi1**](APIsApi.md#removeApi1) | **DELETE** /apis/{id} | Delete a API
[**removeLinkEnvironmentWithApi1**](APIsApi.md#removeLinkEnvironmentWithApi1) | **DELETE** /apis/{id}/environments/{environmentId} | Delete environment link with API
[**updateApi1**](APIsApi.md#updateApi1) | **PUT** /apis/{id} | Update a API
[**validatePartialApi1**](APIsApi.md#validatePartialApi1) | **POST** /apis/validate | Validate partial a API


# **cloneApi1**
> \Swagger\Client\Model\APIResponse cloneApi1($id, $sensedia_auth, $api_bean)

Clone a API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\APIsApi();
$id = "id_example"; // string | API id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$api_bean = new \Swagger\Client\Model\API(); // \Swagger\Client\Model\API | API json to update a api

try {
    $result = $api_instance->cloneApi1($id, $sensedia_auth, $api_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->cloneApi1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| API id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **api_bean** | [**\Swagger\Client\Model\API**](../Model/API.md)| API json to update a api | [optional]

### Return type

[**\Swagger\Client\Model\APIResponse**](../Model/APIResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createApi1**
> \Swagger\Client\Model\APIResponse createApi1($sensedia_auth, $bean)

Create a new API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\APIsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$bean = new \Swagger\Client\Model\APICreateBean(); // \Swagger\Client\Model\APICreateBean | API json to create a API

try {
    $result = $api_instance->createApi1($sensedia_auth, $bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->createApi1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **bean** | [**\Swagger\Client\Model\APICreateBean**](../Model/APICreateBean.md)| API json to create a API | [optional]

### Return type

[**\Swagger\Client\Model\APIResponse**](../Model/APIResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewVersion1**
> \Swagger\Client\Model\APIResponse createNewVersion1($id, $sensedia_auth, $api_bean)

Create new version

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\APIsApi();
$id = "id_example"; // string | API id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$api_bean = new \Swagger\Client\Model\API(); // \Swagger\Client\Model\API | API json to update a api

try {
    $result = $api_instance->createNewVersion1($id, $sensedia_auth, $api_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->createNewVersion1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| API id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **api_bean** | [**\Swagger\Client\Model\API**](../Model/API.md)| API json to update a api | [optional]

### Return type

[**\Swagger\Client\Model\APIResponse**](../Model/APIResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiById1**
> \Swagger\Client\Model\API getApiById1($api_id, $sensedia_auth, $filter)

Find API by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\APIsApi();
$api_id = "api_id_example"; // string | API id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$filter = "filter_example"; // string | Filter type searched

try {
    $result = $api_instance->getApiById1($api_id, $sensedia_auth, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->getApiById1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_id** | **string**| API id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **filter** | **string**| Filter type searched | [optional]

### Return type

[**\Swagger\Client\Model\API**](../Model/API.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApis1**
> \Swagger\Client\Model\API[] getApis1($sensedia_auth, $private_api, $filter)

Return all APIs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\APIsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$private_api = true; // bool | Private API
$filter = "filter_example"; // string | Filter type searched

try {
    $result = $api_instance->getApis1($sensedia_auth, $private_api, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->getApis1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **private_api** | **bool**| Private API | [optional]
 **filter** | **string**| Filter type searched | [optional]

### Return type

[**\Swagger\Client\Model\API[]**](../Model/API.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeLogByApiId1**
> \Swagger\Client\Model\ChangeLog[] getChangeLogByApiId1($id, $sensedia_auth)

Retrive changelog per API id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\APIsApi();
$id = 789; // int | API id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->getChangeLogByApiId1($id, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->getChangeLogByApiId1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| API id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\ChangeLog[]**](../Model/ChangeLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLastRevisionByApi1**
> \Swagger\Client\Model\RevisionBean getLastRevisionByApi1($id, $sensedia_auth)

Find last revision by API id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\APIsApi();
$id = 789; // int | id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->getLastRevisionByApi1($id, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->getLastRevisionByApi1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\RevisionBean**](../Model/RevisionBean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVersionsByApi1**
> \Swagger\Client\Model\API[] getVersionsByApi1($id, $sensedia_auth)

Find version by API id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\APIsApi();
$id = "id_example"; // string | API id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->getVersionsByApi1($id, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->getVersionsByApi1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| API id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\API[]**](../Model/API.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeApi1**
> \Swagger\Client\Model\ResponseEntity removeApi1($id, $sensedia_auth)

Delete a API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\APIsApi();
$id = "id_example"; // string | API id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->removeApi1($id, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->removeApi1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| API id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeLinkEnvironmentWithApi1**
> \Swagger\Client\Model\ResponseEntity removeLinkEnvironmentWithApi1($id, $environment_id, $sensedia_auth)

Delete environment link with API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\APIsApi();
$id = "id_example"; // string | id
$environment_id = "environment_id_example"; // string | environmentId
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->removeLinkEnvironmentWithApi1($id, $environment_id, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->removeLinkEnvironmentWithApi1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |
 **environment_id** | **string**| environmentId |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApi1**
> \Swagger\Client\Model\APIResponse updateApi1($id, $sensedia_auth, $api_bean)

Update a API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\APIsApi();
$id = "id_example"; // string | API id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$api_bean = new \Swagger\Client\Model\API(); // \Swagger\Client\Model\API | API json to update a api

try {
    $result = $api_instance->updateApi1($id, $sensedia_auth, $api_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->updateApi1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| API id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **api_bean** | [**\Swagger\Client\Model\API**](../Model/API.md)| API json to update a api | [optional]

### Return type

[**\Swagger\Client\Model\APIResponse**](../Model/APIResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validatePartialApi1**
> \Swagger\Client\Model\ResponseEntity validatePartialApi1($sensedia_auth, $bean)

Validate partial a API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\APIsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$bean = new \Swagger\Client\Model\API(); // \Swagger\Client\Model\API | API json to validate a API

try {
    $result = $api_instance->validatePartialApi1($sensedia_auth, $bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIsApi->validatePartialApi1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **bean** | [**\Swagger\Client\Model\API**](../Model/API.md)| API json to validate a API | [optional]

### Return type

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

