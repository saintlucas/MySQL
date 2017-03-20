<?php

//Tutaj napisz swoje rozwiązanie

?>


<div>
    <form class="cinema_form" method="post" action="#">
        <label>Nazwa</label><br>
        <input name="name" type="text" maxlength="255" value=""/><br>
        <label>Adres</label><br>
        <input name="address" type="text" maxlength="255" value=""/><br>
        <button type="submit" name="submit" value="cinema">Wyslij</button>
    </form>
</div>

<div>
    <form class="movie_form" method="post" action="#">
        <label>Nazwa</label><br>
        <input name="name" type="text" maxlength="255" value=""/><br>
        <label>Opis</label><br>
        <input name="desc" type="text" maxlength="255" value=""/><br>
        <label>Rating</label><br>
        <input name="rating" type="number" min="0" max="10"/><br>
        <button type="submit" name="submit" value="movie">Wyslij</button>
    </form>
</div>

<div>
    <form class="ticket_form" method="post" action="#">
        <label>Ilosc</label><br>
        <input name="quantity" type="number" min="0"/><br>
        <label>Cena</label><br>
        <input name="price" type="number" min="0" step="0.01"/><br>
        <button type="submit" name="submit" value="ticket">Wyslij</button>
    </form>
</div>

<div>
    <form class="payment_form" method="post" action="#">
        <label>Typ platnosci</label><br>
        <select name="payment_type">
            <option value="transfer">Przelew</option>
            <option value="cash">Gotowka</option>
            <option value="card">Karta</option>
        </select><br>
        <label>Data</label><br>
        <input type="date" name="payment_date"><br>
        <button type="submit" name="submit" value="payment">Wyslij</button>
    </form>
</div>
