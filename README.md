sdk اتصال به api پرداخت آقای پرداخت

## نحوه نصب

نصب توسط کامپوزر

```bash
composer require aqayepardakht/php-sdk
```

##  نحوه استفاده سریع

ساخت فاکتور و ارسال به درگاه بانکی

```php
require 'vendor/autoload.php';

try {       
    $pay = Aqayepardakht::gateway('Your Pin')
                ->invoice(['amount' => 500])
                ->callback('Your Callback')
                ->create();

    $traceCode = $pay->getTraceCode(); // دریافت کد رهگیری
    $pay->start(); // ریدایرکت کاربر به صفحه پرداخت
} catch (Exception $e) { 
    echo $e->getCode().' : '.$e->getMessage();
}
```
تایید تراکنش پس از بازگشت از صفحه بانکی

```php
require 'vendor/autoload.php';

$trackingNumber = $_POST['tracking_number']; // کد رهگیری بانکی
$traceCode      = $_POST['transid']; // کد رهگیری برای تایید تراکنش
$api            = new Aqayepardakht\PhpSdk\Api();

try {
    $pay = Aqayepardakht::gateway('sandbox')
                ->invoice(['amount' => 1100])
                ->verify($traceCode);
} catch (Exception $e) { 
    echo $e->getCode().' : '.$e->getMessage();
}
```
