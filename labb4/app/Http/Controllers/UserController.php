<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    Public function index() { echo "This is INDEX"; }
    Public function create() { echo "New User "; Return view('insert'); }
    Public function store(request $request) { echo "Adding New User info "; }
    Public function show($id) { echo "User info ID=:".$id ; }
    Public function edit($id) { return view('edit'); }
    Public function update(request $request , $id) {
        echo "Updated User id= ".$id; }
    Public function destroy($id) { echo "Deleting User id= ". $id; }
}

