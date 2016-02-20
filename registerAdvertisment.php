<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 2016-02-20
 * Time: 10:35
 */ ?>
<div class="container" style="padding:10%">
    <form class="form-horizontal" role="form">
        <h2>Dodaj informacje o ogłoszeniu</h2>
        <div class="form-group">
            <label for="website" class="col-sm-3 control-label">Adres strony</label>
            <div class="col-sm-9">
                <input type="text" id="website" placeholder="" class="form-control" autofocus>
                <span class="help-block">Podaj adres strony ze ogłoszeniem</span>
            </div>
        </div>
        <div class="form-group">
            <label for="position" class="col-sm-3 control-label">Stanowisko</label>
            <div class="col-sm-9">
                <input type="catedory" id="category" placeholder="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="firm" class="col-sm-3 control-label">Firma</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="province" class="col-sm-3 control-label">Województwo</label>
            <div class="col-sm-9">
                <select id="country" class="form-control">
                    <option>Dolnośląskie</option>
                    <option>Kujawsko-pomorskie</option>
                    <option>Lubuskie</option>
                    <option>Łódzkie</option>
                    <option>Małopolskie</option>
                    <option>Mazowieckie</option>
                    <option>Opolskie</option>
                    <option>Podkarpackie</option>
                    <option>Podlaskie</option>
                    <option>Pomorskie</option>
                    <option>Śląskie</option>
                    <option>Świętokrzyskie</option>
                    <option>Warmińsko-mazurskie</option>
                    <option>Wielkopolskie</option>
                    <option>Opolskie</option>
                    <option>Zachodniopomorskie</option>
                </select>
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label for="city" class="col-sm-3 control-label">Miasto</label>
            <div class="col-sm-9">
                <input type="text" id="text" placeholder="" class="form-control">
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label for="city" class="col-sm-3 control-label">Zamieszczono dnia</label>
            <div class="col-sm-9">
                <input type="text" id="text" placeholder="" class="form-control">
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label for="city" class="col-sm-3 control-label">Ogłoszenie z dnia</label>
            <div class="col-sm-9">
                <input type="date" name="bday" max="1979-12-31"><br>
            </div>
        </div> <!-- /.form-group -->
        <form class="container">
            <label for="city" class="col-sm-3 control-label">Ogłoszenie wygasa dnia </label>
            <div class="col-sm-9">
                <input type="date" name="bday" max="1979-12-31"> &nbsp;&nbsp;&nbsp; / lub za ile dni &nbsp;&nbsp;&nbsp;
                <input type="number" name="bday" max="1979-12-31">
            </div><br>
        </form><br><br>

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Dodaj</button>
            </div>
        </div>


    </form> <!-- /form -->
</div> <!-- ./container -->


