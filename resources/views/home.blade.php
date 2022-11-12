<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bolt</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('products.add') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Név</label>
                        <div class="col-8">
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-4 col-form-label">Leírás</label>
                        <div class="col-8">
                            <textarea id="description" name="description" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-4 col-form-label">Ár</label>
                        <div class="col-8">
                            <input id="price" name="price" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-4 col-form-label">Kategória</label>
                        <div class="col-8">
                            <select id="category" name="category" class="custom-select">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="manufacturer" class="col-4 col-form-label">Gyártó</label>
                        <div class="col-8">
                            <select id="manufacturer" name="manufacturer" class="custom-select">
                                @foreach($manufacturers as $manufacturer)
                                <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input value="Mentés" type="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <table class="table table-striped">
                <tr>
                    <th>Név</th>
                    <th>Ár</th>
                    <th>Gyártó</th>
                    <th>Kategória</th>
                </tr>

                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->manufacturer->name }}</td>
                    <td>{{ $product->category->name }}</td>
                </tr>
                @endforeach

            </table>
        </div>
        <div class="row mt-5">
            <table class="table table-striped">
                <tr>
                    <th>Név</th>
                    <th>DB</th>
                </tr>

                @foreach($manufacturers as $manufacturer)
                <tr>
                    <td>{{ $manufacturer->name }}</td>
                    <td>{{ $manufacturer->products->count() }}</td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>

</body>

</html>