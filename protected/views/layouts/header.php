<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Malibu</title>
    <!--    --><?php //Yii::app()->getClientScript()->registerScriptFile(yii::app()->baseUrl."/style/admin/script/jquery.min.js");?>
    <!--    --><?php //Yii::app()->getClientScript()->registerScriptFile(yii::app()->baseUrl."/style/admin/script/admin.js");?>
    <?php Yii::app()->getClientScript()->registerCssFile(yii::app()->baseUrl."/style/fontend/css/style.css");?>
</head>
<body>
<div class="page">
    <div class="phd">
        <div class="nav cs-clear">
            <?php
                $model=Menu::model()->getRootList();
                $controller=Yii::app()->controller->id;
                foreach($model as $key =>$value)
                {
                    if($controller == $value->component)
                        echo '<a href="' . Yii::app()->createUrl($value->component) . '" class="on">' . $value->title .'</a>';
                    else
                        echo '<a href="' . Yii::app()->createUrl($value->component) . '">' . $value->title .'</a>';
                }
            ?>
        </div>
        <a href="#" class="tmalllink"></a>
    </div>