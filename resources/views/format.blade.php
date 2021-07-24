<main>
    <div class="  flex flex-col justify-center items-center mt-20">


        <img class=" w-14  h-14 mb-4 " src="logo/pinlogo.png">


        <div class="
          bg-white shadow-md rounded px-2 pt-6 pb-8 mb-4 flex flex-col md:w-6/12 lg:w-4/12   sm:w-full justify-center content-center
        ">
            <form v-csrf-token @submit.prevent="">

                <div class="mb-4  flex flex-col items-center justify-center">
                    <h3 class="mb-2 text-blue-800 font-bold text-xl ">Welcome to Pinnaview</h3>
                    <p class="mb-10  text-sm pl-14">Buy data, Pay utility bills, Recharge your phone and cable tv. All
                        in one place, Cheap & Fast.</p>

                    <!-- Enter Full name -->



                    <div class="relative w-full flex flex-col items-center justify-center ">
                        <label class=" absolute  left-14 mb-5  text-grey-darker text-sm font-bold" for="fullname">
                            Full Name
                        </label>
                    </div>



                    <div class="relative w-full flex flex-col items-center justify-center ">
                        <div class="absolute top-2 left-14 "> <i class=" text-black z-50 hover:text-black"><svg
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg></i>
                        </div>
                        <input class=" mb-6 pl-6 shadow focus:border-yellow-500 focus:outline-none appearance-none  border rounded w-9/12 py-2 px-3 text-grey-darker
              " id="fullname" type="text" placeholder="Firstname Lastname" />

                    </div>

                    <!-- Enter user name -->
                    <div class="relative w-full flex flex-col items-center justify-center ">
                        <label class=" absolute  left-14 mb-5  text-grey-darker text-sm font-bold" for="username">
                            Username or Phone number
                        </label>
                    </div>



                    <div class="relative w-full flex flex-col items-center justify-center ">
                        <div class="absolute top-2 left-14 "> <i class=" text-black z-50 hover:text-black"><svg
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg></i>
                        </div>
                        <input class=" mb-6 pl-6 shadow focus:border-yellow-500 focus:outline-none appearance-none  border rounded w-9/12 py-2 px-3 text-grey-darker
              " id="username" type="text" placeholder="Enter username or Phone number" />

                    </div>

                    <!-- Enter email address -->


                    <div class="relative w-full flex flex-col items-center justify-center ">
                        <label class=" absolute  left-14 mb-5  text-grey-darker text-sm font-bold" for="email">
                            Email Address
                        </label>
                    </div>



                    <div class="relative w-full flex flex-col items-center justify-center ">
                        <div class="absolute top-2 left-14 "> <i class=" text-black z-50 hover:text-black"><svg
                                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg></i>
                        </div>
                        <input class=" mb-6 pl-8 shadow focus:border-yellow-500 focus:outline-none appearance-none  border rounded w-9/12 py-2 px-3 text-grey-darker
              " id="email" type="email" placeholder="e.g dara@gmail.com" />

                    </div>

                    <!-- Enter date of birth -->

                    <div class="relative w-full flex flex-col items-center justify-center ">
                        <label class=" absolute  left-14 mb-5  text-grey-darker text-sm font-bold" for="email">
                            Date of Birth
                        </label>
                    </div>



                    <div class="relative w-full flex flex-col items-center justify-center ">
                        <div class="absolute top-2 right-14 "> <i class=" text-black z-50 hover:text-black"><svg
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd" />
                                </svg></i>
                        </div>
                        <input class=" mb-6 pl-3 shadow focus:border-yellow-500 focus:outline-none appearance-none  border rounded w-9/12 py-2 px-3 text-grey-darker
              " id="email" type="email" placeholder="DD/MM/YY" />

                    </div>

                    <!-- Enter phone number -->

                    <div class="relative w-full flex flex-col items-center justify-center ">
                        <label class=" absolute  left-14 mb-5  text-grey-darker text-sm font-bold" for="email">
                            Phone Number
                        </label>
                    </div>



                    <div class="relative w-full flex flex-col items-center justify-center ">
                        <div class="absolute top-2 left-14 "> <i class=" text-black z-50 hover:text-black"><svg
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg></i>
                        </div>
                        <input class=" mb-6 pl-6 shadow focus:border-yellow-500 focus:outline-none appearance-none  border rounded w-9/12 py-2 px-3 text-grey-darker
              " id="email" type="email" placeholder="e.g 07012345678" />

                    </div>

                    <!-- Enter referral code -->

                    <div class="relative w-full flex flex-col items-center justify-center ">
                        <label class=" absolute  left-14 mb-5  text-grey-darker text-sm font-bold" for="email">
                            Got a referral code? (Optional)
                        </label>
                    </div>



                    <div class="relative w-full flex flex-col items-center justify-center ">

                        <input class=" mb-6  shadow focus:border-yellow-500 focus:outline-none appearance-none  border rounded w-9/12 py-2 px-3 text-grey-darker
              " id="email" type="email" placeholder="Enter a referral code" />

                    </div>

                    <!-- Enter Password -->

                    <div class="relative w-full flex flex-col items-center justify-center ">
                        <div class="absolute top-3 left-14 pr-4 "> <i class="  text-black z-50 hover:text-black"><svg
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd" />
                                </svg></i>

                        </div>

                        <div class="absolute top-3 right-14 pr-4 "> <button @click="showPassword"
                                class=" outline-none focus:outline-none  text-yellow-600 z-50 hover:text-yellow-600">
                                <div :class="show_lock">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                                    </svg>
                                </div>

                                <div :class="hidden_lock">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>

                            </button>

                        </div>



                        <label class=" absolute left-14 mb-24 text-grey-darker text-sm font-bold mb-2" for="password">
                            Choose a Password
                        </label>
                        <input class="
              pl-6 shadow focus:border-yellow-500 focus:outline-none appearance-none border border-red rounded w-9/12 py-2 px-3 text-grey-darker  mb-9
            " id="password" :type="type" placeholder="Enter a secure password" />


                    </div>

                    <!-- Confirm password -->
                    <div class="relative w-full flex flex-col items-center justify-center ">
                        <div class="absolute top-3 left-14 pr-4 "> <i class="  text-black z-50 hover:text-black"><svg
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd" />
                                </svg></i>

                        </div>

                        <div class="absolute top-3 right-14 pr-4 "> <button @click="showPassword"
                                class=" outline-none focus:outline-none  text-yellow-600 z-50 hover:text-yellow-600">
                                <div :class="show_lock">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                                    </svg>
                                </div>

                                <div :class="hidden_lock">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>

                            </button>

                        </div>



                        <label class=" absolute left-14 mb-24 text-grey-darker text-sm font-bold mb-2" for="password">
                            Confirm Password
                        </label>
                        <input class="
              pl-6 shadow focus:border-yellow-500 focus:outline-none appearance-none border border-red rounded w-9/12 py-2 px-3 text-grey-darker  mb-9
            " id="password" :type="type" placeholder="Enter your password again" />
                        <input type="checkbox" class=" absolute left-14 top-12 align-baseline font-bold text-sm text-blue text-yellow-600
          " href="#">
                        <p class="absolute ml-5 left-14 top-12 align-baseline font-bold text-sm text-blue text-black">By
                            clicking "Sign Up", you have read and agree to our <b>Terms & Conditions</b> and <b>Privacy
                                Policy.</b></p>


                    </div>


                </div>

                <div class="flex flex-col items-center justify-center">
                    <button class="
              block w-9/12 bg-blue-900 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded justify-center  content-center
            " type="button">
                        Sign Up
                    </button>

                    <p class="mt-4 text-sm">Already have an account? <span class="text-yellow-600 "> Sign In </span></p>

                </div>

            </form>
        </div>


    </div>
</main>
