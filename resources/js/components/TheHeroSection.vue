<template>
    <div class="hero py-20">
        <div class="slogan mx-auto">Ride every wave as it's your last</div>
        <div class="subtitle mx-auto">We love the motion of the ocean</div>
    </div>
</template>

<style lang="scss" scoped>
    @import '../../sass/mixins';

    .hero{
        @include flex-col;
        font-family: 'Playfair Display', serif;
        font-style: italic;

        .slogan{
            font-size: 3rem;
            color: #000000
        }

        .subtitle{
            font-size: 1.5rem;
            color: #ffffff;
        }
    }
</style>