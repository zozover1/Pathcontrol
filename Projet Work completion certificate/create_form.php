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
                <th scope='col'>Would you create a new form ?</th>
            </tr>
        </thead>
    <tbody>
    </tbody>
    </table>
<form method="post" action="create_template.php" class="m-3">
    <div class="form-group">
        <label for="title">Survey title</label>
        <input type="text" class="form-control" name="titre" id="title" placeholder="Type here..">
    </div>
    <div class="form-group">
        <label for="url">Google form URL</label>
        <input type="text" class="form-control" name="url" id="url" placeholder="Type here..">
    </div>
    <div class="form-group form-check">
        <label class="form-check-label" for="exampleCheck1">This survey need a work completion certificate :</label>
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1" >
    </div>
        <button type="submit" class="btn btn-outline-success form-control">Submit</button>
</form>
</div>
</body>
</html>
