<?php
function getFromRequest($paramName){
    return isset($_REQUEST[$paramName]) ? $_REQUEST[$paramName] : null;
}