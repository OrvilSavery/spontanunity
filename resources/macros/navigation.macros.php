<?php

//Set Navigation as active based on URL
function navIs($url) {
    if(URL::current() == URL::to($url)) {
        return 'active';
    }
}