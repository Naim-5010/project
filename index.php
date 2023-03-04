
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project practic</title>
    <style>
    body{
        background:#ddd;
        font-family: verdana;
    }
    h1{
         margin-left:10px;
         font-family:arial black;
         text-transform:uppercase;
    }
    .container {
        width:85%;
        background:#00a8ff;
        padding:20px;
        border-radius:10px;

    }
    label{
         margin-left:10px;
         font-family:arial black;
         text-transform:uppercase;
    }
    input{
        display:block;
        margin-top:10px ;
        margin-bottom: 10px;
        padding:8px;
        padding-right:65%;
         margin-left:10px;
        font-size:16px;
    }
    select{
        display:block;
        margin-top:10px;
        margin-bottom:10px;
        padding:8px;
         margin-left:10px;
        padding-right:20%;
        text-align:center;
    }
    select option{
    }
    #submit{
        font-family:arial black;
        margin-left:10px;
        padding-right:74%;
        font-size:15px;
        text-transform:uppercase;
    }
    h2{
         margin-left:10px;

    }

    </style>
</head>
<body>

<div class="container">
    <h1>Strint Multipul Tool</h1>
    <form action="index.php" method="POST">
        <label for="input_string">Enter a String</label>
        <input type="text" placeholder="Type your string" id ="string" name="input_string">
        <label for="string_function">Select A Function</label>

        <select name="string_function" id="">
            <option value="strlen">Strlen</option>
            <option value="strrev">Strrev</option>
            <option value="strtoupper">Strtoupper</option>
            <option value="strtolower">Strtolower</option>
            <option value="ucfirst">Ucfirst</option>
            <option value="ucwords">ucwords</option>
            <option value="trim">Trim</option>
            <option value="str_repeat">Repeat 3 times</option>
        </select>

        <input type="submit" value="submit"id="submit" >

    </form>

    <?php
    if(isset($_POST['input_string']) && isset($_POST['string_function'])){
        $input_string = $_POST['input_string'];
        $string_function = $_POST['string_function'];

        switch($string_function){
            case 'strlen':
                $result = strlen($input_string);
                break;
            case 'strrev':
                $result = strrev($input_string);
                break;
            case 'strtoupper':
                 $result = strtoupper($input_string);
                 break;
            case 'strtolower':
                $result = strtolower($input_string);
                break;
            case 'ucfirst':
                $result = ucfirst($input_string);
                break;
            case 'ucwords':
                $result = ucwords($input_string);
                break;
            case 'trim':
                $result = trim($input_string);
                break;
            case 'str_repeat':
                $result = str_repeat($input_string,3);
                break;
            default:
                $result = "Invalid";

        }
        ?>

        <h2><?php echo "The result of " . $string_function . "Input : ". 
         $input_string . " Output : " . $result; ?></h2>

        <?php
   }
    ?>

</div>
    
</body>
</html>