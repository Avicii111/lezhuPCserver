<?php
namespace app\index\controller;
use \think\Controller;
class Newslist extends Controller
{
    public function index()
    {
       return $this->fetch();
    }
}
