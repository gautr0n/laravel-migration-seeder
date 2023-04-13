<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
  <title>Php Oop 2</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

    <div class="container">
        <div class="row">
            @forelse ( $trains as $train )
            <div class="col-2">
                <h3>{{ $train->company }}</h3>
                <div>{{ $train->train_code }}</div>
            </div>
            @empty

            @endforelse
        </div>
    </div>

</html>