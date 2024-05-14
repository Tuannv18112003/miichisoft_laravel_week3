<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        echo "<h1>Hello</h1>";
    }

    public function create() {
        echo "<h1>Create</h1>";
    }

    public function list() {
        echo "<h1>List</h1>";
    }

    public function detail() {
        echo "<h1>Detail</h1>";
    }

    public function update() {
        echo "<h1>Update</h1>";
    }

    public function delete() {
        echo "<h1>Delete</h1>";
    }
}
