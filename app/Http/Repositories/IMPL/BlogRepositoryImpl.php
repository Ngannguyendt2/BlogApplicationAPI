<?php


namespace App\Http\Repositories\IMPL;


use App\Http\Repositories\BlogRepository;
use App\Http\Repositories\Eloquent\EloquentRepository;
use App\Post;

class BlogRepositoryImpl extends EloquentRepository implements BlogRepository
{

public function getModel()
{
    // TODO: Implement getModel() method.
    $model=Post::class;
    return $model;
}
}
