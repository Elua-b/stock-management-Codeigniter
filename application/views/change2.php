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
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        input {}

        .head {
            height: 10vh;
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
            color: white;
            width: 100%;
            float: left;
            background-color: #47ad83;
        }

        .sidebar {
            color: white;
            width: 20%;
            height: 95vh;
            float: left;
            background-color: #2a3d35;
            padding: 20px;
        }

        h1 {
            font-size: 20px;
        }

        .head i {
            margin-top: 5px;
            margin-left: 8px;
        }

        .head h1 {
            margin-left: 20px;
        }

        a {
            text-decoration: none;
            color: white;
        }

        li {
            list-style: none;
            display: flex;


        }

        input[type=search] {
            padding-left: 10px;
            border-radius: 5px;
            border: none;
        }

        li a {
            margin-left: 20px;
        }

        #pro {
            margin-left: 25px;
        }

        #view {
            margin-left: 26px;
        }

        #exa {
            margin-left: 25px;
        }

        li {
            padding-top: 60px;
        }

        .sidebar2 {
            width: 35%;
            background-color: #2a3d35;
            float: right;
            height: 95vh;
        }

        .body {
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

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        input[type=text],
        input[type=number],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        label {
            color: white;
        }

        h1 {
            color: white;
            text-align: center;
        }

        table {
            margin-top: -8rem;
        }

        p {
            text-align: center;

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
                        <a href="<?php echo base_url() . 'index.php/product/index'; ?>" id="pro">Products</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-truck-moving"></i>
                        <a id="inv" href="<?php echo base_url().'index.php/outgoing/index';?>">Outgoing</a>
                    </li>
                    <li>
                        <i class="fa-brands fa-intercom"></i>
                        <a href="<?php echo base_url() . 'index.php/inventory/index'; ?>" id="view">Inventories</a>
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
                <!-- <table id="customers">
                        <tr>
                          <th>Company</th>
                          <th>Contact</th>
                          <th>Country</th>
                        </tr>
                        <tr>
                          <td>Alfreds Futterkiste</td>
                          <td>Maria Anders</td>
                          <td>Germany</td>
                        </tr>
                        <tr>
                          <td>Berglunds snabbköp</td>
                          <td>Christina Berglund</td>
                          <td>Sweden</td>
                        </tr>
                        <tr>
                          <td>Centro comercial Moctezuma</td>
                          <td>Francisco Chang</td>
                          <td>Mexico</td>
                        </tr>
                        <tr>
                          <td>Ernst Handel</td>
                          <td>Roland Mendel</td>
                          <td>Austria</td>
                        </tr>
                        <tr>
                          <td>Island Trading</td>
                          <td>Helen Bennett</td>
                          <td>UK</td>
                        </tr>
                        <tr>
                          <td>Königlich Essen</td>
                          <td>Philip Cramer</td>
                          <td>Germany</td>
                        </tr>
                        <tr>
                          <td>Laughing Bacchus Winecellars</td>
                          <td>Yoshi Tannamuri</td>
                          <td>Canada</td>
                        </tr>
                        <tr>
                          <td>Magazzini Alimentari Riuniti</td>
                          <td>Giovanni Rovelli</td>
                          <td>Italy</td>
                        </tr>
                        <tr>
                          <td>North/South</td>
                          <td>Simon Crowther</td>
                          <td>UK</td>
                        </tr>
                        <tr>
                          <td>Paris spécialités</td>
                          <td>Marie Bertrand</td>
                          <td>France</td>
                        </tr>
                      </table> -->
                <p>enter the items</p>
            </div>
        </div>
        <div class="sidebar2">
            <form action="" method="POST">
                <h1>Inventories</h1>
                <label for="fname">quantity</label>
                <input type="text" id="fname" value="<?php echo set_value('quantity', $user['quantity']) ?>" name="quantity" placeholder="Your quantity..">
                <p><?php echo form_error('quantity') ?></p> 
                <label for="brand">product Id</label>
                <input type="number" id="lname" value="<?php echo set_value('productId', $user['productId']) ?>" name="productId" placeholder="Your product Id..">
                <p><?php echo form_error('productId') ?></p> 

                <input type="submit" value="update" name="update">
            </form>
        </div>
    </div>
</body>

</html>