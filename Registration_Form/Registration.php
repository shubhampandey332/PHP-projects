<html>
    <head>
        <body>
            <style>
             
           
            form
            {
                position:relative;
                top:80px;
                left:480px;
                width:380px;
               height:400px;
               line-height:2;
               background-color:beige ;
                border:8px solid pink;

            }
            form .c
            {
              
              position:absolute;
              left:90px;

            }

         
            .s
            {
                position:relative;
                color:red; width:110px;height:30px;
                left:30px;
            }
            label{
                position:relative;
                left:20px;
            }
         
             
            </style>

            <script>
            function validation()
            {
               var result="true"
               var val=document.getElementsByName("email")[0].value;
               var atindex=val.indexOf('@');
               var dotindex=val.lastIndexOf('.');
               if(atindex<1||dotindex>=val.length-2||dotindex-atindex<3)
               {
                   result=false;
                   return result;
               }

            }
            </script>
        </body>

    </head>
    <body >
        <form action="http://localhost/app/Registration_Form/Reg_valid.php" onsubmit="return validation()" method="post"  id="header">
            
                <h2 style="color:red"> ___________Registration__________</h2>
          
           <label> Username</label></label>  <input type="text" autofocus name="name" class="c" required/><br/>
            
           <label> Password</label>  <input type="password" name="pwd" class="c" required/><br/>
            
            
            
                  
            <label>Gender</label>  <span class="c"><input type="radio" name="gender" value='Male'  required/>Male
                        <input type="radio" name="gender"  value='Female'  required/>Female
                        <input type="radio" name="gender"  value='Others'  required/>Others</span><br/>
            
                        <label> Email Id</label>  <input type="text" name="email" class="c" required/><br/>
            
                            <label> Dob</label>      <input type="date" name="dob" class="c" required/><br/>
            
                                <label>Mob No</label>    <input type="number" name="mob" class="c"   required/><br/>
             
                                    <label>Address</label><textarea name="adrs" class="c" required></textarea><br/><br/>
            
            <input type="submit" value="Register" class="s"/>
            <input type="button" value="Clear All" onclick="this.form.reset()" class="s"/>
            

            
        </form>
        <h3 style="position:relative; top:70px; left:510px">Already an user <a href="http://localhost/app/Registration_Form/login.php">click here</a> to login</h3>

        
      
    </body>
</html>