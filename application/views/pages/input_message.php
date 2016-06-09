<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="res/css/bootstrap.min.css" rel="stylesheet">
    <title>经销商信息录入</title>

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
            <label for="exampleInputName2">姓名：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" class="form-control" id="realname" style="width: 300px" >
        </div>
        <P>
        <div class="form-group">
            <label for="exampleInputstore_name"> 商场名称：</label>
            <input type="email" class="form-control" id="store_name"   style="width: 300px">
        </div>
        <P>
        <div class="form-group">
            <label for="exampleInputphone">  电话：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="email" class="form-control" id="phone"   style="width: 300px">
        </div>
        <P>
        <div class="form-group">
            <label for="exampleInputid_cart">   身份证号：</label>
            <input type="email" class="form-control" id="id_cart"   style="width: 300px">
        </div>

        <P>
        <div class="form-group">
            <label for="exampleInputEmail2">   商场所在省：</label>
        <select class="form-control"   style="width: 290px">
            <option>河北省</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
            </div>
        <P>
        <div class="form-group">
            <label for="exampleInputcity">   商场所在市：</label>
            <select class="form-control"   style="width: 290px">
                <option>石家庄市</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

        <P>
        <div class="form-group">
            <label for="exampleInputEmail2">   商场所在县：</label>
            <select class="form-control"   style="width: 290px">
                <option>正定县</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <P>
        <div class="form-group">
            <label for="exampleInputid_cart">   商场详细地址：</label>
            <input type="email" class="form-control" id="id_cart"   style="width: 280px">
        </div>
        <P>
        <P>
        <button type="button" class="btn btn-primary btn-lg active">提交</button>
    </form>

</div>
</div>
</body>
</html>