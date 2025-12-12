<?php
// src/Enum/ContractArtifactType.php
namespace App\Enum;
enum ContractArtifactType: string {
    case RPC = 'RPC';
    case EVENT = 'EVENT';
    case POLICY = 'POLICY';
    case DOC = 'DOC';
}
