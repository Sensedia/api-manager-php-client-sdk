# Swagger\Client\DevelopersApi

All URIs are relative to *https://localhost/api-manager/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateDeveloper1**](DevelopersApi.md#createOrUpdateDeveloper1) | **PUT** /developers/{login} | Create or update developer
[**developersCount1**](DevelopersApi.md#developersCount1) | **GET** /developers/count | Retrieve developers total
[**removeDeveloper1**](DevelopersApi.md#removeDeveloper1) | **DELETE** /developers/{login} | Delete developer
[**retriveChangeLogByUsername1**](DevelopersApi.md#retriveChangeLogByUsername1) | **GET** /developers/{username}/changelog | Retrive audit developer per username
[**retriveDeveloperByLogin1**](DevelopersApi.md#retriveDeveloperByLogin1) | **GET** /developers/{login} | Retrive developer per Login
[**retriveDevelopers1**](DevelopersApi.md#retriveDevelopers1) | **GET** /developers | Retrive developers


# **createOrUpdateDeveloper1**
> \Swagger\Client\Model\Developer createOrUpdateDeveloper1($login, $bean, $sensedia_auth)

Create or update developer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DevelopersApi();
$login = "login_example"; // string | Developer Login
$bean = new \Swagger\Client\Model\Developer(); // \Swagger\Client\Model\Developer | bean
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->createOrUpdateDeveloper1($login, $bean, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->createOrUpdateDeveloper1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| Developer Login |
 **bean** | [**\Swagger\Client\Model\Developer**](../Model/Developer.md)| bean |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\Developer**](../Model/Developer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **developersCount1**
> int developersCount1($sensedia_auth)

Retrieve developers total

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DevelopersApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->developersCount1($sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->developersCount1: ', $e->getMessage(), PHP_EOL;
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

# **removeDeveloper1**
> removeDeveloper1($login, $sensedia_auth)

Delete developer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DevelopersApi();
$login = "login_example"; // string | Developer Login
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $api_instance->removeDeveloper1($login, $sensedia_auth);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->removeDeveloper1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| Developer Login |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retriveChangeLogByUsername1**
> \Swagger\Client\Model\ChangeLogBean[] retriveChangeLogByUsername1($username, $sensedia_auth)

Retrive audit developer per username

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DevelopersApi();
$username = "username_example"; // string | Developer username
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->retriveChangeLogByUsername1($username, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->retriveChangeLogByUsername1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Developer username |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\ChangeLogBean[]**](../Model/ChangeLogBean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retriveDeveloperByLogin1**
> \Swagger\Client\Model\Developer retriveDeveloperByLogin1($login, $sensedia_auth)

Retrive developer per Login

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DevelopersApi();
$login = "login_example"; // string | Developer Login
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->retriveDeveloperByLogin1($login, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->retriveDeveloperByLogin1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| Developer Login |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\Developer**](../Model/Developer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retriveDevelopers1**
> \Swagger\Client\Model\Developer[] retriveDevelopers1($sensedia_auth, $login_or_email, $name, $email, $actual_page, $page_size)

Retrive developers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DevelopersApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$login_or_email = "login_or_email_example"; // string | Login or E-mail
$name = "name_example"; // string | Developer Name
$email = "email_example"; // string | Developer E-mail
$actual_page = 56; // int | Number of the page in pagination. The starting page number is zero.
$page_size = 56; // int | Define the size of the returned list of developers.

try {
    $result = $api_instance->retriveDevelopers1($sensedia_auth, $login_or_email, $name, $email, $actual_page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->retriveDevelopers1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **login_or_email** | **string**| Login or E-mail | [optional]
 **name** | **string**| Developer Name | [optional]
 **email** | **string**| Developer E-mail | [optional]
 **actual_page** | **int**| Number of the page in pagination. The starting page number is zero. | [optional]
 **page_size** | **int**| Define the size of the returned list of developers. | [optional]

### Return type

[**\Swagger\Client\Model\Developer[]**](../Model/Developer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

