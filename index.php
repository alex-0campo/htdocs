<?php
    include($_SERVER['DOCUMENT_ROOT'] . 'templates/global.php');
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Passphrase Generator</title>
        <meta name="description" content="Multi-word passphrase with optional digits and special characters separator." />
        <meta name="keywords" content="random, multi-word, digits, special characters, separator" />
        <meta name="Author" content="Alex Ocampo" />
        <meta name="robots" content="INDEX,FOLLOW" />
        <meta name="color-scheme" content="light dark" />

        <!-- <link rel="icon" href="favicon.ico"> -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <!-- Inconsolata -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    </head>

    <body>
        <div class="class container">
            <?php include(D_TEMPLATES . "header.php"); ?>
        </div>

        <div class="class container bg-light">
            <p>
                Credits to <a href="https://theworld.com/~reinhold/diceware.html" target="_blank" 
                rel="noopener noreferrer">Diceware PassPhrase</a>; reading the article, inspired
                me to write a <a href="https://github.com/alex-0campo/RandPassphrase" target="_blank" 
                rel="noopener noreferrer">PowerShell Script</a>. For years the PS random passphrase
                generator helped me improved the passwords I used during my tenure as a Systems 
                Administrator/IT Manager at <a href="https://www.landesa.org" target="_blank" 
                rel="noopener noreferrer"> Landesa</a>. Fast forward; I'd like to rewrite the same 
                passphrase generator, except, this time I'll be coding in PHP.
            </p>

            <p><strong>Development currently in progress, please check back for more features...</strong></p>

            <div>
                <h1>Passphrase Generator</h1>
                <!-- passphrase options -->
                <label><strong>Select options:</strong></label>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <p>
                        <!-- other options here:<br />
                        separator: space or digits or digits + special chars?<br />
                        separator: same or different separator betwenn words?<br />
                        number of digits or digits + special chars?<br /> -->
                    </p>

                    <label for="num_words" style="width: 130px;">Number of words:</label>
                    <!-- <br /> -->
                    <select id="num_words" name="num_words" style="width: 120px; text-align: center;">
                        <option value=2 <?php if (isset($_POST['num_words']) && $_POST['num_words'] == 2) {
                            echo 'selected';
                        } ?>>2</option>

                        <option value=3 <?php if (isset($_POST['num_words']) && $_POST['num_words'] == 3) {
                            echo 'selected';
                        } ?>>3</option>

                        <option value=4 <?php if (isset($_POST['num_words']) && $_POST['num_words'] == 4) {
                            echo 'selected';
                        } ?>>4</option>  

                        <option value=5 <?php if (isset($_POST['num_words']) && $_POST['num_words'] == 5) {
                            echo 'selected';
                        } ?>>5</option>
                    </select><br />

                    <!-- separator: coding in progress... -->

                    <label style="width: 130px; margin-top:4px;"><strong>Separator:</strong></label>
                    <br />
                    <label for="separator_type" style="width: 130px;">Type:</label>
                    <!-- <br /> -->
                    <select id="separator_type" name="separator_type" style="width: 120px; text-align: center;">
                        <option value="space" <?php if (isset($_POST['separator_type']) && $_POST['separator_type'] == 'space') {
                            echo 'selected';
                        } ?>>space</option>

                        <option value="digits" <?php if (isset($_POST['separator_type']) && $_POST['separator_type'] == 'digits') {
                            echo 'selected';
                        } ?>>digits</option>

                        <option value="digits_splchars" <?php if (isset($_POST['separator_type']) && $_POST['separator_type'] == 'digits_splchars') {
                            echo 'selected';
                        } ?>>digits+splChars</option>
                    </select><br />
                        
                    <label for="repeat_unique" style="width: 130px;">Repeat/Unique:</label>            
                    <select id="repeat_unique" name="repeat_unique" style="width: 120px; text-align: center;">
                        <option value=2 <?php if (isset($_POST['repeat_unique']) && $_POST['repeat_unique'] == 2) {
                            echo 'selected';
                        } ?>>Repeat</option>

                        <option value=3 <?php if (isset($_POST['repeat_unique']) && $_POST['repeat_unique'] == 3) {
                            echo 'selected';
                        } ?>>Unique</option>
                    </select><br />
                    
                
                    <!-- 
                        * if separator != space hide repeat_unique && num_chars
                        * then code here...
                        * display repeat_unique && num_chars
                        * then POST selected values
                        * and code... 
                    -->
                
                    <div>
                        <label for="num_chars" style="width: 130px;">Number of chars:</label>
                        <select id="num_chars" name="num_chars" style="width: 120px; text-align: center;">
                            <option value=2 <?php if (isset($_POST['num_chars']) && $_POST['num_chars'] == 2) {
                                echo 'selected';
                            } ?>>2</option>

                            <option value=3 <?php if (isset($_POST['num_chars']) && $_POST['num_chars'] == 3) {
                                echo 'selected';
                            } ?>>3</option>

                            <option value=4 <?php if (isset($_POST['num_chars']) && $_POST['num_chars'] == 4) {
                                echo 'selected';
                            } ?>>4</option> 

                            <option value=5 <?php if (isset($_POST['num_chars']) && $_POST['num_chars'] == 5) {
                                echo 'selected';
                            } ?>>5</option>
                        </select><br />
                    </div>
                    <!-- work in progress..... -->
                
                    <input type="submit" style="width: 120px; margin-left:135px; margin-top:5px;">
                </form> 
            </div>
            <br />       

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num_words = validate_input($_POST['num_words']);
                    $repeat_unique = validate_input($_POST['repeat_unique']);
                    $num_chars = intval(validate_input($_POST['num_chars']));

                    include './function_library.php';

                    $keys = random_key($_POST['num_words']); // word ID(s)
        
                    $jsonContent = file_get_contents("./indexedWords.json"); // import table of words
                    $arr = json_decode($jsonContent, true); // json content to array
                    $passphrase = array();
                
                    for ($i=0; $i < count($keys); $i++) {
                
                        // $passphrase = randToUpper($arr[$keys[$i]]) . " ";
                        array_push($passphrase, randToUpper($arr[$keys[$i]]));
                    }
                
                    // assign post value instead of hard-coded number of chars (4)
                    // separator option: same or different separator between words
                    $separator = implode(separator($num_chars, true, true));
                    $separator = " " . $separator . " ";

                    // random separator string
                    // $obj_array = separator(4, true, true);
                    // echo implode('', $obj_array);
                    
                    echo '<br /><h5>Here\'s your requested passphrase: </h5>';
                    echo '<p style="font-family: Inconsolata, monospace;">'; // font family that differentiates upper case i & lower case L
                    $i = 0;
                    while ($i <= count($passphrase) - 1) {
                        // no separator after the last element of $passphrase array
                        if ($i <= count($passphrase) - 2) {
                            echo $passphrase[$i] . $separator;
                        } else {
                            echo $passphrase[$i];
                        }
                        $i++;
                    }
                    // echo '</p>';
                }

                // sanitize user input before posting
                function validate_input($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
        
                    return $data;
                }
            ?>   
        </div>

        <div class="class container">
            <?php include(D_TEMPLATES . "footer.php"); ?>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
            
        </script>
    </body>
</html>