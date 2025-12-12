<?php
// src/Enum/RegistryEntryType.php
namespace App\Enum;
enum RegistryEntryType: string {
    case EVENT_EXTENSION = 'EVENT_EXTENSION';
    case METRIC = 'METRIC';
    case ERROR_CODE = 'ERROR_CODE';
    case CONTRACT = 'CONTRACT';
    case CONFIG_KEY = 'CONFIG_KEY';
    case ROLE = 'ROLE';
    case AUDIT_EVENT = 'AUDIT_EVENT';
}
