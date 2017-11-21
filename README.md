# php-sdk
PHP SDK for Aviation Edge API

#### Example
```php
<?

include 'aviationEdge.php';

$ae = new aviationEdge('enter_api_key');

$result = $ae->api('cityDatabase',array('codeIataCity' => 'AAA'));

echo ("<pre>");

print_r( $result);

echo ("</pre>");

?>
```
