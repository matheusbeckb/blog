<template>
    <div class="container">
        <div v-bind:class="defineCorBorda">
            <div v-bind:class="defineCorHeader">
                {{ titulo }}
            </div>

            <div class="card-body">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['titulo', 'cor'],
        computed:{
            defineCorHeader: function(){
                return "card-header bg-" + (this.cor || "default")
            },
            defineCorBorda: function(){
                return "card border-" + (this.cor || "default")
            }
        }
    }
</script>
