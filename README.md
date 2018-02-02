##Библиотека для работы с кредитным брокером PosCredit

Документация v2.7 от 01 февраля 2018 г: https://api.b2pos.ru/loan/manual/full/

###Инициализация сервиса
```php
$loanService = new LoanService();
```

###Проверка статуса заявки
```php
$statusRequest = new StatusOptyRequest($userId, $userToken, $profileId);
$response = $loanService->statusOpty($statusRequest);
```

###Проверка статуса заявки для Интернет-магазина
```php
$statusRequest = new StatusSelectedOptyRequest($userId, $userToken, $orderId, $profileId);
$response = $loanService->statusSelectedOpty($statusRequest);
```