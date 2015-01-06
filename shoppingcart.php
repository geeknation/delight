<?php require_once('connection/dbConnect.php')?>
<!-- Delight 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.Delight.com/preview/Delight_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="Delight_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "Delight_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

function myFunction() {
    var x = document.getElementById("quantity1").value;
    var y = document.getElementById("price").value;	
    var z = x * y;
	
	document.getElementById("total").value = z;
}
</script>


</head>

<body>
<?php
   $id = $_GET['id'];
   $queryy = "SELECT * FROM products where id = $id";
   $result=mysql_query($queryy,$connect);

    while ($row = mysql_fetch_assoc($result)) {
	  $description = $row['description'];
	  $price = $row['price'];
	  $quantity = $row['quantity'];
	  $image = $row['image'];
    }
	

?>

<div id="Delight_wrapper_sp">
<div id="Delight_header_wsp">
	<div id="Delight_header" class="header_subpage">
    	<div id="site_title"><a rel="nofollow" href="http://www.Delight.com/preview/Delight_385_floral_shop" title="Floral Shop">Floral Shop</a></div>
        <div id="Delight_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                
                <li><a href="login.html">Checkout</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="faqs.html">FAQs</a></li>
            </ul>
            <div id="Delight_search">
                <form action="#" method="get">
                  	<input type="text" value="Site Search" name="keyword" id="keyword" title="keyword" 
                  			onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  	<input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                </form>
            </div>
            <br style="clear: left" />
        </div> <!-- end of Delight_menu -->

    </div> <!-- END of header -->
</div> <!-- END of header wrapper -->
<div id="Delight_main_wrapper">
<div id="Delight_main">
	<div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>Categories</h3>   
            <div class="content"> 
                <ul class="sidebar_list">
                     <ul class="sidebar_list">
                   
                    <li><a href="#">Wedding</a></li>
                    <li><a href="#">Anniversary</a></li>
                    <li><a href="#">Birthday</a></li>
                    <li><a href="#">Baby Shower</a></li>
                    <li><a href="#">Valentine</a></li>
                    <li><a href="#">Bridal Shower</a></li>
                </ul>
                  
            </div>
        </div>
        <div class="sidebar_box"><span class="bottom"></span>
            <h3>Weekly Special</h3>   
            <div class="content special"> 
                <img src="images/product/valentine-cake-strawberries-Tamaras-Cakes-Oshkosh-WI.jpg" alt="Flowers" />
                <a href="#">strawberries Tamaras</a>
                <p>
                	Price:
                    <span class="price normal_price">Ksh1600</span>&nbsp;&nbsp;
                    <span class="price special_price">Ksh1300</span>
                </p>
            </div>
        </div>
    </div>
    
    <div id="content" class="right">
    	<h2>Shopping Cart</h2>
		<table width="700" border="0" cellpadding="5" cellspacing="0">
          	<tr bgcolor="#395015">
                <th width="168" align="left">Item</th> 
                <th width="188" align="left">Description</th> 
                <th width="60" align="center">Quantity</th> 
                <th width="80" align="right">Price</th> 
                <th width="80" align="right">Total</th> 
                <th width="64"> </th>
          	</tr>
            <tr bgcolor="#41581B">
                <td><img src="images/cakes/<?php echo $image?>" /></td> 
                <td><?php echo $description; ?></td> 
                <td align="center"><input name="quantity1" type="text" id="quantity1" value="" onchange="myFunction()" size="6" maxlength="2" /> </td>
				
                <td align="right" ><input type="text" name = "price" id="price" value = "<?php echo $price?>" readonly="readonly"/></td> 
                <td align="right"><input type = "text" name = "total" id = "total" readonly="readonly"</td>
                <td align="center"> <a href="#"><img src="images/remove.png" alt="remove" /><br />Remove</a> </td>
            </tr>
        </table>
		<div class="cleaner h20"></div>
        <div class="right"><a href="login.html?id=<?php echo $id; ?>&price=<?php echo $price; ?>" class="button">checkout</a></div>
        <div class="cleaner h20"></div>
        <div class="blank_box">
        	<a href="#"><img src="images/free_shipping.jpg" alt="Free Shipping" /></a>
        </div>    
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<div id="Delight_footer_wrapper">
<div id="Delight_footer">
	<div class="footer_left">
    	<a href="#"><img src="images/1311260370_paypal-straight.png" alt="Paypal" /></a>
        <a href="#"><img src="images/1311260374_mastercard-straight.png" alt="Master" /></a>
        <a href="#"><img src="images/1311260374_visa-straight.png" alt="Visa" /></a>
    </div>
	<div class="footer_right">
		<p><a href="index.php">Home</a> | <a href="about.html">About</a> | <a href="faqs.html">FAQs</a> | <a href="checkout.html">Checkout</a> | <a href="contact.html">Contact</a></p>
        <p>Copyright © 2014 <a href="#">delight</a> <!-- Credit: www.Delight.com --></p>
	</div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>

</body>
</html>