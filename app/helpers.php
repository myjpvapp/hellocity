<?php

if (!function_exists('maintitle')){

    function  maintitle(?string $pagetitle = null) : string {
        if ($pagetitle == null ) {

            return config('app.name');
        } else {

            return  $pagetitle .'titreJPV';
        }

    }


}
