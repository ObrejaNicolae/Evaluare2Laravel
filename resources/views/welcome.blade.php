<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="title" class="form-control" name="title" >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">DESCRIPTION</label>
            <input type="text" class="form-control" name="description" >
        </div>
            <label for="exampleInputEmail1" class="form-label">Date</label>
            <input type="date" class="form-control" name="date" >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Location</label>
            <input type="title" class="form-control" name="location" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>

</html>