<?php
// src/Enum/ContractArtifactFormat.php
namespace App\Enum;
enum ContractArtifactFormat: string {
    case PROTOBUF = 'PROTOBUF';
    case OPENAPI = 'OPENAPI';
    case ASYNCAPI = 'ASYNCAPI';
    case OPA = 'OPA';
    case MARKDOWN = 'MARKDOWN';
    case OTHER = 'OTHER';
}
