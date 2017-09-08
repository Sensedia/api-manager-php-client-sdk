# Swagger\Client\AccessTokensApi

All URIs are relative to *https://localhost/api-manager/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accessTokenCount1**](AccessTokensApi.md#accessTokenCount1) | **GET** /access-tokens/count | Retrieve access token total
[**createAccessToken1**](AccessTokensApi.md#createAccessToken1) | **POST** /access-tokens | Create a new access token
[**getAccessToken1**](AccessTokensApi.md#getAccessToken1) | **GET** /access-tokens | Find access token list by filters
[**getChangeLogByAccessTokenId1**](AccessTokensApi.md#getChangeLogByAccessTokenId1) | **GET** /access-tokens/{id}/changelog | Retrive changelog per access token id
[**getTokenByCode1**](AccessTokensApi.md#getTokenByCode1) | **GET** /access-tokens/{code} | Find access token by code
[**removeAccessToken1**](AccessTokensApi.md#removeAccessToken1) | **DELETE** /access-tokens/{id} | Remove a access token
[**updateAccesstoken1**](AccessTokensApi.md#updateAccesstoken1) | **PUT** /access-tokens/{id} | Update a access token
[**validatePartialAccessToken1**](AccessTokensApi.md#validatePartialAccessToken1) | **POST** /access-tokens/validate | Validate partial access token


# **accessTokenCount1**
> int accessTokenCount1($sensedia_auth)

Retrieve access token total

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccessTokensApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->accessTokenCount1($sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->accessTokenCount1: ', $e->getMessage(), PHP_EOL;
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

# **createAccessToken1**
> \Swagger\Client\Model\AccessToken createAccessToken1($sensedia_auth, $bean)

Create a new access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccessTokensApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$bean = new \Swagger\Client\Model\AccessToken(); // \Swagger\Client\Model\AccessToken | Access token json to create a new access token.

try {
    $result = $api_instance->createAccessToken1($sensedia_auth, $bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->createAccessToken1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **bean** | [**\Swagger\Client\Model\AccessToken**](../Model/AccessToken.md)| Access token json to create a new access token. | [optional]

### Return type

[**\Swagger\Client\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessToken1**
> \Swagger\Client\Model\AccessToken[] getAccessToken1($sensedia_auth, $code, $owner, $status, $expires_in, $refresh_token, $scope, $keyword, $actual_page, $page_size, $auth_ids, $begin_date, $end_date, $extra_fields)

Find access token list by filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccessTokensApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$code = "code_example"; // string | code
$owner = "owner_example"; // string | owner
$status = "status_example"; // string | staus(ACTIVE, REVOKED, EXPIRED)
$expires_in = 789; // int | Expires in millisecond
$refresh_token = "refresh_token_example"; // string | Refresh code
$scope = "scope_example"; // string | Scope
$keyword = "keyword_example"; // string | Keyword to find between code or owner
$actual_page = 56; // int | Number of the page in pagination. The starting page number is zero.
$page_size = 56; // int | Define the size of the returned list of developers.
$auth_ids = "auth_ids_example"; // string | Id access token separated by space. Ex:(1 3 6 8)
$begin_date = "begin_date_example"; // string | Begin date
$end_date = "end_date_example"; // string | End date
$extra_fields = "extra_fields_example"; // string | Extra field separated by comma

try {
    $result = $api_instance->getAccessToken1($sensedia_auth, $code, $owner, $status, $expires_in, $refresh_token, $scope, $keyword, $actual_page, $page_size, $auth_ids, $begin_date, $end_date, $extra_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->getAccessToken1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **code** | **string**| code | [optional]
 **owner** | **string**| owner | [optional]
 **status** | **string**| staus(ACTIVE, REVOKED, EXPIRED) | [optional]
 **expires_in** | **int**| Expires in millisecond | [optional]
 **refresh_token** | **string**| Refresh code | [optional]
 **scope** | **string**| Scope | [optional]
 **keyword** | **string**| Keyword to find between code or owner | [optional]
 **actual_page** | **int**| Number of the page in pagination. The starting page number is zero. | [optional]
 **page_size** | **int**| Define the size of the returned list of developers. | [optional]
 **auth_ids** | **string**| Id access token separated by space. Ex:(1 3 6 8) | [optional]
 **begin_date** | **string**| Begin date | [optional]
 **end_date** | **string**| End date | [optional]
 **extra_fields** | **string**| Extra field separated by comma | [optional]

### Return type

[**\Swagger\Client\Model\AccessToken[]**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeLogByAccessTokenId1**
> \Swagger\Client\Model\ChangeLogBean[] getChangeLogByAccessTokenId1($id, $sensedia_auth)

Retrive changelog per access token id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccessTokensApi();
$id = 789; // int | Access token id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->getChangeLogByAccessTokenId1($id, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->getChangeLogByAccessTokenId1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Access token id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\ChangeLogBean[]**](../Model/ChangeLogBean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenByCode1**
> \Swagger\Client\Model\AccessToken getTokenByCode1($code, $sensedia_auth)

Find access token by code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccessTokensApi();
$code = "code_example"; // string | Code
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->getTokenByCode1($code, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->getTokenByCode1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeAccessToken1**
> removeAccessToken1($id, $sensedia_auth)

Remove a access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccessTokensApi();
$id = "id_example"; // string | App id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $api_instance->removeAccessToken1($id, $sensedia_auth);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->removeAccessToken1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| App id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccesstoken1**
> \Swagger\Client\Model\AccessTokenResponse updateAccesstoken1($id, $sensedia_auth, $bean)

Update a access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccessTokensApi();
$id = "id_example"; // string | Access token id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$bean = new \Swagger\Client\Model\AccessToken(); // \Swagger\Client\Model\AccessToken | Access token json to update a access token.

try {
    $result = $api_instance->updateAccesstoken1($id, $sensedia_auth, $bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->updateAccesstoken1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Access token id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **bean** | [**\Swagger\Client\Model\AccessToken**](../Model/AccessToken.md)| Access token json to update a access token. | [optional]

### Return type

[**\Swagger\Client\Model\AccessTokenResponse**](../Model/AccessTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validatePartialAccessToken1**
> object validatePartialAccessToken1($sensedia_auth, $bean)

Validate partial access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccessTokensApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$bean = new \Swagger\Client\Model\AccessToken(); // \Swagger\Client\Model\AccessToken | Access token json to validate a access token.

try {
    $result = $api_instance->validatePartialAccessToken1($sensedia_auth, $bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->validatePartialAccessToken1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **bean** | [**\Swagger\Client\Model\AccessToken**](../Model/AccessToken.md)| Access token json to validate a access token. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

