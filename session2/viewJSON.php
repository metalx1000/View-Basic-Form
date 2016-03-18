<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Example Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
      $(document).ready(function(){
        updateList();
      });

      function updateList(){
        var url = "getJSON.php";
        var url = "data.php";
        $.get( url, function( data ) {
          $("#list").html("");
          data = data.split("\n");
          for(var i=0;i<data.length;i++){
            if(data[i] != ""){
              var json = JSON.parse(data[i]);
              var name = json.name;
              var title= json.title;
              var phone = json.phone;
              //comments = decodeURIComponent(comments);
              $("#list").append("<tr class='entry'>"+
                  "<td>"+name+"</td>"+
                  "<td>"+phone+"</td>"+
                  "<td>"+title+"</td>"+
                  "</tr>");
            }
          }
        });
      }
    </script>
    <body>

      <div class="container">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Phone #</th>
              <th>Title</th>
            </tr>
          </thead>
          <tbody id="list">
          </tbody>
        </table>


      </div>

    </body>
</html>


