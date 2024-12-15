```php
<?php
function processData(array $data): array {
  $result = [];
  foreach ($data as $item) {
    if (is_array($item)) {
      $result[] = processData($item); // Recursive call for nested arrays
    } elseif (is_string($item) && filter_var($item, FILTER_VALIDATE_EMAIL)) {
      //Properly handles email addresses using filter_var
      $result[] = $item; 
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