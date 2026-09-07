$this->load->driver('cache');

$key = 'changelog_' . md5($view);

$data = $this->cache->get($key);

if ($data !== false) {
    exit('CACHE HIT');
}

$this->cache->save($key, ['test' => 'hello'], 120);

exit('CACHE CREATED');
$config['cache_driver'] = 'file';
$config['cache_path']   = APPPATH . 'cache/';
