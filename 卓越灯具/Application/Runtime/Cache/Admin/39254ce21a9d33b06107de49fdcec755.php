<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/admin.css">
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/font-awesome.css">
</head>
<body>
    <div class="panel">
        <div class="panel-head"><i class="fa fa-navicon"></i> 内容列表</div>
        <div class="padding">  
            <button><a href="/C2C/index.php/Admin/adv/advadd"><i class="fa fa-plus"></i> 添加管理员</a></button>
            <button><a href="/C2C/index.php/Admin/adv/advadd"><i class="fa fa-minus"></i> 批量删除</a></button>
        </div>
        <form name="myform" method="post">           
            <div class="result-content">
                <table class="result-tab">
                    <tbody>
                        <tr>
                            <th width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>登录名</th>
                            <th>手机</th>
                            <th>邮箱</th>
                            <!-- <th>权限</th> -->
                            <th>加入时间</th>                            
                            <th>操作</th>
                        </tr>
                        <tr>
                            <td><input name="id[]" value="22}" type="checkbox"></td>
                            <td>22</td>
                            <td>登录名22</td>
                            <td>15000000000</td>
                            <td>wangyi22@126.com</td>
                            <!-- <td>超级管理员</td> -->
                            <td>2017-5-23</td>
                            <td>
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">编辑</a> /
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input name="id[]" value="23}" type="checkbox"></td>
                            <td>23</td>
                            <td>登录名23</td>
                            <td>15000000000</td>
                            <td>wangyi23@126.com</td>
                            <!-- <td>超级管理员</td> -->
                            <td>2017-5-23</td>
                            <td>
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">编辑</a> /
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input name="id[]" value="24}" type="checkbox"></td>
                            <td>24</td>
                            <td>登录名24</td>
                            <td>15000000000</td>
                            <td>wangyi24@126.com</td>
                            <!-- <td>超级管理员</td> -->
                            <td>2017-5-23</td>
                            <td>
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">编辑</a> /
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input name="id[]" value="25}" type="checkbox"></td>
                            <td>25</td>
                            <td>登录名25</td>
                            <td>15000000000</td>
                            <td>wangyi25@126.com</td>
                            <!-- <td>超级管理员</td> -->
                            <td>2017-5-23</td>
                            <td>
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">编辑</a> /
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input name="id[]" value="26}" type="checkbox"></td>
                            <td>26</td>
                            <td>登录名26</td>
                            <td>15000000000</td>
                            <td>wangyi26@126.com</td>
                            <!-- <td>超级管理员</td> -->
                            <td>2017-5-23</td>
                            <td>
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">编辑</a> /
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input name="id[]" value="27}" type="checkbox"></td>
                            <td>27</td>
                            <td>登录名27</td>
                            <td>15000000000</td>
                            <td>wangyi27@126.com</td>
                            <!-- <td>超级管理员</td> -->
                            <td>2017-5-23</td>
                            <td>
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">编辑</a> /
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">删除</a>
                            </td>
                        </tr>                    
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</body>
</html>