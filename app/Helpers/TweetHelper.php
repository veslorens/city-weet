<?php

namespace App\Helpers;

use Cache;
use Carbon\Carbon;

class TweetHelper {

    /**
     * @desc   Get cached results
     *
     * @param  String $location - The city or location name
     * @return Array | Null
     */
    public function getCache($location) {
        return Cache::get($this->generateKey($location));
    }

    /**
     * @desc   Set cache to results
     *
     * @param  String $location - The city or location name
     * @param  Mixed $value - Items to be cached
     * @return Void
     */
    public function setCache(string $location, $items) {
        $expiration = Carbon::now()->addSeconds(config('result.TTL'));
        Cache::add($this->generateKey($location), $items, $expiration);
    }

    /**
     * @desc   Generate encrypted key
     *
     * @param  String $item - Any string value item
     * @return String
     */
    public function generateKey(string $item) {
        return md5(strtolower($item));
    }

}
