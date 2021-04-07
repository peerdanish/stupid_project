function saveEmail()
{
if(document.getElementById("footer_email").value.length<8)
{
alert("Enter Correct Email");
break;
}	
else
try{
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
			
               alert( this.responseText);
            }
        };
	
        xmlhttp.open("GET", "php/saveEmail.php?email=" +  document.getElementById("footer_email").value, true);
        xmlhttp.send();
		
   }catch(e) {
   	alert("Error");
   }

	 
}