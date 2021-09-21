<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Application for Mentorship
  </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

 

  <form id="form" method="GET" action="mentorship-form-bknd.php">
    <h1>Application for Mentorship</h1>
    <label for="name" class="form-label">NAME OF THE EMPLOYEE:</label>
    <input type="text" placeholder="Name" class="form-control" id="name" name="name" required>
    <br>

    <label for="eid" class="form-label">EID NUMBER:</label>
    <input type="number" placeholder="EIS NUMBER" class="form-control" id="eid" name="eid" required>

    <br>
    <label for="designation" class="form-label">DESIGNATION:</label>
    <select class="form-select" aria-label="Default select example" id="designation" name="designation" required>
      <option selected>E5</option>
      <option value="1">E6</option>
      <option value="2">E7</option>

    </select>

    <br>
    <label for="Qualification" class="form-label">Qualification:</label>
    <input type="text" placeholder="Qualification" class="form-control" id="Qualification" name="Qualification">
    <br>
    <label for="experience" class="form-label">No. of years of experience:</label>
    <input type="number" placeholder="experience" class="form-control" id="experience" name="experience" required>
    <br>
    <label for="Place of posting" class="form-label">Place of posting:</label>
    <input type="Address" placeholder="Place of posting" class="form-control" id="Placeofposting" name="Placeofposting" required>
    <br>

    <label for="residence " class="form-label"> Place of residence :</label>
    <input type="Address" placeholder="Place of residence " class="form-control" id="residence" name="residence" required>
    <br>
    <label for="contact" class="form-label">contact number:</label>
    <input type="number" placeholder="contact" class="form-control" id="contact" name="contact">
    <br>


    <div class="mb-3">
      <label for="Email" class="form-label">Email address:</label>
      <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
    </div>

    <br>



    <div class="mb-3">
      <label for="Textarea1" class="form-label">1. Do you have any prior experience or knowledge as a Mentor or Mentee in either an informal or formal set up? If yes, please describe briefly.</label>
      <textarea class="form-control" id="Textarea1" rows="3" required></textarea>
    </div>

    <br>
    <label for="lTextarea2" class="form-label">2. Have you undergone any Mentorship training in the past? If yes, please
      mention date, place & duration.</label>
    <textarea class="form-control" id="Textarea2" rows="3"></textarea>
    </div>
    <br>
    <label for="Textarea3" class="form-label">3. What are your strengths (at least three) which in your opinion will help you in taking up the role of a Mentor effectively?</label>
    <textarea class="form-control" id="Textarea3" rows="3"></textarea>
    </div>


    <br>
    <label for="QUESTION4" class="form-label">4. Please rate yourself on a scale of 10 (1 being lowest and 10 being
      highest) on your mentoring skills?</label>

    <input type="radio" class="form-check-input" name="rating" id="QUESTION4" alt="1" value="1">
    <input type="radio" class="form-check-input" name="rating" id="QUESTION4" alt="2" value="2">
    <input type="radio" class="form-check-input" name="rating" id="QUESTION4" alt="3" value="3">
    <input type="radio" class="form-check-input" name="rating" id="QUESTION4" alt="4" value="4">
    <input type="radio" class="form-check-input" name="rating" id="QUESTION4" alt="5" value="5">
    <input type="radio" class="form-check-input" name="rating" id="QUESTION4" alt="6" value="6">
    <input type="radio" class="form-check-input" name="rating" id="QUESTION4" alt="7" value="7">
    <input type="radio" class="form-check-input" name="rating" id="QUESTION4" alt="8" value="8">
    <input type="radio" class="form-check-input" name="rating" id="QUESTION4" alt="9" value="9">
    <input type="radio" class="form-check-input" name="rating" id="QUESTION4" alt="10" value="10">
    <br>

    </div>
    <BR>
    <button type="submit" class="btn btn-primary btn-lg">SUBMIT</button>

  </form>


  <br>



  
  <script src="elscript.js" async defer>



  </script>
</body>

</html>