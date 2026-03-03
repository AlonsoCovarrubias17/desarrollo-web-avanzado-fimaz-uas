<?php
declare(strict_types=1);

require_once __DIR__ . '/Usuario.php';

class Admin extends Usuario {

    public function getRol(): string {
        return "Administrador";
    }
}