<?php
// src/Enum/NormativeLevel.php
namespace App\Enum;

/**
 * Requirement levels per RFC 2119 / BCP 14 (UPPERCASE terms).
 */
enum NormativeLevel: string {
    case MUST = 'MUST';
    case SHOULD = 'SHOULD';
    case MAY = 'MAY';
}
