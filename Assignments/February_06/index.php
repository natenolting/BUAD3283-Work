<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>Contact Form </title>
</head>
<body>
  <h1> Contact Form </h1>
   <form action="endpoint.php" method="get" class="form">
  <fieldset>
<legend> Contact Form </legend>
<div class="form-group"><label for="name">Name</label>
  <input type="text" name="name" value="" id="name" placeholder="Type Your Name"></div>
<div class="form-group"><label for="email">Email</label>
  <input type="email" name="email" value="" id="email" placeholder="Type Your Email Address"></div>
<div class="form-group"><label for="phone">Phone</label>
    <input type="phone" name="phone" value="" id="phone" placeholder="Type Your Phone Number"></div>
<div class="form-group"><label for="comment" class="label-textarea">Notes</label>
  <textarea id="comment" name="comment" rows="6" cols="30"></textarea></div>
 <div class="form-group"><label for="submit" class="hidden"></label>
   <input type="Submit" name="Submit" value="Submit" id="Submit" class="input-submit"></div>
  </fieldset>
</form>
</body>
</html>
