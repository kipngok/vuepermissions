<div>
	
             <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                     <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"            data-bs-toggle="dropdown" aria-expanded="false">
                         Customer
                      </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @can('View Customer')                        
                         <li><a class="dropdown-item" href="/customer">Customers</a></li>
                        @endcan
                        @can('Create Customer')
                       <li><a class="dropdown-item" href="/customer/create">Add Customer</a></li>
                       @endcan
                     </ul>
                    </li>
                     <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Product
                      </a>

                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @can('View Product')
                        <li><a class="dropdown-item" href="/product">Products</a></li>
                        @endcan
                        @can('Create Product')
                        <li><a class="dropdown-item" href="/product/create">Create Product</a></li>
                        @endcan
                        @can('View Category')
                       <li><a class="dropdown-item" href="/category">Categories</a></li>
                        @endcan
                         @can('Create Category')
                       <li><a class="dropdown-item" href="/category/create">Create category</a></li> @endcan
                     </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Settings
                      </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                       @can('View User')
                        <li><a class="dropdown-item" href="/user">Users</a></li>
                        @endcan
                         @can('View User')
                       <li><a class="dropdown-item" href="/user/create">Add user</a></li>  @endcan 
                     </ul>
                    </li>
                      <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Roles
                      </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                       
                        <li><a class="dropdown-item" href="/role">Roles</a></li> 
                     
                        

                       <li><a class="dropdown-item" href="/role/create">Add role</a></li>
                     
                     </ul>
                    </li>
                       <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         SMS
                      </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        
                        <li><a class="dropdown-item" href="/sms">Sms</a></li> 
                       

                       <li><a class="dropdown-item" href="/sms/create">Send sms</a></li>
                    
                     </ul>
                    </li>
                </ul>
                    
</div>