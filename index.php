
    <link href="style/tailwind.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    <div id="main" class="flex  flex-col justify-start  h-full bg-gray-200 shadow-xl">
                       <div  id="headers" class="bg-white w-full flex h-12 items-center justify-between">
                              <div class="flex">
                                    <div class="bg-blue-400 hover:bg-blue-500 text-white py-1 px-5 flex justify-center items-center text-sm rounded mx-3 cursor-pointer">Add Transactions</div>     
                                    <div class="bg-blue-400 hover:bg-blue-500 text-white py-1 px-5 flex justify-center items-center text-sm rounded mx-3 cursor-pointer">View Transction</div>     
                                    <div class="bg-blue-400 hover:bg-blue-500 text-white py-1 px-5 flex justify-center items-center text-sm rounded mx-3 cursor-pointer">User Management</div>     
                              </div>
                              <div class="bg-red-400 hover:bg-red-500 text-white py-1 px-2 flex justify-start items-center text-sm rounded mx-3 cursor-pointer">
                                <i class="fa fa-sign-out mr-2"></i>    
                                <label for="" class="">Logout</label>
                              </div>
                       </div>

                       <div id="body" class="h-full w-full bg-gray-200 flex items-center justify-center m-2">
                           <!-- LOGIN PAGE -->
                            <div id="login" class="flex flex-col h-1/2 p-6 shadow-xl  bg-white rounded-xl items-center">                    
                                    <img src="images/log.png" alt="" class="w-36 m-6">
                                    <div class="flex mt-4">
                                        <label for="" class="font-bold text-xl text-blue-400">Financial </label>
                                        <label for="" class="font-bold text-xl"> Flux</label>
                                    </div>
                                    <label for="" class="text-sm my-5">Assurez-vous de bien compléter vos identifiants</label>
                                    <div class="group my-2 w-80 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                        <i class="fa fa-user px-3 group-hover:text-blue-500 text-gray-500"></i>
                                        <input type="text" id="usermail" name="usermail" class="w-full h-full rounded-md px-2  outline-none text-sm" placeholder="Set user mail or phone">
                                    </div>                        
                                    <div class="group my-2 w-80 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                        <i class="fa fa-key px-3 group-hover:text-blue-500 text-gray-500"></i>
                                        <input type="password" id="password" name="password" class="w-full h-full rounded-md px-2  outline-none text-sm" placeholder="Set your password">
                                    </div>    
                                    <div class="bg-blue-400 w-80 flex items-center justify-center p-2 mt-12 hover:bg-blue-500 cursor-pointer font-bold text-white rounded">
                                        Connexion
                                    </div>                           
                            </div>

                            <!-- ADD USER -->
                            <div id="add-user" class="flex  flex-col h-1/2  shadow-xl w-1/2 bg-white rounded-xl m-2">                    
                                            <div class="h-20 bg-blue-100 rounded-t-xl p-2 flex justify-between items-center">
                                                   <div class="flex items-center ">
                                                        <div class="flex h-14 w-14 bg-gray-200 rounded-full justify-center items-center border border-gray-400">
                                                            <i class="fa fa-user text-xl text-gray-400"></i>
                                                        </div>
                                                        <div class="flex flex-col mx-3">
                                                            <label for="" class="text-sm text-gray-400">User : Justin Bihango</label>
                                                            <label for="" class="text-sm text-gray-400">Email : Bihangojustin@gmail.com</label>
                                                        </div>
                                                   </div>
                                                  <div class="flex">
                                                            <div class="bg-blue-400 hover:bg-blue-500 text-white py-1 px-2 flex justify-center items-center text-sm rounded mx-1 cursor-pointer">
                                                                <i class="fa fa-edit"></i>  
                                                            </div>
                                                            <div class="bg-blue-400 hover:bg-blue-500 text-white py-1 px-2 flex justify-center items-center text-sm rounded mx-1 cursor-pointer">
                                                                 <label for="" class="">View All users</label> 
                                                            </div>
                                                           
                                                  </div>
                                            </div>
                                            <div class="flex flex-col p-6 h-full">
                                                   <label for="" class="text-gray-400">Add new user</label>
                                                    <div class="flex flex-col my-2 h-full">
                                                            <div class="flex w-96">
                                                                    <div class="group mt-2 w-48 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-user px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="text" id="usermail" name="usermail" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="First name">
                                                                    </div> 

                                                                    <div class="group mt-2 w-48 h-10 mx-1 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-user px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="text" id="usermail" name="usermail" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="Last name">
                                                                    </div> 
                                                            </div> 
                                                            
                                                            <div class="flex w-96">
                                                                    <div class="group mt-2 w-96 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-envelope px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="text" id="usermail" name="usermail" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="address mail">
                                                                    </div>
                                                            </div> 
                                                            <div class="flex w-96">
                                                                    <div class="group mt-2 w-96 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-phone px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="text" id="usermail" name="usermail" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="Phone number">
                                                                    </div>
                                                            </div> 
                                                            <div class="flex w-96 my-6">
                                                                    <div class="group mt-2 w-96 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-user-shield px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <!-- <input type="text" id="usermail" name="usermail" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="Phone number"> -->
                                                                        <select name="" id="user-type" class="w-full rounded-md px-1  outline-none text-sm">
                                                                            <option value="">Administrator</option>
                                                                            <option value="">Invited</option>
                                                                        </select>
                                                                    </div>
                                                            </div> 
                                                            <div class="flex w-96">
                                                                    <div class="group mt-2 w-48 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-lock px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="password" id="usermail" name="usermail" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="Password">
                                                                    </div> 

                                                                    <div class="group mt-2 w-48 h-10 mx-1 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-lock px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="password" id="usermail" name="usermail" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="Confirm password">
                                                                    </div> 
                                                            </div> 
                                                            <div class="flex items-end justify-start h-full ">
                                                               <div class="bg-blue-400 w-54 flex items-center justify-center p-2 mt-12 hover:bg-blue-500 cursor-pointer font-medium text-white rounded">
                                                                    Save user
                                                                </div> 
                                                            </div>
                                                            
                                                    </div>     
                                            </div>
                            </div>

                       </div>

                       

    </div>