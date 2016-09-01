<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo esc_html( $form['title'] ); ?></title>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style type="text/css">
body {
	background:#3ebdab;
	padding: 0;
	font-family: sans-serif;
	font-size: 13px;
}
input,
textarea,
 select {
	font-family: 'Montserrat', sans-serif;
	line-height: 1.5;
	font-size: 1.4em;
	padding: 5px 10px;
	color: #fff;
	display: block;
	width: 100%;
	background: transparent;
}


input,
textarea {
	border: 3px solid #fff;
}


 textarea {
	min-height: 200px;
}

 input:focus,
 textarea:focus,
 label:active + input,
 label:active + textarea {
	outline: none;
	border: 3px solid #10689a;
}
select:focus {
	outline: none;
}

::-webkit-input-placeholder { /* WebKit browsers */
    color: #10689a;
    font-style: italic;
}

:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color: #10689a;
    font-style: italic;
}

::-moz-placeholder { /* Mozilla Firefox 19+ */
    color: #10689a;
    font-style: italic;
}

:-ms-input-placeholder { /* Internet Explorer 10+ */
    color: #10689a;
    font-style: italic;
}

 

.button {
	background: #10689a;
	border: none;
	color: #fff;
	width: auto;
	cursor: pointer;
	text-transform: uppercase;
	display: inline-block;
	padding: 15px 30px;
	font-size: 1.1em;
	border-radius: 2px;
	letter-spacing: 1px;
}

.button:hover {
	background: #1478b1;
}
 

 


</style>
<?php do_action( 'gfiframe_head', $form_id, $form ); ?>
</head>
<body>
<?php GFFormDisplay::print_form_scripts( $form, false ); // ajax = false ?>
<?php gravity_form( $form_id, $display_title, $display_description ); ?>
<?php wp_footer(); ?>
</body>
</html>
