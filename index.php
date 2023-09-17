<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbucks</title>
    <style>
        body {
            background-color: green;
            text-align: center;
            
        
        }
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        h1
        {
            text-align: center;
        }
        legend
        {
            text-align: center;
            background-color: white;
        }
        form {
            display: inline-block;
            
        }
        fieldset
        {
            margin-left: ;
            background-color: white;
        }
        label
        {
            text-align: left;
        }

        input[type=number]{
            width: 80px;
        }

        select{
            width: 87px;
        }
        
        button{
            margin-top: 20px;
        }
        #name{
            width: 80px;
        }

    </style>
</head>
<body class="body">
    <img src="images/logo.png" height="200px" class=".img">
    <h2> Welcome to Star Bucks!!!!</h2>
    <form action="order.php" method="post">

        <fieldset>
            <legend>Please Order here: </legend>
            <table>
                <tr>
                    <td><label for="name">Enter your Name: </label></td>
                    <td><input type="text" name="name" id="name" ></td>
                </tr>
                <tr>
                    <td><label for="num">Number of coffees: </label></td>
                    <td><input type="number" name="number" id="num"  min="0" max="5"></td>
                </tr>
                <tr>
                    <td><label for="size">Size: </label></td>
                    <td><select name="size" id="size">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="exlarge">Extra Large</option>
                        </select></td>
                </tr>
                <tr></tr>
                    <td><label for="cream" >How many creams: </label></td>
                    <td><input type="number" id="cream" name="quantityc" min="0" max="5"></td>
                </tr>
                <tr>
                    <td><label for="sugar">How many sugars: </label></td>
                    <td><input type="number" id="sugar" name="quantitys" min="0" max="5"></td>
                </tr>
                
            
            </table>
            <button type="submit">Order</button>
                

        </fieldset>

    </form>
</body>
</html>