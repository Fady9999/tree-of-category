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
  <br /><br />
  <!--start add form-->
<div class="container" style="width:900px;">
   <br /><br />
   <div class="row">
        <div class="col-md-12">
            <h3 align="center">Add New Category</h3>
            <br />
            <form method="post" id="treeview_form">
            <div class="form-group">
            <label>Select Parent Category</label>
            <select name="parent_category" id="parent_category" class="form-control">
            
            </select>
            </div>
            <div class="form-group">
            <label>Enter Category Name</label>
            <input type="text" name="category_name" id="category_name" class="form-control">
            </div>
            <div class="form-group">
            <input type="submit" name="action" id="action" value="Add" class="btn btn-info" />
            </div>
            </form>
        </div>
    </div>
</div>
<!--end add form -->

<!--start delete form-->
<div class="container" style="width:900px;">
   <br /><br />
   <div class="row">
        <div class="col-md-12">
            <h3 align="center">delete Category</h3>
            <br />
            <form method="post" id="treeview_delete_form">
            <div class="form-group">
            <label>Select Category</label>
            <select name="parent_delete_category" id="delete_parent_category" class="form-control">
            
            </select>
            </div>
                <div class="form-group">
                    <input type="submit" name="action" id="action" value="Delete" class="btn btn-info" />
                </div>
            </form>
        </div>
    </div>
</div>
<!--end delete form-->

<!--start edit form-->
<div class="container" style="width:900px;">
   <br /><br />
   <div class="row">
        <div class="col-md-12">
            <h3 align="center">edit Category name</h3>
            <br />
            <form method="post" id="treeview_edit_form">
                <div class="form-group">
                <label>Select Category</label>
                    <select name="parent_edit_category" id="edit_parent_category" class="form-control">
                    </select>
                </div>
                <div class="form-group">
                <label>Enter New Category Name</label>
                <input type="text" name="new_category_name" id="new_category_name" class="form-control">
                </div>
                <div class="form-group">
                <input type="submit" name="action" id="action" value="Edit" class="btn btn-info" />
                </div>
            </form>
        </div>
    </div>
</div>
<!--end edit form-->
    <div class="col-md-12">
     <h3 align="center">Category Tree</h3>
     <br />
     <div id="treeview"></div>
    </div>
   </div>
  </div>
 </body>
</html>
<script>
 $(document).ready(function(){

  fill_parent_category();

  fill_treeview();
  
  function fill_treeview()
  {
   $.ajax({
    url:"controller/fetch.php",
    dataType:"json",
    success:function(data){
     $('#treeview').treeview({
      data:data
     });
    }
   })
  }

  function fill_parent_category()
  {
   $.ajax({
    url:'controller/fill_parent_category.php',
    success:function(data){
     $('#parent_category').html(data);
     $('#delete_parent_category').html(data);
     $('#edit_parent_category').html(data);
    }
   });
   
  }

  $('#treeview_form').on('submit', function(event){
   event.preventDefault();
   $.ajax({
    url:"controller/add.php",
    method:"POST",
    data:$(this).serialize(),
    success:function(data){
     fill_treeview();
     fill_parent_category();
     $('#treeview_form')[0].reset();
     alert(data);
    }
   })
  });

  $('#treeview_delete_form').on('submit', function(event){
   event.preventDefault();
   $.ajax({
    url:"controller/delete.php",
    method:"POST",
    data:$(this).serialize(),
    success:function(data){
     fill_treeview();
     fill_parent_category();
     $('#treeview_delete_form')[0].reset();
     alert(data);
    }
   })
  });

  $('#treeview_edit_form').on('submit', function(event){
   event.preventDefault();
   $.ajax({
    url:"controller/edit.php",
    method:"POST",
    data:$(this).serialize(),
    success:function(data){
     fill_treeview();
     fill_parent_category();
     $('#treeview_edit_form')[0].reset();
     alert(data);
    }
   })
  });
 });
</script>