<?php

namespace AbmmHasan\UUID;

use Exception;

class GenerateUuid
{
    private static $nsList = [
        'dns' => 0,
        'url' => 1,
        'oid' => 2,
        'x500' => 3
    ];

    private static $node;

    /**
     * Generates a version 1 UUID.
     *
     * @param string|null $node The node identifier. Defaults to null.
     * @return string
     * @throws Exception
     */
    public static function v1(string $node = null): string
    {
        $time = microtime(false);
        $time = substr($time, 11) . substr($time, 2, 7);
        $time = str_pad(dechex((int)$time + 0x01b21dd213814000), 16, '0', STR_PAD_LEFT);
        $clockSeq = random_int(0, 0x3fff);
        $node = $node ?? self::getNode();
        return sprintf(
            '%08s-%04s-1%03s-%04x-%012s',
            substr($time, -8),
            substr($time, -12, 4),
            substr($time, -15, 3),
            $clockSeq | 0x8000,
            $node
        );
    }

    /**
     * Generates the v3 hash for a given string using the specified namespace.
     *
     * @param string $string The string to generate the hash for.
     * @param string $namespace The namespace to use for the hash generation. Defaults to 'x500'.
     * @return string
     * @throws Exception
     */
    public static function v3(string $string, string $namespace = 'x500'): string
    {
        $namespace = self::nsResolve($namespace);
        if (!$namespace) {
            throw new Exception('Invalid NameSpace!');
        }
        $hash = md5(hex2bin($namespace) . $string);
        return self::output(3, $hash);
    }

    /**
     * Generates a version 4 UUID string.
     *
     * @return string A version 4 UUID string.
     * @throws Exception
     */
    public static function v4(): string
    {
        $string = bin2hex(random_bytes(16));
        return self::output(4, $string);
    }

    /**
     * Generate a v5 UUID.
     *
     * @param string $string The string to generate the UUID from.
     * @param string $namespace The namespace to use for the UUID generation. Default is 'x500'.
     * @return string
     * @throws Exception
     */
    public static function v5(string $string, string $namespace = 'x500'): string
    {
        $namespace = self::nsResolve($namespace);
        if (!$namespace) {
            throw new Exception('Invalid NameSpace!');
        }
        $hash = sha1(hex2bin($namespace) . $string);
        return self::output(5, $hash);
    }

    /**
     * Generate a unique hexadecimal node (for v1).
     *
     * @return string The generated hexadecimal node.
     * @throws Exception
     */
    public static function getNode(): string
    {
        if (self::$node) {
            return self::$node;
        }
        return self::$node = sprintf(
            '%06x%06x',
            random_int(0, 0xffffff) | 0x010000,
            random_int(0, 0xffffff)
        );
    }

    /**
     * Generates a formatted string based on the given version and string.
     *
     * @param int $version The version number.
     * @param string $string The input string.
     * @return string The formatted string.
     */
    private static function output(int $version, string $string): string
    {
        $string = str_split($string, 4);
        return sprintf(
            "%08s-%04s-$version%03s-%04x-%012s",
            $string[0] . $string[1],
            $string[2],
            substr($string[3], 1, 3),
            hexdec($string[4]) & 0x3fff | 0x8000,
            $string[5] . $string[6] . $string[7]
        );
    }

    /**
     * Resolves the given namespace.
     *
     * @param string $namespace The namespace to be resolved.
     * @return mixed The resolved namespace or false if it cannot be resolved.
     */
    private static function nsResolve(string $namespace)
    {
        if (self::isValid($namespace)) {
            return str_replace('-', '', $namespace);
        }
        $namespace = str_replace(['namespace', 'ns', '_'], '', strtolower($namespace));
        if (isset(self::$nsList[$namespace])) {
            return "6ba7b81" . self::$nsList[$namespace] . "9dad11d180b400c04fd430c8";
        }
        return false;
    }

    /**
     * Check if UUID is valid
     *
     * @param string $uuid The UUID to be checked
     * @return bool
     */
    public static function isValid(string $uuid): bool
    {
        return (bool)preg_match('{^[0-9a-f]{8}(?:-[0-9a-f]{4}){3}-[0-9a-f]{12}$}Di', $uuid);
    }
}
