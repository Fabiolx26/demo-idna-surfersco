<template>
    <div class="hero py-20">
        <div class="slogan mx-auto">Ride every wave as it's your last</div>
        <div class="subtitle mx-auto">We love the motion of the ocean</div>
    </div>
</template>

<style lang="scss" scoped>
    @import '../../sass/mixins';

    @media screen and (min-width: 319px){
        .hero{
            @include flex-col;
            font-family: 'Playfair Display', serif;
            font-style: italic;
            text-align: center;

            .slogan{
                font-size: 20px;
                color: #000000
            }

            .subtitle{
                font-size: 1rem;
                color: #ffffff;
            }
        }
    }

    @media screen and (min-width: 768px){
        .hero{
    
            .slogan{
                font-size: 3rem;
            }
    
            .subtitle{
                font-size: 1.5rem;
            }
        }
    }
</style>