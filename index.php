<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Travel Form</title>
    
    <style>
       *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background:blueviolet ;
        }

        .container{
            position: relative;
            max-width: 60%;
            background-color: purple;
            padding: 4px;
            margin: 15px auto;
            border: 5px solid black;
           
        }
      
        .container h1 , p{
            text-align: center;
            background-color: black;
            color: white;
            padding: 5px 0px;
        }

        input , textarea{
            display: block;
            width: 60%;
            margin: 9px auto;
            padding: 5px 9px;
            font-size: 15px;
            border: 2px solid black;
            border-radius: 4px;
            outline: none;

        }
        form{
            display: flex;
            align-items: center;
            justify-items: center;
            flex-direction: column;
        }
        .btn{
            background-color: white;
            background: white;
            padding: 9px  15px ;
            border: 2px solid black;
            border-radius: 2px ;
            font-weight: bolder;


        }
        .btn:hover{
            background-color: white;
            border-radius: 15px;
        }

        .submitMsg{
            font-size: 20px;
            color: green;
            font-weight: bolder;
            background-color: black;
        }

    </style>
</head>
<body>

    <div class="container">

    <h1>Welcome TO Swappy'S Trip Form</h1>
        <p>Fill the details and submit this form to confirm your set in this trip</p>
    
        <form action="actions\registrationConnection.php" method="post"> 

            <input type="text" name="name" id="name" placeholder="Enter Your Name: ">

            <input type="text" name="age" id="age" placeholder="Enter Your Age: ">

            <input type="text" name="Gender" id="Gender" placeholder="Enter Your Gender: ">

            <input type="text" name="Email" id="Email" placeholder="Enter Your Email: ">

            <input type="text" name="phone" id="phone" placeholder="Enter Your phone No: ">

            <textarea type="desc" name="desc" id="desc" cols="30" rows="10" placeholder="Enter Any Other Information Here: "></textarea>

            <button  type="submit" name="submit" id="submit" class="btn">Submit</button>
    
        </form>

    </div>
    

    <script src="index.js"></script>
</body>
</html>
