<!DOCTYPE html>
<!--
Burhanuddin Lokhandwala
Student Id - 991523243
SYST-10199 - Web Programming
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="main.css">
        <title></title>
    </head>
    <body>
        <section class="getContainer">
        <section id="header">
            <?php
        echo  "<img src='images/Tim-Hortons.jpg'  width=100% height=200px; >";
        echo "<center><h2>Welcome To Tim Hortons!</h2></center>"; 
        ?>
        </section>
        <section id="details">   
            <center>
            <h3>
                Menu
            </h3>
                <table class="tab2">
                    <tr>
                        <th>
                            Size
                        </th>
                        <th>
                            Price
                        </th>
                    </tr>
                    
                    <tr>
                        <td>Small</td>
                        <td>1.29</td>
                    </tr>
                    
                    <tr>
                        <td>Medium</td>
                        <td>1.59</td>
                    </tr>
                    
                    <tr>
                        <td>Large</td>
                        <td>2.10</td>
                    </tr>
                    
                    <tr>
                        <td>X-Large</td>
                        <td>2.59</td>
                    </tr>
                    
                </table>
                *Prices are Excluding Tax*
                </center>
        </section>
        <section id="order">
            <center>
            <form action="order.php" method="post">
                <h3>Welcome, what would you like today?</h3>
                <table id="tab1">
                    <tr>
                        <td><label>How many Coffee? - </label></td>
                        <td><input type="number" name="coffee" min="1" max="1000" value="1"></td>
                    </tr>                
                    <tr>
                        <td><label>Size</label></td>
                        <td>
                            <select name="size">
                                <option value="S" selected>Small</option>
                                <option value="M">Medium</option>
                                <option value="L" >Large</option>
                                <option value="XL">X-Large</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Cream -</label></td>
                        <td><input type="number" name="cream" min="0" max="10" value="0"></td>
                    </tr>
                    <tr>
                        <td><label>Sugar -</label></td>
                        <td><input type="number" name="sugar" min="0" max="10" value="0"></td>
                    </tr>
                    <tr colspan="2"><td></td><td><input type="submit" value="Order"></td>
                    </tr>
                
                </table>
            </form>
         </center>
        </section>
        </section>
    </body>
</html>
