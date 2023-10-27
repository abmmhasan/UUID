<?php

namespace AbmmHasan\UUID;

use Exception;

if (!function_exists('AbmmHasan\UUID\uuid1')) {
    /**
     * Generates a version 1 UUID
     *
     * @param string|null $node The node value to use in the UUID.
     * @return string The generated UUID.
     * @throws Exception
     */
    function uuid1(string $node = null): string
    {
        return GenerateUuid::v1($node);
    }
}

if (!function_exists('AbmmHasan\UUID\uuid3')) {
    /**
     * Generate a Version 3 UUID.
     *
     * @param string $string The string to generate the UUID from.
     * @param string $namespace The namespace to use for the UUID generation. Defaults to 'x500'.
     * @return string The generated UUID.
     * @throws Exception
     */
    function uuid3(string $string, string $namespace = 'x500'): string
    {
        return GenerateUuid::v3($string, $namespace);
    }
}

if (!function_exists('AbmmHasan\UUID\uuid4')) {
    /**
     * Generates a version 4 UUID.
     *
     * @return string The generated UUID.
     * @throws Exception
     */
    function uuid4(): string
    {
        return GenerateUuid::v4();
    }
}

if (!function_exists('AbmmHasan\UUID\uuid5')) {
    /**
     * Generate a Version 5 UUID.
     *
     * @param string $string The string to generate the UUID from.
     * @param string $namespace The namespace to use for the UUID generation. Defaults to 'x500'.
     * @return string The generated UUID.
     * @throws Exception
     */
    function uuid5(string $string, string $namespace = 'x500'): string
    {
        return GenerateUuid::v5($string, $namespace);
    }
}
