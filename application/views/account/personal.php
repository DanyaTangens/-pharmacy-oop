<div class="container">
    <div class="row">
        <h1>Личный кабинет</h1>
        <ul class="tabs-list">
            <li class="active"><a href="/account/personal" >Информация о пользователе</a></li>
            <li><a href="/account/activeorders" >Активные заказы</a></li>
            <li><a href="/account/orders" >История покупок</a></li>
        </ul>
        <div class="col-sm-6 col-md-5">
            <div class="login">
                <form id="login-form" action="/account/personal" method="post">
                    <h2>Персональная информация</h2>
                    <p>Данные</p>
                    <label>ФИО</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" placeholder="ФИО"/>
                    <label>Номер телефона</label>
                    <input type="text" name="phone" value="<?php echo $phone; ?>" placeholder="Номер телефона"/>
                    <label>E-mail</label>
                    <input type="text" name="email" value="<?php echo $email; ?>" placeholder="E-mail"/>
                    <label>Адрес</label>
                    <input type="text" name="adress" value="<?php echo $adress; ?>" placeholder="Адрес для доставки"/>
                    <input type="submit" value="login" />
                </form>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-sm-6 col-md-5">
            <div class="cardclient">
                <h2>Карта клиента</h2>
                <br>
                <p>Статус карты: <span>обычная</span></p>
                <br>
                <p>Сумма учтенных покупок по карте клиента: <span>0 руб.</span></p>
                <br>
                <p>Для изменения статуса карты на ВИП, осталось приобрести товаров на сумму: <span>30000 руб </span><a href="#">Узнать подробнее</a></p>
                <br>
            </div>
            <div class="cardclient">
                <h2>Количество бонусов</h2>
                <br>
                <p>Накопленные бонусы: <span>30.32 руб</span></p> 
            </div>
        </div>
    </div>     
</div>