<?php

interface IBuilder
{
    public function select();

    public function where();

    public function limit();

    public function getSQL();
}