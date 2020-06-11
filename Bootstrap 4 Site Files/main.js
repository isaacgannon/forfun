$('#table').DataTable({
    ajax: {
        url: 'csv.json',
        dataSrc: "carBrands"
    },
    columns: [
        { data: 'Car Brand' },
        { data: 'Car Make' },
        { data: 'Car size' }
    ],
});

    //$(function(){ 
     // $("#getusers").on('click', function(){ 
      /*$.ajax({ 
        method: "GET", 
        
        url: "getrecords_ajax.php",
      }).done(function( data ) { 
        var result= $.parseJSON(data); 
        var string='<table width="100%"><tr> <th>#</th><th>Name</th> <th>Email</th><tr>';
 
       /* from result create a string of data and append to the div */
      
       /* $.each( result, function( key, value ) { 
          
          string += "<tr> <td>"+value['id'] + "</td><td>"+value['first_name']+' '+value['last_name']+'</td>  \
                    <td>'+value['email']+"</td> </tr>"; 
              }); 
             string += '</table>'; 
          $("#records").html(string); 
       }); 
    }); 
}); 
*/

 /*$(document).ready(function() {

    $("#display").click(function() {                

      $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "index.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });
});
});
*/
/*var ajax = new XHTMLHttpRequest();
var method = "GET";
var url = "index.php";
var asynchronous = true;

ajax.open(method, url, asynchronous);
ajax.send();

ajax.onreadystatechange = function()
{
  if (this.readyState == 4 && this.status == 200)
  {
    var data = JSON.parse(this.responseText);
    console.log(data);
  }
}


