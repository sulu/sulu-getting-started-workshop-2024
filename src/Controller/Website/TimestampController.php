<?php

declare(strict_types=1);

namespace App\Controller\Website;

use Sulu\Bundle\HttpCacheBundle\Cache\SuluHttpCache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TimestampController extends AbstractController
{
    public function now()
    {
        $response = new Response('Now: ' . \microtime());
        $response->setPublic();
        $response->headers->add([SuluHttpCache::HEADER_REVERSE_PROXY_TTL => 5]);

        return $response;
    }
}
