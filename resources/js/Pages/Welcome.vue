<template>
    <Template>
        <template #content>
            
            <div class="text-center mt-5">
                  <h1 class="md:mt-8 text-xl md:text-5xl font-semibold ">Welcome to Sondage CYU <br> Plateforme</h1>
            </div>

            <div class="mt-8 flex justify-center space-x-2 md:space-x-4 text-xs md:text-md ">
                  <button :class="Loginchoice==true?'border-b-2 border-slate-700':''" @click="Loginchoice=true">J'ai un compte</button>
                  <button :class="Loginchoice==false?'border-b-2 border-slate-700':''" @click="Loginchoice=false">j'ai pas de compte</button>
                  <div class="relative">
                        <svg @click=" modalparm  = ! modalparm" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 md:w-6 md:h-6 dark:stroke-slate-200 stroke-black cursor-pointer">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 11-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 016.336-4.486l-3.276 3.276a3.004 3.004 0 002.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852z" />
                           <path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008z" />
                       </svg>
                       
                       <transition name="setting" v-show="modalparm==true">
                           <ModalSetting class="absolute -top-20 -right-14 md:-top-20 md:-right-26 ">
                              <template #content>
                                   <div class="w-28 space-y-2">
                                       <h1 class="font-semibold ">Paramètre</h1>
                                       <hr class="w-auto ">
                                       <ul>
                                           <li class="text-xs flex space-x-1">
                                              <label for="">desactivé les stats offline</label>
                                              <input type="checkbox" name="stats" v-model="noCompte">
                                           </li> 
                                       </ul>
                                   </div>
                              </template>
                           </ModalSetting>
                       </transition>
                  </div>
            </div>
          <!--sectio connexion/creation de compte-->
           
          
          <div class="md:grid grid-cols-3 gap-2">
             <div :class="noCompte==true ?'md:col-span-2':'md:col-span-3'">

                 <!--zone de connexion de compte-->
                   
                 <transition name="logincompte">
                 
                    <div v-show="Loginchoice==true" class="space-y-4 mt-10 md:mt-16  md:flex md:justify-center items-baseline md:space-x-8">
                    <Card class="w-auto h-auto md:h-64 md:w-72 cursor-pointer relative ">
                         <template #content>
                            <div class="rounded-full w-8 h-8 bg-slate-50 dark:bg-slate-800 shadow-md dark:ring-0 ring-4 ring-white absolute -left-3 -top-2  ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 md:h-6 md:w-6 stroke-black dark:stroke-slate-400 absolute left-2 top-2 md:left-1 md:top-1">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>

                            </div>

                            <!--content-->
                            <div class="mt-6 items-baseline">
                                  <h2 class="text-center dark:text-slate-100">Je me connecte en tant que</h2>
                                  <h1 class="text-center text-xl md:text-2xl dark:text-slate-100 font-semibold">Délégué</h1>
                             </div>

                         </template>
                    </Card>

                    <Card class="w-auto h-auto md:h-64 md:w-72 cursor-pointer relative ">
                         <template #content>
                            <div class="rounded-full w-8 h-8 bg-slate-50 dark:bg-slate-800 shadow-md dark:ring-0 ring-4 ring-white absolute -left-3 -top-2  ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 md:h-6 md:w-6 stroke-black dark:stroke-slate-400 absolute left-2 top-2 md:left-1 md:top-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                </svg>
                            </div>

                            <!--content-->
                             <div class="mt-6 items-baseline">
                                  <h2 class="text-center dark:text-slate-200">Je me connecte en tant que simple</h2>
                                  <h1 class="text-center text-xl md:text-2xl dark:text-slate-200 font-semibold">Etudiant</h1>
                             </div>
                         </template>
                    </Card>
                    </div>
                </transition>

                     <!--zone de création de compte-->
                  
                  <transition name="createCompte">
                      <div v-show="Loginchoice==false" class="text-px-3 md:px-4 mt-10 md:mt-8 w-[100%]  md:w-[30%] md:mx-auto justify-center py-2 md:py-3 rounded-md shadow-sm bg-white dark:bg-slate-800 dark:text-slate-200">
                  
                     <!--Zone de formulaire de connexion....-->
                  
                            <form @submit.prevent="submit">
                                <div class="px-2 py-1 space-y-2 md:py-2">
                                    <label for="nom" class="flex space-x-2 text-sm md:text-md">
                                        Name  <span class="text-red-500">*</span>  
                                    </label>
                                    <input type="text" id="nom" name="nom" class="h-6 md:h-8 w-full focus:ring-0 text-sm dark:placeholder-slate-400 placeholder-slate-600 rounded bg-slate-50 dark:bg-slate-700 dark:text-slate-200 border-none focus:transition ease-in-out duration-300 delay-75 focus:outline-none focus:bg-slate-200">
                                </div>

                                <div class="px-2 py-1 md:py-2 space-y-2">
                                    <label for="prenom"  class="flex space-x-2 text-sm md:text-md">
                                        Prénom  <span class="text-red-500">*</span>  
                                    </label>
                                    <input type="text" id="prenom" name="prenom" class="h-6 md:h-8 w-full focus:ring-0 text-sm dark:placeholder-slate-400 placeholder-slate-600 rounded bg-slate-50 dark:bg-slate-700 dark:text-slate-200 border-none focus:transition ease-in-out duration-300 delay-75 focus:outline-none focus:bg-slate-200">
                                </div>

                                <div class="px-2 py-1 md:py-2 space-y-2">
                                    <label for="email"  class="flex space-x-2 text-sm md:text-md">
                                        Email  <span class="text-red-500">*</span>  
                                    </label>
                                    <input type="text" id="email" name="email" class="h-6 md:h-8 w-full focus:ring-0 text-sm dark:placeholder-slate-400 placeholder-slate-600 rounded bg-slate-50 dark:bg-slate-700 dark:text-slate-200 border-none focus:transition ease-in-out duration-300 delay-75 focus:outline-none focus:bg-slate-200">
                                </div>

                                <div class="px-2 py-1 md:py-2 space-y-2">
                                    <label for="tp"  class="flex space-x-2 text-sm md:text-md">
                                        Votre TP<span class="text-red-500">*</span>  
                                    </label>
                                    <input type="text" id="tp" name="tp" class="h-6 md:h-8 w-full focus:ring-0 text-sm dark:placeholder-slate-400 placeholder-slate-600 rounded bg-slate-50 dark:bg-slate-700 dark:text-slate-200 border-none focus:transition ease-in-out duration-300 delay-75 focus:outline-none focus:bg-slate-200">
                                </div>

                                <div class="px-2 py-1 md:py-2 space-y-2">
                                    <label for="type inscription"  class="flex items-baseline space-x-2 text-sm md:text-md"> 
                                        Inscription en tant que <span class="text-red-500 text-xs"> (si non , ne pas coché) </span>  
                                    </label>
                                    
                                    <div class="flex items-center space-x-2 text-xs">
                                         <input type="checkbox" name="type_inscription" value="delegue" id="delegue"> <label for="delegue">Délégué</label>
                                         
                                    </div>
                                </div>

                                

                               <div class="px-2 py-1 md:py-2 space-y-2 mt-3">
                                     <button class="py-1 md:py-2 text-sm md:text-md px-6 bg-slate-800 text-slate-200 dark:bg-slate-600 gtext-slate-200">S'inscrire</button>
                               </div>

                            </form>

                      </div>
                  </transition>
                 

             </div>

             <div :class="noCompte==true?'md:col-span-1':' hidden'">
                  <!--Zone Graphique....-->
                  <p>Zone Graphique</p>
                  
             </div>

          </div>

        </template>
    </Template>
</template>

<script>
import Template from './Template.vue';
import {Head,Link} from'@inertiajs/inertia-vue3';
import Card from './Components/Card.vue';
import ModalSetting from './Components/ModalSetting.vue';
import ModalConnexion from './Components/ModalConnexion.vue';

    export default {
        components:{
           Template,
           Head,
           Link,
           Card,
           ModalSetting,
           ModalConnexion
        },

        data(){

            return {
                noCompte:false, //No compte hidden no helpful now... 
                Loginchoice:true, //choix de connexion
                modalparm:false, //Modal du param-tre
            }
        }
    }
</script>

<style scoped>

.createCompte-enter-active,
.createCompte-leave-active {
  transition: opacity 0.5ms ease;
}

.createCompte-enter-from,
.createCompte-leave-to {
  opacity: 0;
}


.logincompte-enter-active,
.logincompte-leave-active {
  transition: opacity 0.5s ease;
}

.logincompte-enter-from,
.logincompte-leave-to {
  opacity: 0;
}

.setting-enter-active,
.setting-leave-active {
  transition: opacity 0.5s ease;
}

.setting-enter-from,
.setting-leave-to {
  opacity: 0;
}


</style>