<template>
    <div class="bg-black  h-max-screen bg-opacity-50 absolute inset-0 flex justify-center items-center">
        
        <div class="w-[30%] h-auto bg-slate-100 dark:bg-slate-800 dark:text-slate-200 shadow-md rounded ">
             <!--Header-->
            <div class="px-4">
                <div class="flex justify-around items-baseline">
                    <div class="text-md md:text-2xl">
                        <h1>{{title}}</h1>
                    </div>
                    <div>
                        <svg @click="$emit('exit')" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </div>
             </div>
             <!--Content-->

             <div class="px-4">
                   <slot name="content">
                        <h1>Content here...</h1>
                   </slot>
             </div>

             <!--Footer-->

             <div class="px-4">
                   <slot name="footer">
                        <h3>Footer here ....</h3>
                   </slot>
             </div>
        </div>

    </div>
</template>

<script>
    export default {
        props:{
            title:String,
        },
        emits:['exit'],
    }
</script>

<style scoped>

</style>