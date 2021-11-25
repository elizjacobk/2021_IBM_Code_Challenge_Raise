<!DOCTYPE html>
<head>
    <title>Add blog</title>
    <link rel="stylesheet" href="css/prof.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,600;1,100;1,300&display=swap" rel="stylesheet">
</head>
<body>
<main>
    

<h1>BLOG FORM</h1>
<div class="master">
    <form id="survey-form" action="include/profileback.php" method="POST">
    <div class="form-rows">
        <div class="labels">
         <label for="name" name="Title" id="name-label">Title</label>
        </div>
        <div class="fields">
          <input type="text" name="Title" id="name" class="input-field" placeholder="Enter your name" required>
        </div>
    </div>
        <div class="form-rows">
        <div class="labels tt">
         <label for="name" id="name-label">Browse</label>
         <input name="img" type="file" >
        </div>
        <div class="fields">
        </div>
    </div>
 
    <div class="form-rows">
        <div class="labels">
         <label for="event-details"> Enter your Blog content</label>
        </div>
        <div class="fields">
          <textarea  name="content" id="event-details" class="input-field" placeholder="Enter details" style="height: 400px;resize:vertical;font-family: Open Sans Condensed;" cols="25" rows="25"required>
          </textarea>
        </div>
    </div>

    <button name= "Submit" class="button" id="submit" type="submit">Submit</button>
    </form>
</div>
</main>
</body>
</html>

    </section>