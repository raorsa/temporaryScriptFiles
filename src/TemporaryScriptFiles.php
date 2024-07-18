<?php

namespace Raorsa\TemporaryScriptFiles;

use Illuminate\Support\Facades\Session;
use Raorsa\RWFileCache\RWFileCache;
use function route as routeAlias;

class TemporaryScriptFiles
{
    private RWFileCache $cache;

    public function __construct()
    {
        $this->cache = new RWFileCache();
        $this->cache->changeConfig(config('temporary-script-files.cache'));
    }

    public function setScriptFile(string $content, bool $absolute = false): string
    {
        $id = md5(Session::getId() . md5($content));
        $this->cache->set($id, $content, config('temporary-script-files.max_time_life'));
        return routeAlias('temporary-script-files.getScriptFile', ['id' => $id], $absolute);
    }


    public function getScriptFile(string $id): string
    {
        $content = $this->cache->get($id) ?? '';
        $this->cache->delete($id);
        return $content;
    }
}
