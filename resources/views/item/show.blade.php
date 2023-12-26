<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>App</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-..."
      crossorigin="anonymous">
  </head>
<body>
    <div class="container-fluid">
        <div class="row">
            <x-side-navbar />

            <main class="col-10 bg-light">
            <div class="row">
                <div class="col">
                <div class="list-group text-lg-start mt-3">
                    <div class="list-group-item list-group-item-action">
                    <span class="mx-2"><a href="/show"><i class="fas fa-list"></a></i></span>
                </div>
                <p class="mt-3 mx-2"><a href="">Items List</a></p>
                <div class="d-flex justify-content-end">
                <button class="float-end" style="background-color : yellow">+ Add Items</button>
                </div>
                <div class="dropdown py-5">
                    <div>Show:
                    <button class="border-sm dropdown-toggle bg-none" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color : yellow">
                        10 rows
                    </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <table class="table">
                    <tr style="background-color : yellow">
                        <th>Action</th>
                        <th>No</th>
                        <th>Item</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Owner</th>
                    </tr> 
                    </div>
                    <div class="col">                
                    @foreach($items as $item)
                    <tr>
                        <td><i class="fa fa-edit"><i class="fa fa-trash ms-2"></td>
                        <td>{{$item->id}}</td>
                        <td>{{$item->item}}</td>
                        <td>{{$item->item}}</td>
                        <td>{{$item->item}}</td>
                        <td>${{$item->price}}</td>
                        <td>{{$item->name}}</td>
                    </tr>
                    @endforeach
                    </div>                     
                </table>
                </div>
                </div>
                <div class="mt-5">Showing 1 to 10 of 100 entries {{$items->links()}}</div>
            </main>
        </div>
    </div>
    
</body>
</html>