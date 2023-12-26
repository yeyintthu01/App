<x-layout>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-2 pe-3 bg-secondary">
                <h1 class="h4 py-3 text-center">
                    <i class="fas fa-user me-2"></i>
                        <span class="d-none d-lg-inline">
                            Admin Panel
                        </span>
                </h1>
                <div class="list-group text-center text-lg-start">
                    <a href="/create" class="list-group-item list-group-item-action">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="d-none d-lg-inline">Item</span>
                    </a>
                    <a href="/category" class="list-group-item list-group-item-action">
                        <i class="fas fa-list"></i>
                        <span class="d-none d-lg-inline">Category</span>
                    </a>
                </div>
                
                <div class="list-group text-center text-lg-start mt-5">
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-user"></i>
                        <span class="d-none d-lg-inline"><div class="logout-btn">Logout</div></span>
                    </a>
                </div>
            </nav>
            <main class="col-10 bg-light mt-3">
                <div class="list-group text-center text-lg-start">
                    <a href="/create" class="list-group-item list-group-item-action">
                    <span class="mx-2"><i class="fas fa-list"></i></span>
                    </a>
                </div>
                <div class="list-group text-center text-lg-start mt-4">
                    <a href="/create" class="list-group-item list-group-item-action list-group-item-success">
                        <span class="d-lg-inline">Add Items</span>
                    </a>
                </div>

                <div class="row mb-4">
                    <div class="col mt-3">
                        <h4>Item Information</h4>
                        <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="mb-2">Item Name</label>
                            <input required type="text" id="name" aria-describedby="emailHelp" name="item" value="{{old('name')}}" placeholder="Input Name" class="form-control">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category" class="mb-2">Select Category</label>
                            <select name="category" id="category" class="form-select" placeholder="Select Category">
                                <option value="">Something</option>
                                <option value="">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="mb-2">Price</label>
                            <input required type="text" class="form-control" id="exampleInputPassword1" name="price" placeholder="Enter Price">
                            @error('price')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="mb-2">Description</label>
                            <textarea required class="form-control editor" id="exampleInputEmail1" aria-describedby="emailHelp" name="body"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="mb-2">Select Item Condition</label>
                            <select name="category" id="category" class="form-select" placeholder="Select Item Condition">
                                <option value="">New</option>
                                <option value="">Used</option>
                                <option value="">Good Second Hand</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="mb-2">Select Item Type</label>
                            <select name="category" id="category" class="form-select" placeholder="Select Item Type">
                                <option value="">Sell</option>
                                <option value="">For Buy</option>
                                <option value="">For Exchange</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="invalidCheck" class="form-check-label">Status</label> </br>
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck"> <span class="ms-2">Publish</span> 
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">Item Photo</label>
                            <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                        </div>
                        
                    </form>
                    </div>
                    <div class="col mt-3">
                        <h4>Owner Information</h4>
                        <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="mb-2">Owner Name</label>
                            <input required type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{old('name')}}" placeholder="Input Owner Name">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="mb-2">Contact Number</label>
                            <div class="input-group">
                                <span>
                                    <select class="form-select" id="countryCode" aria-label="Country Code" width="10px">
                                        <option value="+1">+95</option>
                                        <option value="+44">+44</option>
                                    </select>
                                </span>
                                <input type="tel" class="form-control" placeholder="Enter phone number">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="mb-2">Address</label>
                            <textarea name="" id="name" cols="" rows="" class="form-control"></textarea>
                        </div>
                        <x-location />
                        <div class="float-end ">
                        <div class="input-group mt-3">
                            <button required type="submit" class="btn btn-outline-success">Cancel</button>
                            <button required type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </div>
                        
                    </div>
                </div>
        </div>
    </div>
</x-layout>