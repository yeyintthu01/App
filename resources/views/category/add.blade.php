<x-layout>
    <div class="container-fluid">
        <div class="row">
            <x-side-navbar />
            <main class="col-10 bg-light mt-3">
                <div class="list-group text-center text-lg-start">
                    <div class="list-group-item list-group-item-action">
                    <span class="mx-2"><a href="/show"><i class="fas fa-list"></a></i></span>
                </div>
                </div>
                <div class="list-group text-center text-lg-start mt-4">
                    <a href="/create" class="list-group-item list-group-item-action list-group-item-success">
                        <span class="d-lg-inline">Add Categories</span>
                    </a>
                </div>

                <div class="row mb-4">
                    <div class="col-5 mt-3">
                        <form method="POST">
                        @csrf
                            <div class="mb-3">
                                <label for="name" class="mb-2">Category</label>
                                <input required type="text" id="name" aria-describedby="emailHelp" name="item" value="{{old('name')}}" placeholder="Input Name" class="form-control">
                                @error('name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Category Photo</label>
                                <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="invalidCheck" class="form-check-label">Status</label> </br>
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck"> <span class="ms-2">Publish</span> 
                            </div>
                            <div class="float-end ">
                                <div class="input-group mt-3">
                                    <button required type="submit" class="btn btn-outline-success">Cancel</button>
                                    <button required type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>   
                        </form>
                    </div>
                </div>
        </div>
    </div>
</x-layout>