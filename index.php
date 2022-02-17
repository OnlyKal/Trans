
    <link href="style/tailwind.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type = "text/javascript" src = "js/jquery.min.js" ></script>
    <script type = "text/javascript" src = "js/manager.js" ></script>
   <?php session_start(); ?>
    <script>
        $(document).ready(function() {
                function login() {
                    let fullname = $('#usermail').val()
                    let password = $('#password').val()
                    $.ajax({
                        type: "POST",
                        data:{
                            action: "login",
                            fullname: fullname,
                            password: password
                        },
                        url:"routes/user.routes.php",
                        success: function(response) {
                               const result = JSON.parse(response);
                               console.log(result);
                                if(result.type == "1"){
                                    alert("log in...")
                                    $('#login').hide();
                                    $('#headers').show();
                                }else alert("sorry, can't log..")
                        }
                    })
                }
                function addusers() {
                     let fullname = $('#firstname').val()+" "+$('#lastname').val()
                     let password = $('#userpassword').val();
                     let passwordC = $('#userpasswordC').val();
                 
                     if(password==passwordC){
                            $.ajax({
                            type: "POST",
                            data: {
                                action: "add",
                                fullname:fullname,
                                phone:$('#userphone').val(), 
                                email:$('#usermailadd').val(),
                                password:password,
                                role:$('#usertype').val(),
                            },
                            url:"routes/user.routes.php",
                            success:function(response){
                                const result = JSON.parse(response);
                                console.log(result);
                                if(result.type == "success"){
                                    alert("User successfully added...")
                                }
                            },
                        })
                     }else  alert("use same password to confirm..")
                }

                $('#save-user').on('click', function(){
                    addusers();
                })

                function getallusers() {
                         $.ajax({
                               type: "POST",
                               data:{
                                   action: "get"
                               },
                               url:"routes/user.routes.php",
                               success: function(response) {
                                const data=JSON.parse(response).map(res=>{ 
                                               let colorize='bg-yellow-600 text-white';
                                               if (res.role=="Admin" || res.role=="Administrator"){
                                                     colorize='bg-green-600 text-white';
                                               }else colorize='bg-yellow-600 text-white';

                                                return`<tr class="hover:bg-blue-200">                                                                                                            
                                                            <td class="px-5 border-b border-gray-200 bg-white text-sm">
                                                                <div class="flex items-center">
                                                                    <div class="flex-shrink-0 w-10 h-10">
                                                                    <div class="h-full flex w-full  rounded-full items-center justify-center">
                                                                            <i class="fa fa-user text-blue-500 "></i>
                                                                    </div>
                                                                    </div>
                                                                        <div class="ml-3">
                                                                            <p class="text-gray-900 whitespace-no-wrap font-bold">
                                                                            `+res.firstname+`
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                            </td>
                                                            <td class="px-5 border-b border-gray-200 bg-white text-sm">
                                                                <p class="text-gray-900 whitespace-no-wrap">+ `+res.phone+`</p>
                                                            </td>
                                                            <td class="px-5 border-b border-gray-200 bg-white text-sm">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                `+res.email+`
                                                                </p>
                                                            </td>
                                                            <td class="px-5 border-b border-gray-200 bg-white text-sm">
                                                                <p class=" whitespace-no-wrap `+colorize+` flex justify-center rounded ">
                                                                `+res.role+`
                                                                </p>
                                                            </td>                                                                                                                   
                                                        </tr> `                                                           
                                                })
                                                $('#tbody-user').empty()
                                                $('#tbody-user').append(data); 
                                                
                                                
                                               

                                    
                               }
                         })
                }
                function getop(){
                    $.ajax({
                               type: "POST",
                               data:{
                                   action: "getop"
                               },
                               url:"routes/op.routes.php",
                               success: function(response) {
                                const data=JSON.parse(response).map(res=>{ 
                                               let colorize='bg-yellow-600 text-white';
                                               if (res.type=="Sortie" || res.type=="sortie"){
                                                     colorize='bg-blue-600 text-white';
                                               }else colorize='bg-green-600 text-white';

                                                return`<tr class="hover:bg-blue-200">                                                                                                            
                                                            <td class="px-5 border-b border-gray-200 bg-white text-sm">
                                                                <div class="flex items-center">
                                                                    <div class="flex-shrink-0 w-10 h-10">
                                                                    <div class="h-full flex w-full  rounded-full items-center justify-center">
                                                                            <i class="fa fa-user text-blue-500 "></i>
                                                                    </div>
                                                                    </div>
                                                                        <div class="ml-3">
                                                                            <p class=" `+colorize+` p-2 w-20 rounded whitespace-no-wrap font-bold">
                                                                            `+res.type+`
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                            </td>
                                                            <td class="px-5 border-b border-gray-200 bg-white text-sm">
                                                                <p class="text-gray-900 whitespace-no-wrap">+ `+res.dateop+`</p>
                                                            </td>
                                                            <td class="px-5 border-b border-gray-200 bg-white text-sm">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                `+res.pu+`
                                                                </p>
                                                            </td>
                                                            <td class="px-5 border-b border-gray-200 bg-white text-sm">
                                                                <p class=" whitespace-no-wrap  flex justify-center  ">
                                                                `+res.quantity+`
                                                                </p>
                                                            </td>                                                                                                                   
                                                            <td class="px-5 border-b border-gray-200 bg-white text-sm">
                                                                <p class=" whitespace-no-wrap  flex justify-center rounded ">
                                                                `+res.pt+`
                                                                </p>
                                                            </td>                                                                                                                   
                                                        </tr> `                                                           
                                                })
                                                $('#tbody-op').empty()
                                                $('#tbody-op').append(data);   
                               }
                         })

                }
                getop();
                function addopeation(){
                                    let pu = $('#pu').val()
                                    let qt = $('#qt').val();
                                    let pt = $('#pu').val()*$('#qt').val()
                                    let typeop = $('#optype').val();
                                
     
                                            $.ajax({
                                            type: "POST",
                                            data: {
                                                action: "addop",
                                                pu : pu,
                                                qt : qt,
                                                pt : pt,
                                                typeop : typeop
                              
                                            },
                                            url:"routes/op.routes.php",
                                            success:function(response){
                                                const result = JSON.parse(response);
                                                console.log(result);
                                                if(result.type == "success"){
                                                    getop()
                                                    alert(" Operation successfully added...")
                                                }
                                            },
                                        })
                              
                                }

                getallusers();
                let usertype=""
                if("<?php echo isset($_SESSION['user']['type']); ?>"==1){
                                    $('#login').hide();
                                    $('#headers').show();
                                 
                }else {
                     $('#login').show();
                     $('#headers').hide();
                }

                 $('#save-op').on('click',function(){
                    addopeation();
                 })
                 $('#qt').on('hover',function(){
                     console.log('a')
                 })
                 $('#add-user').hide();
              

                 $('#form-user').hide();                
                 $('#user-grid').show();
                 $('#add-trans').hide();

                 $('#addu').on('click', function() {
                    $('#form-user').show();
                    $('#user-grid').hide();
                 })
                 $('#viewu').on('click', function() {
                    $('#form-user').hide();
                    $('#user-grid').show();
                    getallusers();
                 })

                 $('#connect').on('click', function() {
                    login();
                 })

                 $('#user').on('click', function() {
                    $('#add-user').show();  
                    $('#add-trans').hide();                 
                 })

                 $('#trans').on('click', function() {
                    $('#add-trans').show(); 
                    $('#add-user').hide();                   
                 })
                 $('#lagout').on('click', function() {
                    $('#add-trans').hide(); 
                    $('#add-user').hide();                   
                    $('#headers').hide();                   
                    $('#login').show();     
                    "<?php session_destroy(); ?>"              
                 })







                 
        });
    </script>


    <div id="main" class="flex  flex-col justify-start  h-full bg-gray-200 shadow-xl">
                       <div  id="headers" class="bg-white w-full flex h-16 p-2 items-center justify-between">
                              <div class="flex">
                                    <div id ="trans" class="bg-blue-400 hover:bg-blue-500 text-white py-1 px-5 flex justify-center items-center text-sm rounded mx-3 cursor-pointer">Add Transactions</div>     
                                    <!-- <div class="bg-blue-400 hover:bg-blue-500 text-white py-1 px-5 flex justify-center items-center text-sm rounded mx-3 cursor-pointer">View Transction</div>      -->
                                    <div id="user" class="bg-blue-400 hover:bg-blue-500 text-white py-1 px-5 flex justify-center items-center text-sm rounded mx-3 cursor-pointer">User Management</div>     
                              </div>
                              <div id="lagout" class="bg-red-400 hover:bg-red-500 text-white py-1 px-2 flex justify-start items-center text-sm rounded mx-3 cursor-pointer">
                                    <i class="fa fa-sign-out mr-2"></i>    
                                   <label for="" class="cursor-pointer">Logout</label>
                              </div>
                       </div>

                       <div id="body" class="h-full w-full bg-gray-200 flex items-center justify-center m-2">
                           <!-- LOGIN PAGE -->
                          <div id="login" class="flex flex-col h-auto px-6 py-3 shadow-xl my-40 bg-white rounded-xl items-center">                    
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
                                    <div id="connect" class="bg-blue-400 w-80 mb-12 flex items-center justify-center p-2 mt-12 hover:bg-blue-500 cursor-pointer font-bold text-white rounded">
                                        Connexion
                                    </div>                          
                            </div>  
                            <!-- ADD TRANSCTION  -->
                            <div id="add-trans" class="flex  flex-col h-full  shadow-xl w-1/2 bg-white rounded-xl m-2 overflow-y-auto ">                    
                                            <div class="h-20 bg-blue-100 rounded-t-xl p-2 flex justify-between items-center sticky top-0">
                                                   <div class="flex items-center ">
                                                        <!-- <div class="flex h-14 w-14 bg-gray-200 rounded-full justify-center items-center border border-gray-400">
                                                            <i class="fa fa-box text-xl text-gray-700"></i>
                                                        </div>
                                                        <div class="flex flex-col mx-3">
                                                            <label for="" class="text-sm  font-bold text-gray-700">Operations management</label>
                                                            <!-- <label for="" class="text-sm text-gray-400">Email : kastolya@gmail.com</label>
                                                        </div> -->
                                                   </div>
                                                  <div class="flex">
                                                            <div class="bg-blue-400 hover:bg-blue-500 text-white py-1 px-2 flex justify-center items-center text-sm rounded mx-1 cursor-pointer">
                                                                <!-- <i class="fa fa-edit"></i>   -->
                                                            </div>                                                            
                                                            <div id="addo" class="bg-blue-400 hover:bg-blue-500 text-white py-1 px-2 flex justify-start items-center text-sm rounded mx-1 cursor-pointer">
                                                                 <!-- <i class="fa fa-user-plus pr-2 cursor-pointer"></i>  
                                                                 <label for="" class="cursor-pointer pr-1">Add new operation</label>  -->
                                                            </div>
                                                            <div id="viewo" class="bg-blue-400 hover:bg-blue-500 text-white py-1 px-2 flex justify-start items-center text-sm rounded mx-1 cursor-pointer">
                                                                 <i class="fa fa-list pr-2 cursor-pointer"></i>  
                                                                 <label for="" class="cursor-pointer pr-1">Print operation</label> 
                                                            </div>
                                                  </div>
                                              
                                            </div>
                                            <div class="flex flex-col p-4 justify-center items-start">
                                                         <div class="group mt-2 mx-1 w-96 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-user-shield px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <select name="optype" id="optype" class="w-full rounded-md px-1  outline-none text-sm">
                                                                            <option>Entree</option>
                                                                            <option>Sortie</option>
                                                                        </select>
                                                                    </div>
                                                      <div class='flex'>
                                                                   <div class="group mt-2 w-48 h-10 mx-1 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-user px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="number" id="pu" name="pu" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="prix unitaire">
                                                                    </div>  <div class="group mt-2 w-48 h-10 mx-1 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-user px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="number" id="qt" name="qt" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="Quantite">
                                                                    </div> 
                                                                  
                                                                    <label id="total"></label>
                                                      </div>
                                                      <div class="flex items-end justify-start mx-1">
                                                               <div id="save-op" class="bg-blue-400 w-54 px-4 flex items-center justify-center p-2 mt-12 hover:bg-blue-500 cursor-pointer font-medium text-white rounded-md">
                                                                    Ajouter operation
                                                                </div> 
                                                       </div>

                                                       <div class="w-full mt-3">
                                                                <div class="inline-block min-w-full shadow rounded-lg ">
                                                                    <table class="min-w-full leading-normal">
                                                                        <thead class="">
                                                                            <tr class="">
                                                                                <th
                                                                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                                                    Operation
                                                                                </th>
                                                                                <th
                                                                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                                                    Date operation
                                                                                </th>
                                                                                <th
                                                                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                                                    Prix unitaire
                                                                                </th>
                                                                                <th
                                                                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                                                    Quantite
                                                                                </th>
                                                                                <th
                                                                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                                                    PT
                                                                                </th>
                                                                               
                                                                            </tr>                                                                                                               </tr>
                                                                        </thead>
                                                                        <tbody id="tbody-op" class=" overflow-y-auto">

                                                                        </tbody>
                                                                    </table>                                                                                                       
                                                                </div>
                                                            </div>
                                            </div>
                             </div>
                            

                            <!-- ADD USER -->
                            <div id="add-user" class="flex  flex-col h-full  shadow-xl w-1/2 bg-white rounded-xl m-2 overflow-y-auto ">                    
                                            <div class="h-20 bg-blue-100 rounded-t-xl p-2 flex justify-between items-center sticky top-0">
                                                   <div class="flex items-center ">
                                                        <div class="flex h-14 w-14 bg-gray-200 rounded-full justify-center items-center border border-gray-400">
                                                            <i class="fa fa-user text-xl text-gray-700"></i>
                                                        </div>
                                                        <div class="flex flex-col mx-3">
                                                            <label for="" class="text-sm text-gray-700"><?php echo isset($_SESSION['user']['name']); ?></label>
                                                            <label for="" class="text-sm text-gray-700"><?php echo isset($_SESSION['user']['mail']); ?></label>
                                                        </div>
                                                   </div>
                                                  <div class="flex">
                                                            <div id="addu" class="bg-blue-400 hover:bg-blue-500 text-white py-1 px-2 flex justify-start items-center text-sm rounded mx-1 cursor-pointer">
                                                                 <i class="fa fa-user-plus pr-2 cursor-pointer"></i>  
                                                                 <label for="" class="cursor-pointer pr-1">Add new user</label> 
                                                            </div>
                                                            <div id="viewu" class="bg-blue-400 hover:bg-blue-500 text-white py-1 px-2 flex justify-start items-center text-sm rounded mx-1 cursor-pointer">
                                                                 <i class="fa fa-list pr-2 cursor-pointer"></i>  
                                                                 <label for="" class="cursor-pointer pr-1">View All Users</label> 
                                                            </div>
                                                           
                                                  </div>
                                            </div>
                                            <!-- FORM -->
                                            <div id="form-user" class="flex flex-col p-6 h-full">
                                                   <label for="" class="text-gray-400">Add new user</label>
                                                    <div class="flex flex-col my-2 h-full">
                                                            <div class="flex w-96">
                                                                    <div class="group mt-2 w-48 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-user px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="text" id="firstname" name="firstname" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="First name">
                                                                    </div> 

                                                                    <div class="group mt-2 w-48 h-10 mx-1 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-user px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="text" id="lastname" name="lastname" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="Last name">
                                                                    </div> 
                                                            </div> 
                                                            
                                                            <div class="flex w-96">
                                                                    <div class="group mt-2 w-96 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-envelope px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="text" id="usermailadd" name="usermailadd" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="address mail">
                                                                    </div>
                                                            </div> 
                                                            <div class="flex w-96">
                                                                    <div class="group mt-2 w-96 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-phone px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="text" id="userphone" name="userphone" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="Phone number">
                                                                    </div>
                                                            </div> 
                                                            <div class="flex w-96 my-6">
                                                                    <div class="group mt-2 w-96 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-user-shield px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <select name="usertype" id="usertype" class="w-full rounded-md px-1  outline-none text-sm">
                                                                            <option>Administrator</option>
                                                                            <option>Invited</option>
                                                                        </select>
                                                                    </div>
                                                            </div> 
                                                            <div class="flex w-96">
                                                                    <div class="group mt-2 w-48 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-lock px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="password" id="userpassword" name="userpassword" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="Password">
                                                                    </div> 

                                                                    <div class="group mt-2 w-48 h-10 mx-1 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                                                        <i class="fa fa-lock px-2 group-hover:text-blue-500 text-gray-500"></i>
                                                                        <input type="password" id="userpasswordC" name="userpasswordC" class="w-full h-full rounded-md px-1  outline-none text-sm" placeholder="Confirm password">
                                                                    </div> 
                                                            </div> 
                                                            <div class="flex items-end justify-start h-full ">
                                                               <div id="save-user" class="bg-blue-400 w-54 flex items-center justify-center p-2 mt-12 hover:bg-blue-500 cursor-pointer font-medium text-white rounded">
                                                                    Save user
                                                                </div> 
                                                            </div>
                                                    </div>     
                                            </div>
                                             <!-- TABLE USER  -->
                                                                                                     <!-- component -->
                                                                                            <div id="user-grid" class="user-grid bg-white  rounded-md w-full ">   
                                                                                                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 ">
                                                                                                    <div class="inline-block min-w-full shadow rounded-lg ">
                                                                                                        <table class="min-w-full leading-normal">
                                                                                                            <thead class="">
                                                                                                                <tr class="">
                                                                                                                    <th
                                                                                                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                                                                                        USER
                                                                                                                    </th>
                                                                                                                    <th
                                                                                                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                                                                                        TELEPHONE
                                                                                                                    </th>
                                                                                                                    <th
                                                                                                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                                                                                        EMAIL
                                                                                                                    </th>
                                                                                                                    <th
                                                                                                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                                                                                        ROLE
                                                                                                                    </th>
                                                                                                                </tr>                                                                                                               </tr>
                                                                                                            </thead>
                                                                                                            <tbody id="tbody-user" class="">
                                                                                                                                                                                                        
                                                                                                            </tbody>
                                                                                                        </table>                                                                                                       
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                     </div>
                                    
                                     
                       </div>   
                </div>


    