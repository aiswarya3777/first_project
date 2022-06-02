<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
        <!-- bootstrap button -->
        <!-- <button type="button" class="btn btn-primary">Primary</button> -->
        <!-- container-fluid will take 100% of the screen -->
        <!-- <div class="container-fluid"></div> -->
    <div class="container">
        <h1>Bootstrap</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem eaque, odio quae iure ex, sint amet harum accusantium debitis ab eligendi ut sit? Nesciunt delectus ipsam cumque unde optio doloribus fugiat quas incidunt id accusamus totam neque eveniet minima obcaecati tempora perferendis, ipsum iure fugit, nemo quidem commodi est. Non.</p>
        <div class="row">
            <div class="col-md-1">
                <img class="img-fluid" src="{{ asset('images/profile.jpg')}}" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nemo architecto blanditiis enim quaerat aut ad tempora officia odit rerum, sapiente iste, exercitationem tenetur consequatur mollitia atque vitae consectetur? Neque tempore a quia consequuntur vero maiores recusandae molestias suscipit officia beatae. Reiciendis voluptatibus sint laboriosam minima consectetur ipsam quae sapiente?
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus voluptatum dolore eveniet provident libero! Porro necessitatibus, exercitationem laborum velit sint nobis similique impedit. Assumenda error doloribus saepe sunt quod veritatis eligendi dicta, consectetur quo sit architecto dolor, iusto incidunt reiciendis illum nemo voluptatibus dolorem suscipit, dolore autem ducimus? Fugiat, nobis.
            </div>
            <div class="col-md-2 col-sm-4 col-6">
            </div>
            <div class="col-md-2 col-sm-4 col-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere rerum illum, dolorum dignissimos neque, ad ipsam voluptatem veritatis culpa enim veniam placeat magni aperiam quaerat, aspernatur sit iusto eius asperiores sint porro nostrum cumque hic necessitatibus vitae. Odio at iure ut sint et ex, eos incidunt laborum quam eveniet perspiciatis?</div>
        </div>
        <img class=" img-fluid img-thumbnail rounded float-right" src="{{ asset('images/profile.jpg')}}" alt="">
        <img src="{{asset('images/Art desgn.jpg')}}" alt="" class="rounded mx-auto d-block">
        <img src="{{asset('images/Art desgn.jpg')}}" alt="" class="rounded mx-auto d-block">
    </div>
</body>
</html>