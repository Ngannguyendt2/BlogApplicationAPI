<?php


namespace App\Http\Repositories;


interface Repository
{
public function getAll();
public function findById($id);
public function create($data);
public function destroy($object);
public function update($data,$object);
}
