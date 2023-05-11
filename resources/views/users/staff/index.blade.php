@extends('layouts.root')
@section('content')
    
          <div class="content">
                <!-- <div class="card card-default">
                            <div class="px-6 py-4">
                                <p>Mono provides a variety of <span class="text-secondary text-capitalize"> datatables </span> components with a
                                little customization that suits its design standards. For more information, please see the official <a
                                    class="font-weight-bold" href="https://datatables.net/" target="_blank"> Datatables Documentaion.</a></p>
                            </div>
                </div> -->

<!-- Products Inventory -->
<div class="card card-default">
        <div class="card-header">
            <h2>Products Inventory</h2>
            <button type="button" class="btn btn-sm btn-outline-success float-right" data-toggle="modal" data-target="#exampleModallarge"><span class="mdi mdi-account-multiple-plus-outline"></span> Add</button>
        </div>
            <div class="card-body">
                <table id="productsTable" class="table table-hover table-product" style="width:100%">
                <thead>
                    <tr>
                    <th></th>
                    <th>Name</th>
                    <th>ID</th>
                    <th>Qty</th>
                    <th>Variants</th>
                    <th>Committed</th>
                    <th>User Activity</th>
                    <th>Sold</th>
                    <th>In Stock</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                   @for($i = 0; $i < 1000; $i++)
                    <tr>
                            <td>
                                <div class="dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#"> <span class="mdi mdi-square-edit-outline text-success"></span>  Edit</a>
                                    <a class="dropdown-item" href="#"><span class="mdi mdi-trash-can-outline text-danger"></span>  Delete</a>
                                    </div>
                                </div>
                            </td>
                            <td class="py-0">
                               James Lopez Santos
                            </td>
                            <td>Coach Swagger</td>
                            <td>24541</td>
                            <td>27</td>
                            <td>1</td>
                            <td>2</td>
                            <td> 2343</td>
                            <td>4</td>
                            <td>18</td>
                    </tr>
                    @endfor
                   

                </tbody>
                </table>

            </div>
            </div>
</div>
          
        </div>
        
     
    
              

       
    
        @include('includes.modal.users')        

@endsection