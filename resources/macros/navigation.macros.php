<?php

//Set Navigation as active based on URL
function navIs($url) {
    if(URL::current() == URL::to($url)) {
        return 'active';
    }
}

//Set Navigation as disabled
function navIsDisabled($url) {
    if(strpos(URL::current(), $url)) {
        return 'disabled';
    }
}