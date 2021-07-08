# phpEasy
an php package to make insert ,  update, delete and select operations more easy.  

so how to use this ? 
all the details are as follows:


to use it you need to first download and place this package in your main folder

*- Include
    then include this package where you want to use

        include 'phpEasy/mod.php';


*- Connection
 to connect to database or to get con object just add following method
    
        $conn = con("localhost","root","","stud_node");
        
 this method get 4 parameters hostname, username, password, and databasse name and it return connection object which you can use later.
    

*- Insert
    To insert Value just do following
    
        $key = array("stud_name","stud_city","stud_mobile");
        $val = array("kirit","ksd","7043805425");
        $ins = insert($conn,"table_name",$key,$val);
        
  first create a array which contains all colomn name which you want to insert
  then create secound array for values where add all values which you want to insert
  then just call insert() method which need 4 parameters 
      1 connection object which we get earlier 
      2 than table name in which table you want to insert data
      3 array of key values
      4 array of values 
  this method return result object on this object we can perform 
      mysqli_num_rows($result)
      mysqli_affected_rows($con)
      etc,.
        
*- Delete by Single Colomn Condition
    To Delete Value just do following
    
        $del = delete($conn,"table_name","stud_id","5");    

   for delete a record by only single colomn condtion just call delete() method,which take 4 parameters
   1 connection
   2 table name
   3 colomn name
   4 value which in that colomn
   

*- Delete by Multiple Colomn Condition
    To Delete Value just do following
    
        $key = array("stud_id","stud_city");
        $val = array("6","jnd");
        $del1 = deleteMany($conn,"table_name",$key,$val,"|");    

   for delete a record by multiple colomn condtion just call deleteMany() method,which take 5 parameters
   1 connection
   2 table name
   3 array of colomn name
   4 array of value which in that colomn \n
   5 in this parameter you can put any \n
        for AND use '&'
        for OR use '|'
   
   
