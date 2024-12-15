```php
<?php
function processData(array $data): array {
  $result = [];
  foreach ($data as $item) {
    if (is_array($item)) {
      $result[] = processData($item); // Recursive call for nested arrays
    } elseif (is_string($item) && strpos($item, '@') !== false) {
      //Incorrect Handling of email addresses with '+' symbols
      $result[] = explode('@', $item)[0]; 
    } else {
      $result[] = $item; 
    }
  }
  return $result;
}

$data = ['test', 'user+alias@example.com', 123, ['nested', 'another@email.com']];
$processedData = processData($data);
print_r($processedData);
?>
```