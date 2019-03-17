<?php
//载入ucpass类
require_once('lib/Ucpaas.class.php');

//初始化必填
//填写在开发者控制台首页上的Account Sid
$options['accountsid']='6f32130ddecb7d18f45f852d97f80fbf';
//填写在开发者控制台首页上的Auth Token
$options['token']='ab987d926a598a9a860394cffff5591e';

//初始化 $options必填
$ucpass = new Ucpaas($options);