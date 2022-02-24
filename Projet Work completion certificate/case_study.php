<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body style="background-color: #252525;">
<div class="mx-auto card border-success m-3 rounded-3 border-3" style="width: 50%;">
<table class='table table-light table-striped table-hover'>
        <thead class='table-primary'>
            <tr align='center'>
                <th><i class='bi bi-plus-circle'></i></th>
                <th scope='col'>Would you create a new case study ?</th>
            </tr> 
        </thead>
    <tbody>
    </tbody>
    </table>
<form method="post" action='../vendor/tecnickcom/tcpdf/examples/example_case_study.php' enctype="multipart/form-data" class="m-3">
<h1 style='text-align: center;'>Case Study</h1><hr>
    <h3 style='text-align: center;'>Initial</h3>
    <div class='form-group'>
        <label for='Day'>Day</label>
        <select class='form-control' id='Day' name='Day'>
  <option>Monday</option>
  <option>Tuesday</option>
  <option>Wednesday</option>
  <option>Thursday</option>
  <option>Friday</option>
  <option>Saturday</option>
  <option>Sunday</option>
</select>
    </div>
    <div class='form-group'>
        <label for='Date'>Date</label>
        <input type='date' class='form-control' id='Date' name='Date' required pattern='[0-9]{4}-[0-9]{2}-[0-9]{2}'>
    </div>
    <div class='form-group'>
        <label for='Place'>Place</label>
        <input type='text' class='form-control' name='Place' id='Place' placeholder='City..'>
    </div><hr>
    <h3 style='text-align: center;'>Case Informations</h3>
    <div class='form-group'>
        <label for='Project'>Project Name</label>
        <input type='text' class='form-control' name='Project' id='Project' placeholder='More Detail Here..'>
    </div>
    <div class='form-group'>
        <label for='Summary'>Challenge Summary</label>
        <textarea class='form-control' rows='3' name='Summary' id='Summary' placeholder='More Detail Here..'></textarea>
    </div>
    <div class='form-group'>
        <label for='Solution'>Applied Solution</label>
        <textarea class='form-control' rows='3' name='Solution' id='Solution' placeholder='More Detail Here..'></textarea>
    </div>
    <div class='form-group'>
        <label for='Impact'>Impact & Added Value</label>
        <textarea class='form-control' rows='3' name='Impact' id='Impact' placeholder='More Detail Here..'></textarea>
    </div>
    <div class='form-group'>
        <label for='image'>Add a picture</label>
        <input name='photo' type='file' accept='image/*' class='form-control' id='image' placeholder='More Detail Here..'>
    </div><hr>
        <button type='submit' class='btn btn-outline-success form-control'>Submit</button>
</form>
</div>
</body>
</html>
<script>document.getElementById('Date').valueAsDate = new Date();</script>