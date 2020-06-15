<?php

namespace Projeto_GYM\src\controller;

interface InterfacesController{
    function index(); // find All
    function view(); // find by id
    function create();
    function edit();

    function store();
    function update();
    function delete();
}