<?php
use Yii;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<?php if(Yii::$app->user->isGuest):?>
<a href="/web/auth/login">Войдите чтобы заказать имя!</a>
<?php else:?>
<a href="/web/nickname/create">заказать имя</a><br>
<a href="/web/nickname/index">посмотреть свои имена</a>
<?php endif; ?>
