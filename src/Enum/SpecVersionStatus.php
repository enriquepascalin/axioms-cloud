<?php
// src/Enum/SpecVersionStatus.php
namespace App\Enum;
enum SpecVersionStatus: string {
    case DRAFT = 'DRAFT';
    case STABLE = 'STABLE';
    case DEPRECATED = 'DEPRECATED';
}
