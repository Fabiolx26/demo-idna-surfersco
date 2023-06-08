<template>
    <div class="about-us d-flex-column">
        <h1 class="mx-auto">About us</h1>
        <div class="about">
            <div class="text my-auto">
                <div class="h2-text p-20">
                    <h2 class="mx-auto">We are Surfers co.</h2>
                    <v-icon icon="mdi-close" class="mx-auto" />
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut lab
                    </div>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
        <!--<video src="../../video/surfers.webm" class="about-video" autoplay loop muted />-->
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style scoped lang="scss">
    @import '../../sass/mixins';

    .about-us{
        bottom: 1em;
        h1{
            margin: {
                left: auto;
                right: auto;
            }
            font: {
                family: 'Montserrat';
                size: 10.25em;
                weight: 700;
            }
            text-transform: uppercase;
            color: #fafafa;
            user-select: none;
        }
        .about{
            display: flex;
            background-image: url("../../images/surfer.jpg");
            width: 100%;
            height: 500px;
            color: black;

            .text{
                background-color: white;
                width: 50%;
                padding: 4em;

                .h2-text{
                    @include flex-col;

                    h2{
                        font-family: 'Montserrat';
                        text-transform: uppercase;
                    }

                    div{
                        font-family: "Playfair Display", serif;
                        font-style: italic;
                    }
                }
            }
        }
    }
        
    

</style>