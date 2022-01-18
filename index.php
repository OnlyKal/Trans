
    <link href="style/tailwind.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    <div id="main" class="flex justify-center items-center h-full py-12 bg-gray-100">
            <div id="login" class="flex flex-col h-full p-6 shadow-xl  bg-white rounded-xl items-center">                    
                            <img src="images/log.png" alt="" class="w-36 m-6">
                            <div class="flex">
                                <label for="" class="font-bold text-xl text-blue-500">Financial </label>
                                <label for="" class="font-bold text-xl"> Flux</label>
                            </div>
                            <label for="" class="text-sm my-2">Assurez-vous de bien compléter vos identifiants</label>
                            <div class="group my-2 w-80 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                <i class="fa fa-user px-3 group-hover:text-blue-500 text-gray-500"></i>
                                <input type="text" id="usermail" name="usermail" class="w-full h-full rounded-md px-2  outline-none text-sm" placeholder="User mail | Phone number">
                            </div>                        
                            <div class="group my-2 w-80 h-10 border-2 border-gray-400 hover:border-blue-400 b-gray-50 flex rounded-md items-center justify-center cursor-pointer">
                                <i class="fa fa-key px-3 group-hover:text-blue-500 text-gray-500"></i>
                                <input type="password" id="password" name="password" class="w-full h-full rounded-md px-2  outline-none text-sm" placeholder="User mail | Phone number">
                            </div>                
                            
                            <div class="bg-blue-400 w-full flex items-center justify-center p-2 mt-3 hover:bg-blue-500 cursor-pointer font-bold text-white rounded">
                                Connexion
                            </div>
            </div>
    </div>