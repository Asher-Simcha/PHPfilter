<?php
// Author: Asher Simcha
// Date: 2-2018
// Description: <b>T</b>his is to write code then turn it into it's HTML couter part ....
// Version: 2
// last Modified: 3-2018

// MODIFIED shortened the replace code with a built in function



/*
notes that each symbol to be replaced are
SPACE  &#32; &nbsp;
` &#96;
~ &#126;
! &#33;
@ &#64;
# &#35;
$ &#36;
% &#37; 
^ &#94;
& &#38;  & amp;
* &#42;
( &#40;
) &#41;
- &#45; 
_ &#95;
+ &#43;
= &#61;
[ &#91;
{ &#123;
] &#93;
} &#125;
| &#124;
\ &#92;
: &#58;
; &#59;
' &#39; 
" &#34;  &quot;
, &#44;
< &#60;  &lt;
. &#46;
> &#62;  &gt;
/ &#47;
? &#63; 

<pre> defines preformatted text and keeps spaces and line breaks the same
*/
$message = NULL;
// for POST
// in final production the #, &, and SPACE's are not filtered out.
if(isset($_POST['text'])) {
    $message .= "<h3>This What it will Look Like on the POST</h3>\r\n";
    $message .= "\r\n<pre>\r\n";
    $message .= htmlspecialchars($_POST['text']);
    $message .= "\r\n</pre>\r\n\r\n";
    $message .= "<br />\r\n";
    
    $message .= "<h2>This is the part that you copy to your POST</h2>";
    $message .= "<pre>\r\n";
    $message .= "&#60;pre&#62;<br>\r\n";

    $message .= str_replace('&', '&#38;', htmlspecialchars($_POST['text']));
    $message .= "\r\n<br>&#60;&#47;pre&#62;";
    $message .= "\r\n</pre>\r\n";
    $message .= "<br />";

} 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding"><meta charset="utf-8">
<title>Filter For Forms On the Internet</title>
</head>
<body id="body" bgcolor="Gainsboro">
<?php if($message != NULL) { echo $message . "<br>"; } ?>
<h1>Filter For Forms On the Internet</h1>
Just enter the code information that usually is not allowed by POSTing your stuff like on Google, Facebook, etc.<br />
This will not shorten your code on the contrary...<br /> 
This is for changing non allowed symbols into character codes that are acceptable to most place you want to post non-allowed characters...<br />
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter the Text to be converted into HTML charater Set so you can display the code with worry of filters:<br />
    <textarea rows="35" cols="80" name="text"></textarea>
    <br>
    <input type="submit" value="Submit">
</form> 
<?php $message = NULL; $thisText = NULL; ?>

</body>
</html>