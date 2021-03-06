<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Веб-сервер ИТФ';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Веб-сервер ИТФ</h1>

        <p class="lead">
            <p>Сервер предназначен для размещения проектов студентов и преподавателей ИТФ НГУЭУ.</p>
            <p>
                На текущий момент поддерживаются следующие технологии:
                <ul class="list-unstyled">
                    <li>PHP7</li>
                    <li>MySQL</li>
                    <li>Composer</li>
                    <li>Git</li>
                </ul>
            </p>
            <p>
                Выкладка кода осуществляется с использованием системы управления исходным кодом Git. Для выкладки проекта необходимо:
                <ul class="list-unstyled">
                    <li>Разместить исходный код проекта на сайте GitHub.com</li>
                    <li>Настроить подключение MySQL</li>
                    <li>Отправить заявку на подключение</li>
                </ul>
            </p>
        </p>

        <p><?= Html::a('Отправить заявку', ['/reg/index'], ['class' => 'btn btn-lg btn-success']) ?></p>
    </div>
</div>
