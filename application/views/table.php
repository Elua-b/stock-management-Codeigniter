<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dash2.css">
    <script src="https://kit.fontawesome.com/c72e7886b1.js"></script>   
    <style>
       *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}


.head{
height: 10vh;
display: flex;
padding-top: 20px;
color: white;
justify-content: space-between;
width: 100%;
float: left;
background-color:#47ad83 ;
}
.sidebar{
    color: white;
    width: 20%;
    height: 95vh;
    float:left;
    background-color: #2a3d35;
    padding: 20px;
}
h1{
    font-size: 20px;
}
.head i{
    margin-top: 5px;
    margin-left: 8px;
}
.head h1{
margin-left: 20px;
}
a{
    text-decoration: none;
    color: white;
}
li{
    list-style: none;
    display: flex;
    
    
}
li a{
    margin-left: 20px;
}
#pro{
    margin-left: 25px;
}
#view{
    margin-left: 26px;
}
#exa{
    margin-left: 25px;
}
li{
    padding-top: 60px;
}
.sidebar2{
    width: 35%;
    background-color: #2a3d35;
    float: right;
    height: 95vh;
}
.body{
    float: left;
    width: 45%;
    /* background-color: rgb(110, 98, 98); */
    height: 95vh;
    /* margin-top: -2rem; */
}
#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }
  input[type=text],input[type=number], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  table{
    margin-top: -20px;
  }
  
  input[type=submit] {
    width: 100%;
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  input[type=search]{
    padding-left: 10px;
    border-radius: 5px;
    border: none;
  }
  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  label{
    color: white;
  }
  h1{
    color: white;
    text-align: center;
  }
  table{
    
  } 
  p{
    text-align: center;
   
  }
  td a{
    color: black;
  }
  .delete{
    margin-left: 30px;
    color: red;
  }
  .edit{
    color: blue;
  }
 .actions{
  padding-left:  20px;
 }
 
    </style>
</head>
<body>
    <div>
        <div class="head">
            <i class="fa-solid fa-business-time"></i>
            <h1>Stock management</h1>
            <input type="search" placeholder="Search...">
            
            
        </div>
        
        <div class="sidebar">
            <nav>
              <ul>
                <li>
                    <i class="fa-solid fa-cookie"></i>
                    <a href="<?php echo base_url().'index.php/product/index';?>" id="pro">Products</a>
                </li>
                <li>
                    <i class="fa-solid fa-truck-moving"></i>
                    <a id="inv" href="<?php echo base_url().'index.php/outgoing/index';?>">Outgoing</a>
                </li>
                <li>
                    <i class="fa-brands fa-intercom"></i>
                    <a href="<?php echo base_url().'index.php/inventory/index';?>" id="view">Inventories</a>
                </li>
                <li> 
                    <i class="fa-brands fa-first-order-alt"></i>
                    <a href="" id="exa">stock</a> 
                </li>
            </ul>
            </nav>
        </div>
        <div class="body">
           
                
                <div>
                
                    <table id="customers">
                    
                        <tr>
                          <th>No</th>
                          <th>Quantity</th>
                          <th>ProductId</th>
                          <th>Action</th>
                          
                        </tr>
                        
                        <?php
                        $no=1;
                         if(!empty($inventories)){foreach($inventories as $user){?>
                       <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $user['quantity'];?></td>
                        <td><?php echo $user['productId'];?></td>  
                        <?php $no++; ?>
                        <td class="actions"><a class="edit" href="<?php echo base_url().'index.php/inventory/change/'.$user['inventory_id']?>"><i class="fa-solid fa-pen"></i></a>
                        <a class="delete" href="<?php echo base_url().'index.php/inventory/delete/'.$user['inventory_id']?>"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                        </tr>
                        <?php }}else{?>
                        <tr>
                            <td>Records not found</td>
                        </tr>
                        <?php } ?>
                      </table> 
                </div>
        </div>
        <div class="sidebar2">
          <form action="<?php echo base_url().'index.php/inventory/display' ?>" method="POST">
            <h1>inventories</h1>
            <label for="fname">quantity</label>
            <input type="text" id="fname" value="<?php echo set_value('quantity') ?>" name="quantity" placeholder="Your quantity..">
        
            <label for="brand">Product Id</label>
            <input type="number" id="lname" value="<?php echo set_value('productId') ?>" name="productId" placeholder="Your productId...">
        
           
            <input type="submit" value="Submit">
          </form>
        </div>
    </div>
</body>
</html>