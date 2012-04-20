<h2>Schreiben Sie uns!</h2>
<p>Wir freuen uns auf Ihre Nachricht!</p>
<form action="kontakt.php" method="post" name="kontaktform" id="kontaktform">
    <dl>
        <dt><label for="vorname">Vorname*</label></dt>
        <dd><input class="required" type="text" name="vorname" id="vorname" /></dd>
        <dt><label for="name">Name</label></dt>
        <dd><input type="text" name="name" id="name" class=""/></dd>
        <dt><label for="email">Email*</label></dt>
        <dd><input class="required" type="text" name="email" id="email" /></dd>
        <dt><label for="website">Website</label></dt>
        <dd><input type="text" name="website" id="website" /></dd>
        <dt><label for="nachricht">Ihre Nachricht*</label></dt>
        <dd><textarea class="required" name="nachricht" id="nachricht"></textarea></dd>
        <dt><label for="senden"></label></dt>
        <dd><input type="submit" name="senden" id="senden" value="Absenden" /></dd>
    </dl>
</form>