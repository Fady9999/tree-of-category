<!DOCTYPE html>
<html>
 <head>
  <title>How to Add New Node in Dynamic Treeview using PHP Mysql Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
  <style>
  </style>
 </head>
 <body>
 <div class="container" style="width:900px;">
   <br /><br />
   <div class="row">
        <div class="col-md-12">
            <h3 align="center">login form</h3>
            <br />
            <form method="post" id="login_form" name="signin-form" action="controller/login.php">
            <div class="form-group">
            <label>User Name</label>
            <input type="text" name="username" required />
            
            </div>
            <div class="form-group">
            <label>password</label>
            <input type="password" name="pass" required />
            </div>
            <div class="form-group">
            <input type="submit" name="submit" id="action" value="login" class="btn btn-info" />
            </div>
            </form>
        </div>
    </div>
</div>

 </body>
</html>
