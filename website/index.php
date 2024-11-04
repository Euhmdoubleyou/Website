<?php require_once("./layout/header.php"); ?>

<h1>Welcome to my very own website </h1><br>
<p>Name: Mattijn Witteveen</p><br>
<p>Course: Web Programming by Ali Khorsandfard</p><br>
<p>Fachinformatiker Anwendungsentwicklung Sommer 2024</p><br>
<p>Location: Herford</p><br>
<hr>
<form>
    <div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div><br><br>
        <div class="form-group">
            <label for="message">Nachricht:</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit">Reach Out</button>
    </div>
</form>

<?php require_once("./layout/footer.php"); ?>