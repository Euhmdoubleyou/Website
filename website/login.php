<?php require_once("./layout/header.php"); ?>
<div class="container"><br>
         <h1>Login Clients</h1><br><br>
         <form>
             <div class="form-group">
                 <label for="username">Company name:</label>
                 <input type="text" class="form-control" id="username" placeholder="Enter username">
             </div><br><br>
             <div class="form-group">
                 <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div><br><br>
             <button type="submit">Let's Go</button>
         </form>
     </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <?php require_once("./layout/footer.php"); ?>