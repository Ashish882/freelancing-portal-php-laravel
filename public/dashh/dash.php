<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    
  <meta charset="utf-8">
  
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="check.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">©FREELANCER</label>
      <ul>
   
        <li><a href="#">Jobs</a></li>
        <li><a href="#">Talent</a></li>
        <li><a href="#">Report</a></li>
        <li><a href="#">Message</a></li>
      </ul>
    </nav>
   



<div class="das">
   
    <form>
    
    <div class="form-check">
    <p>What would you like to do?</p>
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Create a new job post
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
  Edit an existing draft
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
  <label class="form-check-label" for="exampleRadios3">
  Reuse a previous job post
  </label>
</div>
</form>

<div class="form-group">
    <label for="exampleFormControlInput1">TITLE</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter name of your job project" style="width:500px">
  </div>
  <div class="form-group">
  
    <label for="exampleFormControlTextarea1">Description</label>
    <p>A good description includes:

   <ul><li>What the deliverable is</li>
<li>Type of freelancer or agency you're looking for</li>
<li>Anything unique about the project, team, or your company</li>
</ul>
  </p>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:500px"></textarea>
  </div>

  <div class="form-group"><p>Additional project files (optional)</p>
    <label for="exampleFormControlFile1"></label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    <p>You may attach up to 5 files under 100 MB each
    </p>
  </div>
  

  <div class="form-check">
  <p>What type of project do you have?
</p>
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    One Time Project
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Ongoing Project
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
  <label class="form-check-label" for="exampleRadios3">
    Complex Project
  </label>
</div>


<div class="form-check"><p>What level of experience should your freelancer have?
</p>
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Entry Level
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
   Intermediate
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
  <label class="form-check-label" for="exampleRadios3">
 Expert
  </label>
</div>


<div class="form-check"><p>
Who can see your job?
</p>
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Anyone
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
   Only ©FREELANCER
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
  <label class="form-check-label" for="exampleRadios3">
    Invite Only
  </label>
</div>


<div class="form-check"><p>How many people do you need for this job?
</p>
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
   One freelancer
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
   More Then One freelancer
  </label>
</div>

  </label>
</div>
</div>

<div class="est">
  <p>
        Enter your estimated budget
</p>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">$</span>
  
  </div>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
</div>

</div>

<div class="but">
           <input class="btn btn-primary" type="submit" value="Submit" style="padding-right: :500px">
</div>
        </form>
</div>

  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>