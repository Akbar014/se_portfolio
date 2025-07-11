<?php

/**
 * Basic CakePHP functionality.
 *
 * Core functions for including other source files, loading models and so forth.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       Cake
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Basic defines for timing functions.
 */
define('SECOND', 1);
define('MINUTE', 60);
define('HOUR', 3600);
define('DAY', 86400);
define('WEEK', 604800);
define('MONTH', 2592000);
define('YEAR', 31536000);

if (!function_exists('config')) {

    /**
     * Loads configuration files. Receives a set of configuration files
     * to load.
     * Example:
     *
     * `config('config1', 'config2');`
     *
     * @return bool Success
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#config
     */
    function config() {
        $args = func_get_args();
        $count = count($args);
        $included = 0;
        foreach ($args as $arg) {
            if (file_exists(CONFIG . $arg . '.php')) {
                include_once CONFIG . $arg . '.php';
                $included++;
            }
        }
        return $included === $count;
    }

}

if (!function_exists('debug')) {

    /**
     * Prints out debug information about given variable.
     *
     * Only runs if debug level is greater than zero.
     *
     * @param mixed $var Variable to show debug information for.
     * @param bool $showHtml If set to true, the method prints the debug data in a browser-friendly way.
     * @param bool $showFrom If set to true, the method prints from where the function was called.
     * @return void
     * @link https://book.cakephp.org/2.0/en/development/debugging.html#basic-debugging
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#debug
     */
    function debug($var, $showHtml = null, $showFrom = true) {
        if (!Configure::read('debug')) {
            return;
        }
        App::uses('Debugger', 'Utility');

        $file = '';
        $line = '';
        $lineInfo = '';
        if ($showFrom) {
            $trace = Debugger::trace(array('start' => 1, 'depth' => 2, 'format' => 'array'));
            $file = str_replace(array(CAKE_CORE_INCLUDE_PATH, ROOT), '', $trace[0]['file']);
            $line = $trace[0]['line'];
        }
        $html = <<<HTML
<div class="cake-debug-output">
%s
<pre class="cake-debug">
%s
</pre>
</div>
HTML;
        $text = <<<TEXT
%s
########## DEBUG ##########
%s
###########################

TEXT;
        $template = $html;
        if (PHP_SAPI === 'cli' || $showHtml === false) {
            $template = $text;
            if ($showFrom) {
                $lineInfo = sprintf('%s (line %s)', $file, $line);
            }
        }
        if ($showHtml === null && $template !== $text) {
            $showHtml = true;
        }
        $var = Debugger::exportVar($var, 25);
        if ($showHtml) {
            $template = $html;
            $var = h($var);
            if ($showFrom) {
                $lineInfo = sprintf('<span><strong>%s</strong> (line <strong>%s</strong>)</span>', $file, $line);
            }
        }
        printf($template, $lineInfo, $var);
    }

}

if (!function_exists('stackTrace')) {

    /**
     * Outputs a stack trace based on the supplied options.
     *
     * ### Options
     *
     * - `depth` - The number of stack frames to return. Defaults to 999
     * - `args` - Should arguments for functions be shown? If true, the arguments for each method call
     *   will be displayed.
     * - `start` - The stack frame to start generating a trace from. Defaults to 1
     *
     * @param array $options Format for outputting stack trace
     * @return void Outputs formatted stack trace.
     * @see Debugger::trace()
     */
    function stackTrace(array $options = array()) {
        if (!Configure::read('debug')) {
            return;
        }
        App::uses('Debugger', 'Utility');

        $options += array('start' => 0);
        $options['start'] ++;
        echo Debugger::trace($options);
    }

}

if (!function_exists('sortByKey')) {

    /**
     * Sorts given $array by key $sortBy.
     *
     * @param array &$array Array to sort
     * @param string $sortBy Sort by this key
     * @param string $order Sort order asc/desc (ascending or descending).
     * @param int $type Type of sorting to perform
     * @return array|null Sorted array, or null if not an array.
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#sortByKey
     */
    function sortByKey(&$array, $sortBy, $order = 'asc', $type = SORT_NUMERIC) {
        if (!is_array($array)) {
            return null;
        }
        $sa = array();
        foreach ($array as $key => $val) {
            $sa[$key] = $val[$sortBy];
        }
        if ($order === 'asc') {
            asort($sa, $type);
        } else {
            arsort($sa, $type);
        }
        $out = array();
        foreach ($sa as $key => $val) {
            $out[] = $array[$key];
        }
        return $out;
    }

}

if (!function_exists('h')) {

    /**
     * Convenience method for htmlspecialchars.
     *
     * @param string|array|object $text Text to wrap through htmlspecialchars. Also works with arrays, and objects.
     *    Arrays will be mapped and have all their elements escaped. Objects will be string cast if they
     *    implement a `__toString` method. Otherwise the class name will be used.
     * @param bool|string $double Boolean - encode existing html entities. String - character set to use when escaping.
     * @param string $charset Character set to use when escaping. Defaults to config value in 'App.encoding' or 'UTF-8'
     * @return string|array|bool|object Wrapped text, Wrapped Array or Wrapped Object.
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#h
     */
    function h($text, $double = true, $charset = null) {
        if (is_string($text)) {
            //optimize for strings
        } elseif (is_array($text)) {
            $texts = array();
            foreach ($text as $k => $t) {
                $texts[$k] = h($t, $double, $charset);
            }
            return $texts;
        } elseif (is_object($text)) {
            if (method_exists($text, '__toString')) {
                $text = (string) $text;
            } else {
                $text = '(object)' . get_class($text);
            }
        } elseif (is_bool($text)) {
            return $text;
        }

        static $defaultCharset = false;
        if ($defaultCharset === false) {
            $defaultCharset = Configure::read('App.encoding');
            if ($defaultCharset === null) {
                $defaultCharset = 'UTF-8';
            }
        }
        if (is_string($double)) {
            $charset = $double;
            $double = true;
        }
        return htmlspecialchars($text, ENT_QUOTES, ($charset) ? $charset : $defaultCharset, $double);
    }

}

if (!function_exists('pluginSplit')) {

    /**
     * Splits a dot syntax plugin name into its plugin and class name.
     * If $name does not have a dot, then index 0 will be null.
     *
     * Commonly used like `list($plugin, $name) = pluginSplit($name);`
     *
     * @param string $name The name you want to plugin split.
     * @param bool $dotAppend Set to true if you want the plugin to have a '.' appended to it.
     * @param string $plugin Optional default plugin to use if no plugin is found. Defaults to null.
     * @return array Array with 2 indexes. 0 => plugin name, 1 => class name
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#pluginSplit
     */
    function pluginSplit($name, $dotAppend = false, $plugin = null) {
        if (strpos($name, '.') !== false) {
            $parts = explode('.', $name, 2);
            if ($dotAppend) {
                $parts[0] .= '.';
            }
            return $parts;
        }
        return array($plugin, $name);
    }

}

if (!function_exists('pr')) {

    /**
     * print_r() convenience function
     *
     * In terminals this will act the same as using print_r() directly, when not run on cli
     * print_r() will wrap <PRE> tags around the output of given array. Similar to debug().
     *
     * @param mixed $var Variable to print out
     * @return void
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#pr
     * @see debug()
     */
    function pr($var, $die = null) {
        //if (Configure::read('debug') > 0) {
        $template = PHP_SAPI !== 'cli' ? '<pre>%s</pre>' : "\n%s\n";
        printf($template, print_r($var, true));
        if ($die) {
            die();
        }
        //}
    }

}

if (!function_exists('am')) {

    /**
     * Merge a group of arrays
     *
     * Accepts variable arguments. Each argument will be converted into an array and then merged.
     *
     * @return array All array parameters merged into one
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#am
     */
    function am() {
        $r = array();
        $args = func_get_args();
        foreach ($args as $a) {
            if (!is_array($a)) {
                $a = array($a);
            }
            $r = array_merge($r, $a);
        }
        return $r;
    }

}

if (!function_exists('env')) {

    /**
     * Gets an environment variable from available sources, and provides emulation
     * for unsupported or inconsistent environment variables (i.e. DOCUMENT_ROOT on
     * IIS, or SCRIPT_NAME in CGI mode). Also exposes some additional custom
     * environment information.
     *
     * @param string $key Environment variable name.
     * @return string|bool|null Environment variable setting.
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#env
     */
    function env($key) {
        if ($key === 'HTTPS') {
            if (isset($_SERVER['HTTPS'])) {
                return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
            }
            return (strpos(env('SCRIPT_URI'), 'https://') === 0);
        }

        if ($key === 'SCRIPT_NAME') {
            if (env('CGI_MODE') && isset($_ENV['SCRIPT_URL'])) {
                $key = 'SCRIPT_URL';
            }
        }

        $val = null;
        if (isset($_SERVER[$key])) {
            $val = $_SERVER[$key];
        } elseif (isset($_ENV[$key])) {
            $val = $_ENV[$key];
        } elseif (getenv($key) !== false) {
            $val = getenv($key);
        }

        if ($key === 'REMOTE_ADDR' && $val === env('SERVER_ADDR')) {
            $addr = env('HTTP_PC_REMOTE_ADDR');
            if ($addr !== null) {
                $val = $addr;
            }
        }

        if ($val !== null) {
            return $val;
        }

        switch ($key) {
            case 'DOCUMENT_ROOT':
                $name = env('SCRIPT_NAME');
                $filename = env('SCRIPT_FILENAME');
                $offset = 0;
                if (!strpos($name, '.php')) {
                    $offset = 4;
                }
                return substr($filename, 0, -(strlen($name) + $offset));
            case 'PHP_SELF':
                return str_replace(env('DOCUMENT_ROOT'), '', env('SCRIPT_FILENAME'));
            case 'CGI_MODE':
                return (PHP_SAPI === 'cgi');
            case 'HTTP_BASE':
                $host = env('HTTP_HOST');
                $parts = explode('.', $host);
                $count = count($parts);

                if ($count === 1) {
                    return '.' . $host;
                } elseif ($count === 2) {
                    return '.' . $host;
                } elseif ($count === 3) {
                    $gTLD = array(
                        'aero',
                        'asia',
                        'biz',
                        'cat',
                        'com',
                        'coop',
                        'edu',
                        'gov',
                        'info',
                        'int',
                        'jobs',
                        'mil',
                        'mobi',
                        'museum',
                        'name',
                        'net',
                        'org',
                        'pro',
                        'tel',
                        'travel',
                        'xxx'
                    );
                    if (in_array($parts[1], $gTLD)) {
                        return '.' . $host;
                    }
                }
                array_shift($parts);
                return '.' . implode('.', $parts);
        }
        return null;
    }

}

if (!function_exists('cache')) {

    /**
     * Reads/writes temporary data to cache files or session.
     *
     * @param string $path File path within /tmp to save the file.
     * @param mixed $data The data to save to the temporary file.
     * @param mixed $expires A valid strtotime string when the data expires.
     * @param string $target The target of the cached data; either 'cache' or 'public'.
     * @return mixed The contents of the temporary file.
     * @deprecated 3.0.0 Will be removed in 3.0. Please use Cache::write() instead.
     */
    function cache($path, $data = null, $expires = '+1 day', $target = 'cache') {
        if (Configure::read('Cache.disable')) {
            return null;
        }
        $now = time();

        if (!is_numeric($expires)) {
            $expires = strtotime($expires, $now);
        }
        $filename = '';
        switch (strtolower($target)) {
            case 'cache':
                $filename = CACHE . $path;
                break;
            case 'public':
                $filename = WWW_ROOT . $path;
                break;
            case 'tmp':
                $filename = TMP . $path;
                break;
        }
        $timediff = $expires - $now;
        $filetime = false;

        if (file_exists($filename)) {
            //@codingStandardsIgnoreStart
            $filetime = @filemtime($filename);
            //@codingStandardsIgnoreEnd
        }

        if ($data === null) {
            if (file_exists($filename) && $filetime !== false) {
                if ($filetime + $timediff < $now) {
                    //@codingStandardsIgnoreStart
                    @unlink($filename);
                    //@codingStandardsIgnoreEnd
                } else {
                    //@codingStandardsIgnoreStart
                    $data = @file_get_contents($filename);
                    //@codingStandardsIgnoreEnd
                }
            }
        } elseif (is_writable(dirname($filename))) {
            //@codingStandardsIgnoreStart
            @file_put_contents($filename, $data, LOCK_EX);
            //@codingStandardsIgnoreEnd
        }
        return $data;
    }

}

if (!function_exists('clearCache')) {

    /**
     * Used to delete files in the cache directories, or clear contents of cache directories
     *
     * @param string|array $params As String name to be searched for deletion, if name is a directory all files in
     *   directory will be deleted. If array, names to be searched for deletion. If clearCache() without params,
     *   all files in app/tmp/cache/views will be deleted
     * @param string $type Directory in tmp/cache defaults to view directory
     * @param string $ext The file extension you are deleting
     * @return bool `true` if files found and deleted, `false` otherwise.
     */
    function clearCache($params = null, $type = 'views', $ext = '.php') {
        if (is_string($params) || $params === null) {
            $params = preg_replace('/\/\//', '/', $params);
            $cache = CACHE . $type . DS . $params;

            if (is_file($cache . $ext)) {
                //@codingStandardsIgnoreStart
                @unlink($cache . $ext);
                //@codingStandardsIgnoreEnd
                return true;
            } elseif (is_dir($cache)) {
                $files = glob($cache . '*');

                if ($files === false) {
                    return false;
                }

                foreach ($files as $file) {
                    if (is_file($file) && strrpos($file, DS . 'empty') !== strlen($file) - 6) {
                        //@codingStandardsIgnoreStart
                        @unlink($file);
                        //@codingStandardsIgnoreEnd
                    }
                }
                return true;
            }
            $cache = array(
                CACHE . $type . DS . '*' . $params . $ext,
                CACHE . $type . DS . '*' . $params . '_*' . $ext
            );
            $files = array();
            while ($search = array_shift($cache)) {
                $results = glob($search);
                if ($results !== false) {
                    $files = array_merge($files, $results);
                }
            }
            if (empty($files)) {
                return false;
            }
            foreach ($files as $file) {
                if (is_file($file) && strrpos($file, DS . 'empty') !== strlen($file) - 6) {
                    //@codingStandardsIgnoreStart
                    @unlink($file);
                    //@codingStandardsIgnoreEnd
                }
            }
            return true;
        } elseif (is_array($params)) {
            foreach ($params as $file) {
                clearCache($file, $type, $ext);
            }
            return true;
        }
        return false;
    }

}

if (!function_exists('stripslashes_deep')) {

    /**
     * Recursively strips slashes from all values in an array
     *
     * @param array|string $values Array of values or a string to strip slashes.
     * @return array|string What is returned from calling stripslashes.
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#stripslashes_deep
     */
    function stripslashes_deep($values) {
        if (is_array($values)) {
            foreach ($values as $key => $value) {
                $values[$key] = stripslashes_deep($value);
            }
        } else {
            $values = stripslashes($values);
        }
        return $values;
    }

}

if (!function_exists('__')) {

    /**
     * Returns a translated string if one is found; Otherwise, the submitted message.
     *
     * @param string $singular Text to translate
     * @param mixed $args Array with arguments or multiple arguments in function
     * @return mixed translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__
     */
    function __($singular, $args = null) {
        if (!$singular) {
            return null;
        }

        App::uses('I18n', 'I18n');
        $translated = I18n::translate($singular);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 1));
    }

}

if (!function_exists('__n')) {

    /**
     * Returns correct plural form of message identified by $singular and $plural for count $count.
     * Some languages have more than one form for plural messages dependent on the count.
     *
     * @param string $singular Singular text to translate
     * @param string $plural Plural text
     * @param int $count Count
     * @param mixed $args Array with arguments or multiple arguments in function, otherwise null.
     * @return mixed plural form of translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__n
     */
    function __n($singular, $plural, $count, $args = null) {
        if (!$singular) {
            return null;
        }

        App::uses('I18n', 'I18n');
        $translated = I18n::translate($singular, $plural, null, I18n::LC_MESSAGES, $count);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 3));
    }

}

if (!function_exists('__d')) {

    /**
     * Allows you to override the current domain for a single message lookup.
     *
     * @param string $domain Domain
     * @param string $msg String to translate
     * @param mixed $args Array with arguments or multiple arguments in function, otherwise null.
     * @return string translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__d
     */
    function __d($domain, $msg, $args = null) {
        if (!$msg) {
            return null;
        }
        App::uses('I18n', 'I18n');
        $translated = I18n::translate($msg, null, $domain);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 2));
    }

}

if (!function_exists('__dn')) {

    /**
     * Allows you to override the current domain for a single plural message lookup.
     * Returns correct plural form of message identified by $singular and $plural for count $count
     * from domain $domain.
     *
     * @param string $domain Domain
     * @param string $singular Singular string to translate
     * @param string $plural Plural
     * @param int $count Count
     * @param mixed $args Array with arguments or multiple arguments in function, otherwise null.
     * @return string plural form of translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__dn
     */
    function __dn($domain, $singular, $plural, $count, $args = null) {
        if (!$singular) {
            return null;
        }
        App::uses('I18n', 'I18n');
        $translated = I18n::translate($singular, $plural, $domain, I18n::LC_MESSAGES, $count);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 4));
    }

}

if (!function_exists('__dc')) {

    /**
     * Allows you to override the current domain for a single message lookup.
     * It also allows you to specify a category.
     *
     * The category argument allows a specific category of the locale settings to be used for fetching a message.
     * Valid categories are: LC_CTYPE, LC_NUMERIC, LC_TIME, LC_COLLATE, LC_MONETARY, LC_MESSAGES and LC_ALL.
     *
     * Note that the category must be specified with a class constant of I18n, instead of the constant name. The values are:
     *
     * - LC_ALL       I18n::LC_ALL
     * - LC_COLLATE   I18n::LC_COLLATE
     * - LC_CTYPE     I18n::LC_CTYPE
     * - LC_MONETARY  I18n::LC_MONETARY
     * - LC_NUMERIC   I18n::LC_NUMERIC
     * - LC_TIME      I18n::LC_TIME
     * - LC_MESSAGES  I18n::LC_MESSAGES
     *
     * @param string $domain Domain
     * @param string $msg Message to translate
     * @param int $category Category
     * @param mixed $args Array with arguments or multiple arguments in function, otherwise null.
     * @return string translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__dc
     */
    function __dc($domain, $msg, $category, $args = null) {
        if (!$msg) {
            return null;
        }
        App::uses('I18n', 'I18n');
        $translated = I18n::translate($msg, null, $domain, $category);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 3));
    }

}

if (!function_exists('__dcn')) {

    /**
     * Allows you to override the current domain for a single plural message lookup.
     * It also allows you to specify a category.
     * Returns correct plural form of message identified by $singular and $plural for count $count
     * from domain $domain.
     *
     * The category argument allows a specific category of the locale settings to be used for fetching a message.
     * Valid categories are: LC_CTYPE, LC_NUMERIC, LC_TIME, LC_COLLATE, LC_MONETARY, LC_MESSAGES and LC_ALL.
     *
     * Note that the category must be specified with a class constant of I18n, instead of the constant name. The values are:
     *
     * - LC_ALL       I18n::LC_ALL
     * - LC_COLLATE   I18n::LC_COLLATE
     * - LC_CTYPE     I18n::LC_CTYPE
     * - LC_MONETARY  I18n::LC_MONETARY
     * - LC_NUMERIC   I18n::LC_NUMERIC
     * - LC_TIME      I18n::LC_TIME
     * - LC_MESSAGES  I18n::LC_MESSAGES
     *
     * @param string $domain Domain
     * @param string $singular Singular string to translate
     * @param string $plural Plural
     * @param int $count Count
     * @param int $category Category
     * @param mixed $args Array with arguments or multiple arguments in function, otherwise null.
     * @return string plural form of translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__dcn
     */
    function __dcn($domain, $singular, $plural, $count, $category, $args = null) {
        if (!$singular) {
            return null;
        }
        App::uses('I18n', 'I18n');
        $translated = I18n::translate($singular, $plural, $domain, $category, $count);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 5));
    }

}

if (!function_exists('__c')) {

    /**
     * The category argument allows a specific category of the locale settings to be used for fetching a message.
     * Valid categories are: LC_CTYPE, LC_NUMERIC, LC_TIME, LC_COLLATE, LC_MONETARY, LC_MESSAGES and LC_ALL.
     *
     * Note that the category must be specified with a class constant of I18n, instead of the constant name. The values are:
     *
     * - LC_ALL       I18n::LC_ALL
     * - LC_COLLATE   I18n::LC_COLLATE
     * - LC_CTYPE     I18n::LC_CTYPE
     * - LC_MONETARY  I18n::LC_MONETARY
     * - LC_NUMERIC   I18n::LC_NUMERIC
     * - LC_TIME      I18n::LC_TIME
     * - LC_MESSAGES  I18n::LC_MESSAGES
     *
     * @param string $msg String to translate
     * @param int $category Category
     * @param mixed $args Array with arguments or multiple arguments in function, otherwise null.
     * @return string translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__c
     */
    function __c($msg, $category, $args = null) {
        if (!$msg) {
            return null;
        }
        App::uses('I18n', 'I18n');
        $translated = I18n::translate($msg, null, null, $category);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 2));
    }

}

if (!function_exists('__x')) {

    /**
     * Returns a translated string if one is found; Otherwise, the submitted message.
     *
     * @param string $context Context of the text
     * @param string $singular Text to translate
     * @param mixed $args Array with arguments or multiple arguments in function, otherwise null.
     * @return mixed translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__
     */
    function __x($context, $singular, $args = null) {
        if (!$singular) {
            return null;
        }

        App::uses('I18n', 'I18n');
        $translated = I18n::translate($singular, null, null, null, null, null, $context);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 2));
    }

}

if (!function_exists('__xn')) {

    /**
     * Returns correct plural form of message identified by $singular and $plural for count $count.
     * Some languages have more than one form for plural messages dependent on the count.
     *
     * @param string $context Context of the text
     * @param string $singular Singular text to translate
     * @param string $plural Plural text
     * @param int $count Count
     * @param mixed $args Array with arguments or multiple arguments in function, otherwise null.
     * @return mixed plural form of translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__n
     */
    function __xn($context, $singular, $plural, $count, $args = null) {
        if (!$singular) {
            return null;
        }

        App::uses('I18n', 'I18n');
        $translated = I18n::translate($singular, $plural, null, I18n::LC_MESSAGES, $count, null, $context);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 4));
    }

}

if (!function_exists('__dx')) {

    /**
     * Allows you to override the current domain for a single message lookup.
     *
     * @param string $domain Domain
     * @param string $context Context of the text
     * @param string $msg String to translate
     * @param mixed $args Array with arguments or multiple arguments in function, otherwise null.
     * @return string translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__d
     */
    function __dx($domain, $context, $msg, $args = null) {
        if (!$msg) {
            return null;
        }
        App::uses('I18n', 'I18n');
        $translated = I18n::translate($msg, null, $domain, null, null, null, $context);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 3));
    }

}

if (!function_exists('__dxn')) {

    /**
     * Allows you to override the current domain for a single plural message lookup.
     * Returns correct plural form of message identified by $singular and $plural for count $count
     * from domain $domain.
     *
     * @param string $domain Domain
     * @param string $context Context of the text
     * @param string $singular Singular string to translate
     * @param string $plural Plural
     * @param int $count Count
     * @param mixed $args Array with arguments or multiple arguments in function, otherwise null.
     * @return string plural form of translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__dn
     */
    function __dxn($domain, $context, $singular, $plural, $count, $args = null) {
        if (!$singular) {
            return null;
        }
        App::uses('I18n', 'I18n');
        $translated = I18n::translate($singular, $plural, $domain, I18n::LC_MESSAGES, $count, null, $context);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 5));
    }

}

if (!function_exists('__dxc')) {

    /**
     * Allows you to override the current domain for a single message lookup.
     * It also allows you to specify a category.
     *
     * The category argument allows a specific category of the locale settings to be used for fetching a message.
     * Valid categories are: LC_CTYPE, LC_NUMERIC, LC_TIME, LC_COLLATE, LC_MONETARY, LC_MESSAGES and LC_ALL.
     *
     * Note that the category must be specified with a class constant of I18n, instead of the constant name. The values are:
     *
     * - LC_ALL       I18n::LC_ALL
     * - LC_COLLATE   I18n::LC_COLLATE
     * - LC_CTYPE     I18n::LC_CTYPE
     * - LC_MONETARY  I18n::LC_MONETARY
     * - LC_NUMERIC   I18n::LC_NUMERIC
     * - LC_TIME      I18n::LC_TIME
     * - LC_MESSAGES  I18n::LC_MESSAGES
     *
     * @param string $domain Domain
     * @param string $context Context of the text
     * @param string $msg Message to translate
     * @param int $category Category
     * @param mixed $args Array with arguments or multiple arguments in function, otherwise null.
     * @return string translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__dc
     */
    function __dxc($domain, $context, $msg, $category, $args = null) {
        if (!$msg) {
            return null;
        }
        App::uses('I18n', 'I18n');
        $translated = I18n::translate($msg, null, $domain, $category, null, null, $context);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 4));
    }

}

if (!function_exists('__dxcn')) {

    /**
     * Allows you to override the current domain for a single plural message lookup.
     * It also allows you to specify a category.
     * Returns correct plural form of message identified by $singular and $plural for count $count
     * from domain $domain.
     *
     * The category argument allows a specific category of the locale settings to be used for fetching a message.
     * Valid categories are: LC_CTYPE, LC_NUMERIC, LC_TIME, LC_COLLATE, LC_MONETARY, LC_MESSAGES and LC_ALL.
     *
     * Note that the category must be specified with a class constant of I18n, instead of the constant name. The values are:
     *
     * - LC_ALL       I18n::LC_ALL
     * - LC_COLLATE   I18n::LC_COLLATE
     * - LC_CTYPE     I18n::LC_CTYPE
     * - LC_MONETARY  I18n::LC_MONETARY
     * - LC_NUMERIC   I18n::LC_NUMERIC
     * - LC_TIME      I18n::LC_TIME
     * - LC_MESSAGES  I18n::LC_MESSAGES
     *
     * @param string $domain Domain
     * @param string $context Context of the text
     * @param string $singular Singular string to translate
     * @param string $plural Plural
     * @param int $count Count
     * @param int $category Category
     * @param mixed $args Array with arguments or multiple arguments in function, otherwise null.
     * @return string plural form of translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__dcn
     */
    function __dxcn($domain, $context, $singular, $plural, $count, $category, $args = null) {
        if (!$singular) {
            return null;
        }
        App::uses('I18n', 'I18n');
        $translated = I18n::translate($singular, $plural, $domain, $category, $count, null, $context);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 6));
    }

}

if (!function_exists('__xc')) {

    /**
     * The category argument allows a specific category of the locale settings to be used for fetching a message.
     * Valid categories are: LC_CTYPE, LC_NUMERIC, LC_TIME, LC_COLLATE, LC_MONETARY, LC_MESSAGES and LC_ALL.
     *
     * Note that the category must be specified with a class constant of I18n, instead of the constant name. The values are:
     *
     * - LC_ALL       I18n::LC_ALL
     * - LC_COLLATE   I18n::LC_COLLATE
     * - LC_CTYPE     I18n::LC_CTYPE
     * - LC_MONETARY  I18n::LC_MONETARY
     * - LC_NUMERIC   I18n::LC_NUMERIC
     * - LC_TIME      I18n::LC_TIME
     * - LC_MESSAGES  I18n::LC_MESSAGES
     *
     * @param string $context Context of the text
     * @param string $msg String to translate
     * @param int $category Category
     * @param mixed $args Array with arguments or multiple arguments in function, otherwise null.
     * @return string translated string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#__c
     */
    function __xc($context, $msg, $category, $args = null) {
        if (!$msg) {
            return null;
        }
        App::uses('I18n', 'I18n');
        $translated = I18n::translate($msg, null, null, $category, null, null, $context);
        $arguments = func_get_args();
        return I18n::insertArgs($translated, array_slice($arguments, 3));
    }

}

if (!function_exists('LogError')) {

    /**
     * Shortcut to Log::write.
     *
     * @param string $message Message to write to log
     * @return void
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#LogError
     */
    function LogError($message) {
        App::uses('CakeLog', 'Log');
        $bad = array("\n", "\r", "\t");
        $good = ' ';
        CakeLog::write('error', str_replace($bad, $good, $message));
    }

}

if (!function_exists('fileExistsInPath')) {

    /**
     * Searches include path for files.
     *
     * @param string $file File to look for
     * @return bool|string Full path to file if exists, otherwise `false`.
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#fileExistsInPath
     */
    function fileExistsInPath($file) {
        $paths = explode(PATH_SEPARATOR, ini_get('include_path'));
        foreach ($paths as $path) {
            $fullPath = $path . DS . $file;
            if (file_exists($fullPath)) {
                return $fullPath;
            } elseif (file_exists($file)) {
                return $file;
            }
        }
        return false;
    }

}

if (!function_exists('convertSlash')) {

    /**
     * Convert forward slashes to underscores and removes first and last underscores in a string
     *
     * @param string $string String to convert
     * @return string with underscore remove from start and end of string
     * @link https://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html#convertSlash
     */
    function convertSlash($string) {
        $string = trim($string, '/');
        $string = preg_replace('/\/\//', '/', $string);
        $string = str_replace('/', '_', $string);
        return $string;
    }

}

if (!function_exists('json_last_error_msg')) {

    /**
     * Provides the fallback implementation of json_last_error_msg() available in PHP 5.5 and above.
     *
     * @return string Error message.
     */
    function json_last_error_msg() {
        static $errors = array(
            JSON_ERROR_NONE => '',
            JSON_ERROR_DEPTH => 'Maximum stack depth exceeded',
            JSON_ERROR_STATE_MISMATCH => 'Invalid or malformed JSON',
            JSON_ERROR_CTRL_CHAR => 'Control character error, possibly incorrectly encoded',
            JSON_ERROR_SYNTAX => 'Syntax error',
            JSON_ERROR_UTF8 => 'Malformed UTF-8 characters, possibly incorrectly encoded'
        );
        $error = json_last_error();
        return array_key_exists($error, $errors) ? $errors[$error] : "Unknown error ({$error})";
    }

}
