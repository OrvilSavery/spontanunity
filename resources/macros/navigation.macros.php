<?php

/**
 * @param $url
 * @return string
 * Set Navigation as active based on URL
 */
function navIs($url) {
    if(URL::current() == URL::to($url)) {
        return 'active';
    }
}

/**
 * @param $url
 * @return string
 * Set Navigation as disabled
 */
function navIsDisabled($url) {
    if(strpos(URL::current(), $url)) {
        return 'disabled';
    }
}