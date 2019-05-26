<!-- 
<?php
function id(){
if(isset($_POST['submitone'])){
    
    $companyid = $_POST['companyid'];
    $drake = mysqli_query($conn, "SELECT * FROM companysignup WHERE companyid ='$companyid' ");
  
    if ($drake->num_rows == 1)
    {

         $_SESSION['username'] = $companyid;
    
    

        header ('location:select.php');
    }
    
        
    else
    {
        echo '
        <div class="row">
            <div class="col-lg-5 col-lg-offset-4">
                <div class="alert alert-danger pull-right text-center" style="width:500px;padding-top:2px;margin:52px" role="alert">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                  <span class="sr-only">Error:</span>
                  Enter a valid ID
                </div>
            </div>
        </div>
        '
         ;
    }

}
}
?> -->