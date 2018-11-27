<?php

namespace Kanboard\Plugin\EncryptedContent\Schema;

use PDO;

const VERSION = 1;

function version_1(PDO $pdo)
{
    $pdo->exec("CREATE TABLE IF NOT EXISTS task_has_encrypted_content (
        name INTEGER PRIMARY KEY,
        task_id INTEGER NOT NULL,
        value TEXT NOT NULL,
        changed_by INTEGER NOT NULL DEFAULT 0,
        changed_on INTEGER NOT NULL DEFAULT 0
      )
    ");
}
