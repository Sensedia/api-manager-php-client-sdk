# Swagger\Client\AppsApi

All URIs are relative to *https://localhost/api-manager/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appsCount1**](AppsApi.md#appsCount1) | **GET** /apps/count | Retrieve App total
[**createApp1**](AppsApi.md#createApp1) | **POST** /apps | Create a new app
[**getAppTokenByAppGallery1**](AppsApi.md#getAppTokenByAppGallery1) | **GET** /apps/gallery | Return all apps
[**getAppTokenByFilter1**](AppsApi.md#getAppTokenByFilter1) | **GET** /apps | Find app list by filters
[**getAppTokenById1**](AppsApi.md#getAppTokenById1) | **GET** /apps/{code} | Find app by code
[**getChangeLogByAppId1**](AppsApi.md#getChangeLogByAppId1) | **GET** /apps/{code}/changelog | Retrive changelog per app id
[**removeApp1**](AppsApi.md#removeApp1) | **DELETE** /apps/{code} | Delete a app
[**updateApp1**](AppsApi.md#updateApp1) | **PUT** /apps/{id} | Update a app
[**validatePartialApp1**](AppsApi.md#validatePartialApp1) | **POST** /apps/validate | Validate partial app


# **appsCount1**
> int appsCount1($sensedia_auth)

Retrieve App total

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->appsCount1($sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsCount1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createApp1**
> \Swagger\Client\Model\APPResponse createApp1($sensedia_auth, $app_token_bean)

Create a new app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$app_token_bean = new \Swagger\Client\Model\APP(); // \Swagger\Client\Model\APP | App json to create a new app.

try {
    $result = $api_instance->createApp1($sensedia_auth, $app_token_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->createApp1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **app_token_bean** | [**\Swagger\Client\Model\APP**](../Model/APP.md)| App json to create a new app. | [optional]

### Return type

[**\Swagger\Client\Model\APPResponse**](../Model/APPResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppTokenByAppGallery1**
> \Swagger\Client\Model\APP[] getAppTokenByAppGallery1($sensedia_auth)

Return all apps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->getAppTokenByAppGallery1($sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getAppTokenByAppGallery1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\APP[]**](../Model/APP.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppTokenByFilter1**
> \Swagger\Client\Model\APP[] getAppTokenByFilter1($sensedia_auth, $client_id, $name, $keyword, $status, $developer, $actual_page, $page_size, $app_ids, $begin_date, $end_date, $extra_fields)

Find app list by filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$client_id = "client_id_example"; // string | clientId
$name = "name_example"; // string | name
$keyword = "keyword_example"; // string | keyword
$status = "status_example"; // string | status
$developer = "developer_example"; // string | developer
$actual_page = 56; // int | actualPage
$page_size = 56; // int | pageSize
$app_ids = "app_ids_example"; // string | appIds
$begin_date = "begin_date_example"; // string | beginDate
$end_date = "end_date_example"; // string | endDate
$extra_fields = "extra_fields_example"; // string | extraFields

try {
    $result = $api_instance->getAppTokenByFilter1($sensedia_auth, $client_id, $name, $keyword, $status, $developer, $actual_page, $page_size, $app_ids, $begin_date, $end_date, $extra_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getAppTokenByFilter1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **client_id** | **string**| clientId | [optional]
 **name** | **string**| name | [optional]
 **keyword** | **string**| keyword | [optional]
 **status** | **string**| status | [optional]
 **developer** | **string**| developer | [optional]
 **actual_page** | **int**| actualPage | [optional]
 **page_size** | **int**| pageSize | [optional]
 **app_ids** | **string**| appIds | [optional]
 **begin_date** | **string**| beginDate | [optional]
 **end_date** | **string**| endDate | [optional]
 **extra_fields** | **string**| extraFields | [optional]

### Return type

[**\Swagger\Client\Model\APP[]**](../Model/APP.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppTokenById1**
> \Swagger\Client\Model\APP getAppTokenById1($code, $sensedia_auth, $limit_access_tokens, $code_access_tokens, $filter_access_tokens)

Find app by code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$code = "code_example"; // string | Client ID
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$limit_access_tokens = 56; // int | Limit the access token return
$code_access_tokens = "code_access_tokens_example"; // string | Code access token
$filter_access_tokens = true; // bool | Filter access tokens

try {
    $result = $api_instance->getAppTokenById1($code, $sensedia_auth, $limit_access_tokens, $code_access_tokens, $filter_access_tokens);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getAppTokenById1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Client ID |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **limit_access_tokens** | **int**| Limit the access token return | [optional]
 **code_access_tokens** | **string**| Code access token | [optional]
 **filter_access_tokens** | **bool**| Filter access tokens | [optional]

### Return type

[**\Swagger\Client\Model\APP**](../Model/APP.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeLogByAppId1**
> \Swagger\Client\Model\ChangeLogBean[] getChangeLogByAppId1($id, $sensedia_auth)

Retrive changelog per app id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$id = 789; // int | id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->getChangeLogByAppId1($id, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getChangeLogByAppId1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\ChangeLogBean[]**](../Model/ChangeLogBean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeApp1**
> removeApp1($id, $sensedia_auth)

Delete a app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$id = "id_example"; // string | id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $api_instance->removeApp1($id, $sensedia_auth);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->removeApp1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApp1**
> \Swagger\Client\Model\APPResponse updateApp1($id, $app_token_bean, $sensedia_auth)

Update a app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$id = "id_example"; // string | App json to update a app.
$app_token_bean = new \Swagger\Client\Model\APP(); // \Swagger\Client\Model\APP | appTokenBean
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->updateApp1($id, $app_token_bean, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->updateApp1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| App json to update a app. |
 **app_token_bean** | [**\Swagger\Client\Model\APP**](../Model/APP.md)| appTokenBean |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\APPResponse**](../Model/APPResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validatePartialApp1**
> object validatePartialApp1($sensedia_auth, $app_token_bean)

Validate partial app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AppsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$app_token_bean = new \Swagger\Client\Model\APP(); // \Swagger\Client\Model\APP | App json to validate app

try {
    $result = $api_instance->validatePartialApp1($sensedia_auth, $app_token_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->validatePartialApp1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **app_token_bean** | [**\Swagger\Client\Model\APP**](../Model/APP.md)| App json to validate app | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

