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
                      <br />
                      <h2>Details</h2>
                      <p>Diameter: {{ diameter }}</p>
                      <p>Rotation: {{ rotation }}</p>
                      <p>Orbital period: {{ period }}</p>
                      <p>Gravity: {{ gravity }} </p>
                      <p>Population: {{ population }}</p>
                      <p>Climate: {{ climate }}</p>
                      <p>Terrain: {{ terrain }}</p>
                      <p>Surface water: {{ water }}</p>
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
                diameter : planet_diameter,
                rotation : planet_rotation,
                period : planet_period,
                gravity : planet_gravity,
                population : planet_population,
                climate : planet_climate,
                terrain : planet_terrain,
                water : planet_water,
                image_url : 'img/' + planet_name + '.png'
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
