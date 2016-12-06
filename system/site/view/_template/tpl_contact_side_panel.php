<div id="feedback-panel">

    <div class="col-xs-4 col-md-4 panel panel-default" style="display: none;" id="feedback-form">

        <form role="form" class="form panel-body" action="send_email/init/contact" method="POST">
            <h4><i class="fa fa-phone-square"></i> <?php echo $this->settings['tel']; ?> <br>Hívjon, vagy kérjen visszahívást!</h4>
            <div id="panel_ajax_message" class="form-group"></div>
            <div class="form-group">
                <input type="text" placeholder="Név" required="" autofocus="" name="name" id="panel_name" class="form-control">
            </div>
            <div class="form-group">
                <input type="email" placeholder="E-mail" required="" autofocus="" name="email" id="panel_email"class="form-control">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Telefonszám" required="" autofocus="" name="phone" id="panel_phone"class="form-control">
            </div>
            <div class="form-group">
                <textarea rows="5" placeholder="Üzenet..." required="" name="message" id="panel_message" class="form-control"></textarea>
            </div>

            <input type="text" name="mezes_bodon" id="mezes_bodon">

            <div id="submit_button" class="pull-left">
                <input class="form__submit" type="submit" name="submit_contact" id="submit_contact" value="Küldés">

            </div>
        </form>
    </div>
    <div id="feedback-tab"><i class="fa fa-envelope"></i> | <i class="fa fa-phone"></i></div>
</div>

