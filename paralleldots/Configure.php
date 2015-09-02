<?php
namespace Configure;
Class Configure
{
    public static function loadConfiguration() {
        $config = array(
            'default_host' => 'http://apis.paralleldots.com',
            'api_key' => false
        );
        if (array_key_exists('HOME', $_ENV)) {
            $globalPath = $_ENV['HOME'] . '/.paralleldots';
            $config = Configure::loadConfigFile($globalPath, $config);
        }
        $localPath = getcwd() . '/.paralleldots';
        $config = Configure::loadConfigFile($localPath, $config);
        $config = Configure::loadEnvironmentVars($config);
        return $config;
    }
    public static function loadEnvironmentVars($paralleldots_config) {
        if (getenv('PARALLELDOTS_API_KEY')) {
            $paralleldots_config['api_key'] = getenv('PARALLELDOTS_API_KEY');
        }
        return $paralleldots_config;
    }
    public static function loadConfigFile($configPath, $config) {
        if (file_exists($configPath)) {
            $parsed_config = parse_ini_file($configPath, true);
            if (!$parsed_config) {
                return $config;
            }
            $authDefined = (
                array_key_exists('auth', $parsed_config) &&
                array_key_exists('api_key', $parsed_config['auth'])
            );
            if ($authDefined) {
                $config['api_key'] = $parsed_config['auth']['api_key'];
            }
        }
        return $config;
    }
}