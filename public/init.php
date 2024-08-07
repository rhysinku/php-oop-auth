<?php

session_start();

// require_once dirname(__DIR__)."Database/Database.class.php";
require_once dirname(__DIR__) . '/Database/Database.class.php';
require_once dirname(__DIR__). '/Model/User.model.php';
require_once dirname(__DIR__). '/Controller/UserAuth.auth.php';
require_once dirname(__DIR__). '/Util/sessionAuth.php';
require_once dirname(__DIR__) ."/Middleware/AuthMiddleware.php";