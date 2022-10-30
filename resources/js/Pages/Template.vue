<template>
    <Head title="Welcome" />
    <div :class="dark == false ? '':'dark'">
        <!--Header of page-->
         <div class="px-4 bg-slate-100 py-4 border-b sticky top-0 border-slate-200 dark:border-b dark:border-slate-700 text-black text-sm md:px-8 md:text-md md:py-4 dark:bg-black dark:text-slate-200">
             <div class="flex items-center justify-between">
                 <div class="text-xl md:text-2xl">
                      <h1>SCYU-APP</h1>
                 </div>

                 <div class="flex items-center space-x-2 md:space-x-4">
                    <Link :href="route('login')" >Login</Link>
                    <ul class="flex">
                        <!--sun-->
                        <li v-if="dark==true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" @click="dark = ! dark" fill="currentColor" class="w-4 h-4 md:w-6 md:h-6 dark:fill-slate-200 fill-black cursor-pointer">
                               <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
                            </svg>
                        </li>   
                        <!--moon-->
                        <li v-else>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" @click="dark = ! dark" fill="currentColor" class="w-4 h-4 md:w-6 md:h-6 dark:fill-slate-200 fill-black cursor-pointer">
                                <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd" />
                            </svg>

                        </li>
                    </ul>
                    
                 </div>
             </div>
             
         </div>
        <!--Footer of page-->
         <div class="px-4 bg-slate-50 py-4 text-black text-sm md:px-8 md:text-md md:py-4 dark:bg-black dark:text-slate-200  min-h-screen    ">
               <div class="px-4 py-4 mt-3 ">
                   <slot name="content">
                         <h1>Le contenu ici svp</h1>
                   </slot>
               </div>
         </div>
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
   
export default {
        components:{
            Head,
            Link,
        },

        data(){

            return {
                dark:false,
            }
        }
}
</script>

<style scoped>

</style>