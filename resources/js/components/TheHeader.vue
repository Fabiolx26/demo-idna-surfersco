<template>
    <div class="header">
        <a class="title" href="/">
            <h1>Surfers Co.</h1>
        </a>
    <!-- <div class="hamburger" @click="show = !show" :class="show ? 'hamburger--is-open' : ''">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div> -->
        <div class="links">
            <a href="/">Boards</a>
            <a href="/">Accessories</a>
            <a href="/">Blog</a>
            <a href="/">Technology</a>
            <a href="/">Team</a>
            <a href="/">Dealers</a>
        </div>
        <div class="social">
            <a href="/">
                <v-icon color="grey-darken-3" icon="mdi-facebook" />
            </a>
            <a href="/">
                <v-icon color="grey-darken-3" icon="mdi-instagram" />
            </a>
            <a href="/">
                <v-icon color="grey-darken-3" icon="mdi-email" />
            </a>
        </div>
    </div>
</template>

<script setup>
/*  import { ref } from 'vue'

    const show = ref(false);
 */
</script>

<style lang="scss" scoped>
    @import "../../sass/mixins.scss";
    @import "../../sass/variables.scss";

    @media screen and (min-width: 319px) {
        .header{
            @include flex-row;
            padding: 25px;
            text-align: center;

            .title{
                text-decoration: none;
                margin: {
                    left: auto;
                    right: auto;
                }
                
                &:visited{
                    color: #000000;
                }
            }

            /* .hamburger {
                display: flex;
                margin-left : auto;
                flex-direction: column;
                justify-content: space-between;
                background-color: transparent;
                border-radius: 50%;
                padding: 10px;
                margin-left: auto;
                margin-right: 20px;
                transition: 0.3s;
            
                .line{
                    display: block;
                    margin: 4px;
                    height: 4px;
                    width:30px;
                    background: #000000;
                    border-radius: 9px;
                    z-index: 2;
                    transition: transform 300ms cubic-bezier(0.445, 0.05, 0.55, 0.95), opacity 300ms linear;
                }

                &--is-open .line1 {
                    transform: translate(0, 12px) rotate(45deg);
                }

                &--is-open .line2 {
                    opacity: 0;
                }

                &--is-open .line3{
                    transform: translate(0, -12px) rotate(-45deg);
                } 
            } */
            
            .links{
                display: none;
            }

            .social{
                display: none;
            }
        }
    }

    @media screen and (min-width: 768px) {
        .header{
            @include flex-row;
            align-items: center;
            padding: 50px;

            .title{
                margin: unset;
                font-size: smaller;
            }

            .links{
                @include flex-row;
                margin: {
                    left: auto;
                    right: auto;
                }

                a{
                    padding: 5px;
                    margin-left: 5px;
                    text-decoration: none;
                    text-transform: uppercase;
                    color: #000000;
                    font-weight: bold;
                    transition-duration: 0.3ms;

                    &:hover{
                        color: #ffffff;
                        background-color: $main-color;
                    }
                }
            }
        }
    }

    @media screen and (min-width: 1023px){
        .header{

            .social{

                @include flex-row;
                a{
                    padding: 5px;
                }
            }
        }

    }

</style>