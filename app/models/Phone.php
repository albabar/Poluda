<?php

Class Phone extends Eloquent {


    function user() {
        return $this->belongsTo('User');
    }
}
