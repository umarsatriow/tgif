<?php

namespace Fir\Middleware;

/**
 * Class UserSettings sets the default user settings when navigating for the first time on site
 */
class UserSettings {

    /**
     * @var int
     */
    private $newWindow = 0;

    /**
     * @var string
     */
    private $safeSearch = 'Off';

    /**
     * @var string
     */
    private $highlight = 'false';

    /**
     * @var int
     */
    private $darkMode = 0;

    public function __construct() {
        if(isset($_COOKIE['new_window']) == false) {
            setcookie("new_window", $this->newWindow, time() + (10 * 365 * 24 * 60 * 60), COOKIE_PATH);
            $_COOKIE['new_window'] = $this->newWindow;
        }

        if(isset($_COOKIE['safe_search']) == false || in_array($_COOKIE['safe_search'], ['Off', 'Moderate', 'Strict']) == false) {
            setcookie("safe_search", $this->safeSearch, time() + (10 * 365 * 24 * 60 * 60), COOKIE_PATH);
            $_COOKIE['safe_search'] = $this->safeSearch;
        }

        if(isset($_COOKIE['highlight']) == false || in_array($_COOKIE['highlight'], ['false', 'true']) == false) {
            setcookie("highlight", $this->highlight, time() + (10 * 365 * 24 * 60 * 60), COOKIE_PATH);
            $_COOKIE['highlight'] = $this->highlight;
        }

        if(isset($_COOKIE['dark_mode']) == false || in_array($_COOKIE['dark_mode'], ['0', '1']) == false) {
            setcookie("dark_mode", $this->darkMode, time() + (10 * 365 * 24 * 60 * 60), COOKIE_PATH);
            $_COOKIE['dark_mode'] = $this->darkMode;
        }
    }
}