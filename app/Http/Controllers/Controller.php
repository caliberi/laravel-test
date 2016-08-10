<?php

namespace app\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    /**
     * clean url, strips it to domain level
     * @param  STRING $url URI
     * @return STRING cleaned URI
     */
    public function stripLinkToDomain($url)
    {
        $domain = preg_replace('#^http(s)?://#', '', $url);
        $domain = preg_replace('#^www\.#', '', $domain);
        $parse = explode('/', $domain);
        $domain = $parse[0];
        $domain = str_replace(' ', '', $domain);
        $domain = preg_replace('/\s+/', '', $domain);

        return $domain;
    }
}
