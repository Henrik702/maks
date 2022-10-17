<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h5>Logistics</h5>
                </div>
                <div class="card-body">
                    <div class="container">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>product_id</th>
                                <th>warehouse_id</th>
                                <th>arrival</th>
                                <th>movement</th>
                                <th>sale</th>
                                <th></th>
                                <th>warehouse_name</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($logistics as $logistic)
                                <tr>
                                    <td>{{$logistic->product_id}}</td>
                                    <td>{{$logistic->warehouse_id}}</td>
                                    <td>{{$logistic->arrival}}</td>
                                    <td>{{$logistic->movement}}</td>
                                    <td>{{$logistic->sale}}</td>
                                    <td></td>
                                    <td style="background-color: #e2edf4">{{ $logistic->warehouses->warehouse_name }}</td>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="{{url('/order-items/')}}" style="margin-left: 560px">
    <button class="btn btn-primary">
        Products
    </button>
</a>


</body>
</html>
