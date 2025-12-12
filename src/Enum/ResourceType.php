<?php
// src/Enum/ResourceType.php
namespace App\Enum;
enum ResourceType: string {
    case SDK = 'SDK';
    case SAMPLE = 'SAMPLE';
    case TOOL = 'TOOL';
    case DOC = 'DOC';
}
