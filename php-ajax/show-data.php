<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #success-message {
            background: green;
            color: red;
        }
        #error-message {
            background: red;
            color: white;
        }
    </style>
</head>
<body>

    <table id="main" border="0" cellspacing="0">
        <tr>
            <td id="header">
                <h1>Add Records with PHP &  Ajax</h1>
            </td>
        </tr>
        <tr>
            <td id="table-load">
                <input type="button" id="load-button" value="Load Data"/>
            </td>
        </tr>
        <tr>
            <td id="table-form">
                <form id="addForm">
                    First Name : <input type="text" id="fname"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Last Name : <input type="text" id="lname"/>
                    <input type="submit" id="save-button" value="save"/>
                </form>
            </td>
        </tr>
        <tr>
            <td id="table-data">
                <table border="1" width="100%" cellspacing="10px">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <tr>
                            <td align="center">1</td>
                            <td>Yahoo Baba</td>
                        </tr>
                    </tr>
                </table>

            </td>
        </tr>

    </table>

    <div id="error-message"></div>
    <div id="success-message"></div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            function loadTable(){
                $.ajax({
                    url: "ajax-load.php",
                    type: "POST", 
                    success : function($data) {
                        $("#table-data") .html(data);
                    }
                });
            }; 
            loadTable();

            $("$save-button").on("click", function(e) {
                e.preventDefault();
                var fname = $("$fname"). val();
                var lname = $("$lname"). val();

                if(fname == "" || lname == ""){
                    $("#error-message").html("All fields are required.").slideDown();
                    $("#success-message").slideUp();
                }else {
                    
                    $.$ajax({
                    url: "ajax-insert.php",
                    type: "POST", 
                    data: {first_name, last_name},
                    success : function($data) {

                        if(data == 1) {
                            loadTable();
                            $("#addForm").trigger("reset"); 

                            $("#success-message").html("Data inserted Successfully").slideDown();
                            $("#error-message").slideUp();
                        }else {

                            $("#error-message").html("Can't Save Record.").slideDown();
                            $("#success-message").slideUp();
                        }

                       
                    }
                });
                }

               
            });
        });
    </script>

   <!-- <script type="text/javascript">
        $(document).ready(function(){
            $("#load-button").on("click", function(e){
                $.ajax({
                    url: "ajax-load.php",
                    type: "POST", 
                    success : function($data) {
                        $("#table-data") .html(data);
                    }
                });
            }); 
        });
    </script> -->
    
</body>
</html>