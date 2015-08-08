<?
$myFile = "signups.csv"; // the name of the file you're writing to

if($_POST){
    if (isset($_POST['interest'])) {
        $_POST['interest']=implode(',', $_POST['interest']);
    } else {
        $_POST['interest']='';
    }
    $fh = fopen($myFile, 'a+'); // opens the file for appending
    $comma_delmited_list = '"'.implode('","', $_POST).'"' . "\n"; // Makes a CSV list of your post data
    fwrite($fh, $comma_delmited_list);
    fclose($fh);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ANU Maker Club Registration Form</title>
<link rel="stylesheet" href="pure/pure-min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/*
When setting the primary font stack, apply it to the Pure grid units along
with `html`, `button`, `input`, `select`, and `textarea`. Pure Grids use
specific font stacks to ensure the greatest OS/browser compatibility.
*/
html, button, input, select, textarea,
.pure-g [class *= "pure-u"] {
    /* Set your content font stack here: */
    font-family: "Source Sans Pro", sans-serif;
}
h1,h2,h3{
    font-weight: 400;
}
</style>
</head>
<body>
    <div class="pure-g">
        <div class="pure-u-1-4"><p>&nbsp;</p></div>
    <div class="pure-u-1-2">
    <h1>ANU Maker Club Registration Form</h1>
    <h2>Join the ANU Maker Club today in six easy steps!</h2>
<form action='' method='post' class="pure-form pure-form-stacked">
    <fieldset>
        <label for="uid">ANU ID</label>
        <input class="pure-input-2-3" id="uid" type="text" placeholder="ANU ID" name="UID" pattern="[uU]([0-9]{7})" required>
        <br />
        <label for="name">Preferred Name</label>
        <input class="pure-input-2-3" id="name" type="text" placeholder="Name" name="name" required>
        <br />
        <label for="email">Preferred Contact Email</label>
        <input class="pure-input-2-3" id="email" type="email" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
        <br />
        <label id="interest">Interests</label>
        <label for="interest" class="pure-checkbox">
        <input id= "interest" type="checkbox" name="interest[]" value="Fabrics/Sewing" />Fabrics/Sewing</label>
        <label for="interest" class="pure-checkbox">
        <input id= "interest" type="checkbox" name="interest[]" value="3D Printing" />3D Printing</label>
        <label for="interest" class="pure-checkbox">
        <input id= "interest" type="checkbox" name="interest[]" value="Shapeable Plastic" />Shapeable Plastic</label>
        <label for="interest" class="pure-checkbox">
        <input id= "interest" type="checkbox" name="interest[]" value="CAD" />CAD (Computer-aided Design)</label>
        <input class="pure-input-2-3" id="interest" type="text" placeholder="Other ..." name="interest[]">
        <br />
        <label for="teach">What would you like to teach?</label>
        <textarea class="pure-input-2-3" id="teach" name="teach"></textarea>
        <br />
        <label for="improve">Given something to improve, you would usually first ...</label>
        <select class="pure-input-2-3" id="improve" name="improve" required>
            <option></option>
            <option>make it look better</option>
            <option>make it do more things</option>
            <option>make it do the same thing better</option>
        </select>
        <br />
        <button type="submit" class="pure-button pure-button-primary">Register</button>
    </fieldset>
</form>
</div>
    <div class="pure-u-1-4"><p>&nbsp;</p></div>
    </div>
</body>
</html>