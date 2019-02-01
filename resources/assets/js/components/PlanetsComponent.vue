<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header"><h2>{{ name }}</h2></div>

                    <div class="card-body">
                      <div class="planet_unfold_image_container">
                        <img :src="image_url" class="planet_unfold_image"/>
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                name : planet_name,
                image_url : '/img/' + planet_name + '.png'
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
