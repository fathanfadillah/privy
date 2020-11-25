<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privy Auth</title>
    @include('resources.style')
</head>

<body>
    <div class="container m-auto">
        <div class="card mx-auto my-5" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <form action="">
                    <div>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
@include('resources.script')

</html>