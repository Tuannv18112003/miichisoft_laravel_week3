<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        echo "<h1>index</h1>";
    }

    public function loginSuccess() {
        echo "<h1>Login Success</h1>";
    }

    public function create() {
        echo "<h1>Create (Super Admin)</h1>";
    }

    public function list() {
        echo "<h1>List (Admin and Super Admin)</h1>";
    }

    public function detail() {
        echo "<h1>Detail (Admin and Super Admin)</h1>";
    }

    public function update() {
        echo "<h1>Update (Super Admin)</h1>";
    }

    public function delete() {
        echo "<h1>Delete (Super Admin)</h1>";
    }
}
