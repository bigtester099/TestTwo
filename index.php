<head>
  <title>Search</title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <link rel="stylesheet" type="text/css" href="style.css"/>
 </head>
 <body>
  <form method="POST" action="#">
   <input type="text" name="q" placeholder="Enter query"/>
   <input type="button" name="search" value="Search" data-toggle="modal" data-target="#mymodal">
   </form>
 </body>

<script>
  $.ajax({ type: "GET",
        url: 'search.php',
        success: function(data){ debugger $('#mymodal').modal('show');
        $('#mymodal:visible .modal-content .modal-body').html(e); } });
</script>

 <!-- The Modal -->
<div class="modal" id="mymodal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</d
