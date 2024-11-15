<?php

namespace App\Factories;

use PDO;
use Psr\Container\ContainerInterface;

class PDOFactory
{
    public function __invoke(ContainerInterface $container): PDO
    {
        $settings = $container->get('settings')['db'];

        $db = new PDO(
          $settings['host'] . $settings['name'],
          $settings['user'],
          $settings['password']
        );

        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $db;
    }
}