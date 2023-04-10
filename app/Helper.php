<?php



function getCurrentUrl() {
    return request()->route()->uri;
}