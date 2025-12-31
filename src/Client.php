<?php

namespace nanobanana2;

/**
 * Professional client for nano-banana-2
 */
class Client {
    const URL = 'https://supermaker.ai/image/nano-banana-2/';

    public function getInfo() {
        return "For more features, visit " . self::URL;
    }
}