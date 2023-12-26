
<x-layout>
    <div class="container-fluid">
        <div class="row" style="height: 900px">
            <x-side-navbar />

            <main class="col-10 bg-light">
            <div class="row">
                <div class="col">
                <div class="list-group text-lg-start mt-3">
                    <div class="list-group-item list-group-item-action">
                    <span class="mx-2"><a href="/show"><i class="fas fa-list"></a></i></span>
                </div>
                <p class="mt-3 mx-2"><a href="">Categories</a></p>
                <div class="d-flex justify-content-end">
                <button type="submit" style="background-color: yellow"><a href="/add">+ Add Categories</a></button>
                </div>
                <div class="dropdown py-5">
                    <div>Show:
                    <button class="border-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: yellow">
                        10 rows
                    </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <table class="table">
                    <tr style="background-color: yellow">
                        <th>Action</th>
                        <th>No</th>
                        <th>Categories</th>
                        <th>Description</th>
                    </tr> 
                </div>
                <div class="col">                
                    @foreach($items as $item)
                    <tr>
                        <td><i class="fa fa-edit"><i class="fa fa-trash ms-2"></td>
                        <td>{{$item->id}}</td>
                        <td>{{$item->item}}</td>
                        <td>{{$item->item}}</td>
                    </tr>
                    @endforeach 
                    </div>                     
                </table>
                </div>
                </div>
                <div class="mt-5">Showing 1 to 10 of 100 entries </div>
                {{$items->links()}}
            </main>
        </div>
    </div>
</x-layout>