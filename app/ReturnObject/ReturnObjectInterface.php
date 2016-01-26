<?php
namespace App\ReturnObject;

interface ReturnObjectInterface {
    public function isValid();
    public function getMessage();
    public function __construct($message="");
}