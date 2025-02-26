<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Events</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            @foreach ($events as $event)
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{ $event->title }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $event->description }}</p>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $event->date }}</p>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $event->location }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm">
                                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            </div>
                            <div class="col-sm">
                                <form action="{{ route('events.destroy', $event->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>