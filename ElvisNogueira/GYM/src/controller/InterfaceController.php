<?php


namespace GYM\src\controller;


interface InterfaceController
{
    function index();
    function view();
    function create();
    function edit();

    function store();
    function update();
    function delete();
}