<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="res/css/bootstrap.min.css" rel="stylesheet">
    <title>添加新用户</title>

    <style>
        #banner{
            float: left;
            height:7em;
            width:100%;
            padding-top:1em;
            color: #ffffff;
            background: #6195c8;
        }
        #bs-navbar{
            float: left;
            width:100%;
            background: #dbdbdb;
        }
        #bs-navbar li{
            float: left;
            padding:4px 20px;
        }


        #div1
        {
            border:1px solid black;
            padding:35px;

            background-position:left;
            background-origin:border-box;
        }


    </style>
</head>
<body>
<div class="container">
    &nbsp;
    <div id="div1">
    <form class="form-inline">
        <div class="form-group">
            <label for="exampleInputName2">用户名：&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" class="form-control" id="username" style="width: 300px" >
        </div>
        <P>
        <div class="form-group">
            <label for="exampleInputstore_name"> 密码：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="email" class="form-control" id="password1"   style="width: 300px">
        </div>
        <P>
        <div class="form-group">
            <label for="exampleInputstore_name"> 确认密码：</label>
            <input type="email" class="form-control" id="password2"   style="width: 300px">
        </div>
        <P>
        <div class="form-group">
            <label for="exampleInputstore_name">用户级别：</label>
            <select class="form-control"   style="width: 300px">
                <option>普通权限</option>
                <option>管理员</option>
            </select>
        </div>
        <P>
            <button type="button" class="btn btn-primary btn-lg active">注册</button>
    </form>
    </div>

</div>
</body>
</html>