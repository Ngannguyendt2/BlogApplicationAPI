<?php


namespace App\Http\Services\IMPL;


use App\Http\Repositories\BlogRepository;

use App\Http\Services\BlogService;

class BlogServiceIMPL implements BlogService
{
    protected $blogService;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogService = $blogRepository;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        $blogs=$this->blogService->getAll();
        return $blogs;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        $blog=$this->blogService->findById($id);
        $statusCode=200;
        if(!$blog){
            $statusCode=404;
        }
        $data=[
            'blog'=>$blog,
            'statusCode'=>$statusCode
        ];
        return $data;
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        $blog=$this->blogService->findById($id);
        $statusCode=200;
        $message='Delete success';
        if(!$blog){
            $statusCode=404;
            $message='Not found data';
        }
        $this->blogService->destroy($blog);
        $data=[
            'statusCode'=>$statusCode,
            'message'=>$message
        ];
        return $data;
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
        $blogCurrent=$this->blogService->findById($id);
        if(!$blogCurrent){
            $statusCode=404;
            $blog=null;
        }
        else{
            $statusCode=200;
            $blog=$this->blogService->update($request,$blogCurrent);
        }
        $data=[
            'statusCode'=>$statusCode,
            'blog'=>$blog
        ];
        return $data;

    }

    public function create($request)
    {
        // TODO: Implement create() method.
       $blog=$this->blogService->create($request);
       $statusCode=201;
       if(!$blog){
           $statusCode=500;
       }
       $data=[
           'statusCode'=>$statusCode,
           'blog'=>$blog
       ];
       return $data;
    }
}
