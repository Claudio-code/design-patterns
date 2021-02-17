<?php

require_once 'FrameWork.php';

require_once 'FrameworkFullBuilder.php';
$builder = new FrameworkFullBuilder();
$frame = new $builder->getFramework();
