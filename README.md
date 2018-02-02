## Библиотека для работы с кредитным брокером PosCredit

[![License](https://poser.pugx.org/axelpal/poscredit/license)](https://packagist.org/packages/axelpal/poscredit)
[![Dependency Status](https://www.versioneye.com/user/projects/5a74314f0fb24f20ef856f1b/badge.svg?style=flat)](https://www.versioneye.com/user/projects/5a74314f0fb24f20ef856f1b)
[![Latest Stable Version](https://poser.pugx.org/axelpal/poscredit/v/stable)](https://packagist.org/packages/axelpal/poscredit)
[![Total Downloads](https://poser.pugx.org/axelpal/poscredit/downloads)](https://packagist.org/packages/axelpal/poscredit)

Документация v2.7 от 01 февраля 2018 г: https://api.b2pos.ru/loan/manual/full/

### Инициализация сервиса
```php
$loanService = new LoanService();
```

### Проверка статуса заявки
```php
$statusRequest = new StatusOptyRequest($userId, $userToken, $profileId);
$response = $loanService->statusOpty($statusRequest);
```

### Проверка статуса заявки для Интернет-магазина
```php
$statusRequest = new StatusSelectedOptyRequest($userId, $userToken, $orderId, $profileId);
$response = $loanService->statusSelectedOpty($statusRequest);
```